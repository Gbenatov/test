<?php

/**
 *
 * Class Featured Post Widget Admin
 *
 * @ A5 Featured Post Widget
 *
 * building admin page
 *
 */
class FP_Admin extends A5_OptionPage {
	
	const language_file = 'postfeature';
	
	static $options;
	
	function __construct() {
	
		add_action('admin_init', array(&$this, 'initialize_settings'));
		add_action('admin_menu', array(&$this, 'add_admin_menu'));
		if (WP_DEBUG == true) add_action('admin_enqueue_scripts', array(&$this, 'enqueue_scripts'));
		
		self::$options = get_option('pf_options');
		
	}
	
	/**
	 *
	 * Make debug info collapsable
	 *
	 */
	function enqueue_scripts($hook){
		
		if ($hook != 'settings_page_featured-post-settings') return;
		
		wp_enqueue_script('dashboard');
		
	}
	
	/**
	 *
	 * Add options-page for single site
	 *
	 */
	function add_admin_menu() {
		
		add_options_page('Featured Post Widget '.__('Settings', self::language_file), '<img alt="" src="'.plugins_url('post-feature-widget/img/a5-icon-11.png').'"> Featured Post Widget', 'administrator', 'featured-post-settings', array(&$this, 'build_options_page'));
		
	}
	
	/**
	 *
	 * Actually build the option pages
	 *
	 */
	function build_options_page() {
		
		$eol = "\r\n";
		
		self::open_page('Featured Post Widget', __('http://wasistlos.waldemarstoffel.com/plugins-fur-wordpress/featured-post-widget', self::language_file), 'category-coloumn', __('Plugin Support', self::language_file));
		
		self::open_form('options.php');
		
		settings_fields('pf_options');
		do_settings_sections('pf_style');
		submit_button();
		
		if (WP_DEBUG === true) :
			
			echo '<div id="poststuff">';
			
			self::open_draggable(__('Debug Info', self::language_file), 'debug-info');
			
			echo '<pre>';
			
			var_dump(self::$options);
			
			echo '</pre>';
			
			self::close_draggable();
			
			echo '</div>';
		
		endif;
		
		self::close_page();
		
	}
	
	/**
	 *
	 * Initialize the admin screen of the plugin
	 *
	 */
	function initialize_settings() {
		
		register_setting( 'pf_options', 'pf_options', array(&$this, 'validate') );
		
		add_settings_section('pf_settings', __('Styling of the widgets', self::language_file), array(&$this, 'display_section'), 'pf_style');
		
		add_settings_field('pf_css', __('Widget container:', self::language_file), array(&$this, 'css_field'), 'pf_style', 'pf_settings', array(__('You can enter your own style for the widgets here. This will overwrite the styles of your theme.', self::language_file), __('If you leave this empty, you can still style every instance of the widget individually.', self::language_file)));
		
		add_settings_field('pf_compress', __('Compress Style Sheet:', self::language_file), array(&$this, 'compress_field'), 'pf_style', 'pf_settings', array(__('Click here to compress the style sheet.', self::language_file)));
		
		add_settings_field('pf_inline', __('Debug:', self::language_file), array(&$this, 'inline_field'), 'pf_style', 'pf_settings', array(__('If you can&#39;t reach the dynamical style sheet, you&#39;ll have to diplay the styles inline. By clicking here you can do so.', self::language_file)));
		
		$cachesize = count(self::$options['cache']);
		
		$entry = ($cachesize > 1) ? __('entries', self::language_file) : __('entry', self::language_file);
		
		if ($cachesize > 0) add_settings_field('pf_reset', sprintf(__('Empty cache (%d %s):', self::language_file), $cachesize, $entry), array(&$this, 'reset_field'), 'pf_style', 'pf_settings', array(__('You can empty the plugin&#39;s cache here, if necessary.', self::language_file)));
		
		add_settings_field('pf_resize', false, array(&$this, 'resize_field'), 'pf_style', 'pf_settings');
	
	}
	
	function display_section() {
		
		echo '<p>'.__('Just put some css code here.', self::language_file).'</p>';
	
	}
	
	function css_field($labels) {
		
		echo $labels[0].'</br>'.$labels[1].'</br>';
		
		a5_textarea('css', 'pf_options[css]', @self::$options['css'], false, array('rows' => 7, 'cols' => 35));
		
	}
	
	function compress_field($labels) {
		
		a5_checkbox('compress', 'pf_options[compress]', @self::$options['compress'], $labels[0]);
		
	}
	
	function inline_field($labels) {
		
		a5_checkbox('inline', 'pf_options[inline]', @self::$options['inline'], $labels[0]);
		
	}
	
	function reset_field($labels) {
		
		a5_checkbox('reset_options', 'pf_options[reset_options]', @self::$options['reset_options'], $labels[0]);
		
	}
	
	function resize_field() {
		
		a5_resize_textarea(array('css'));
		
	}
		
	function validate($input) {
		
		self::$options['css']=trim($input['css']);
		self::$options['compress'] = isset($input['compress']) ? true : false;
		self::$options['inline'] = isset($input['inline']) ? true : false;
		
		if (isset($input['reset_options'])) :
		
			self::$options['cache'] = array();
			
			add_settings_error('pf_options', 'empty-cache', __('Cache emptied.', self::language_file), 'updated');
			
		endif;
		
		return self::$options;
	
	}

} // end of class

?>