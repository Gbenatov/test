{"filter":false,"title":"home.php","tooltip":"/wp-content/themes/responsive/home.php","undoManager":{"mark":13,"position":13,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":0},"end":{"row":78,"column":22}},"text":"<?php get_footer(); ?>"},{"action":"removeLines","range":{"start":{"row":0,"column":0},"end":{"row":78,"column":0}},"nl":"\r\n","lines":["<?php","","// Exit if accessed directly","if( !defined( 'ABSPATH' ) ) {","\texit;","}","","/**"," * Blog Template"," *"," * @file           home.php"," * @package        Responsive"," * @author         Emil Uzelac"," * @copyright      2003 - 2014 CyberChimps"," * @license        license.txt"," * @version        Release: 1.1.0"," * @filesource     wp-content/themes/responsive/home.php"," * @link           http://codex.wordpress.org/Templates"," * @since          available since Release 1.0"," */","","get_header();","","global $more;","$more = 0;","?>","","\t<div id=\"content-blog\" class=\"<?php echo implode( ' ', responsive_get_content_classes() ); ?>\">","","\t\t<!-- Blog page title -->","\t\t<?php if( responsive_free_get_option( 'blog_post_title_toggle' ) ) { ?>","\t\t\t<h1> <?php echo responsive_free_get_option( 'blog_post_title_text' ); ?> </h1>","\t\t<?php } ?>","","\t\t<?php get_template_part( 'loop-header' ); ?>","","\t\t<?php if( have_posts() ) : ?>","","\t\t\t<?php while( have_posts() ) : the_post(); ?>","","\t\t\t\t<?php responsive_entry_before(); ?>","\t\t\t\t<div id=\"post-<?php the_ID(); ?>\" <?php post_class(); ?>>","\t\t\t\t\t<?php responsive_entry_top(); ?>","","\t\t\t\t\t<?php get_template_part( 'post-meta' ); ?>","","\t\t\t\t\t<div class=\"post-entry\">","\t\t\t\t\t\t<?php if( has_post_thumbnail() ) : ?>","\t\t\t\t\t\t\t<a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\">","\t\t\t\t\t\t\t\t<?php the_post_thumbnail(); ?>","\t\t\t\t\t\t\t</a>","\t\t\t\t\t\t<?php endif; ?>","\t\t\t\t\t\t<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>","\t\t\t\t\t\t<?php wp_link_pages( array( 'before' => '<div class=\"pagination\">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>","\t\t\t\t\t</div>","\t\t\t\t\t<!-- end of .post-entry -->","","\t\t\t\t\t<?php get_template_part( 'post-data' ); ?>","","\t\t\t\t\t<?php responsive_entry_bottom(); ?>","\t\t\t\t</div><!-- end of #post-<?php the_ID(); ?> -->","\t\t\t\t<?php responsive_entry_after(); ?>","","\t\t\t<?php","\t\t\tendwhile;","","\t\t\tget_template_part( 'loop-nav' );","","\t\telse :","","\t\t\tget_template_part( 'loop-no-posts' );","","\t\tendif;","\t\t?>","","\t</div><!-- end of #content-blog -->","","<?php get_sidebar(); ?>"]},{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\r\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":78,"column":0}},"lines":["","// Exit if accessed directly","if( !defined( 'ABSPATH' ) ) {","\texit;","}","","/**"," * Blog Template"," *"," * @file           home.php"," * @package        Responsive"," * @author         Emil Uzelac"," * @copyright      2003 - 2014 CyberChimps"," * @license        license.txt"," * @version        Release: 1.1.0"," * @filesource     wp-content/themes/responsive/home.php"," * @link           http://codex.wordpress.org/Templates"," * @since          available since Release 1.0"," */","","get_header();","","global $more;","$more = 0;","?>","","\t<div id=\"content-blog\" class=\"<?php echo implode( ' ', responsive_get_content_classes() ); ?>\">","","\t\t<!-- Blog page title -->","\t\t<?php if( responsive_free_get_option( 'blog_post_title_toggle' ) ) { ?>","\t\t\t<h1> <?php echo responsive_free_get_option( 'blog_post_title_text' ); ?> </h1>","\t\t<?php } ?>","","\t\t<?php get_template_part( 'loop-header' ); ?>","","\t\t<?php if( have_posts() ) : ?>","","\t\t\t<?php while( have_posts() ) : the_post(); ?>","","\t\t\t\t<?php responsive_entry_before(); ?>","\t\t\t\t<div id=\"post-<?php the_ID(); ?>\" <?php post_class(); ?>>","\t\t\t\t\t<?php responsive_entry_top(); ?>","","\t\t\t\t\t<?php get_template_part( 'post-meta' ); ?>","","\t\t\t\t\t<div class=\"post-entry\">","\t\t\t\t\t\t<?php if( has_post_thumbnail() ) : ?>","\t\t\t\t\t\t\t<a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\">","\t\t\t\t\t\t\t\t<?php the_post_thumbnail(); ?>","\t\t\t\t\t\t\t</a>","\t\t\t\t\t\t<?php endif; ?>","\t\t\t\t\t\t<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>","\t\t\t\t\t\t<?php wp_link_pages( array( 'before' => '<div class=\"pagination\">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>","\t\t\t\t\t</div>","\t\t\t\t\t<!-- end of .post-entry -->","","\t\t\t\t\t<?php get_template_part( 'post-data' ); ?>","","\t\t\t\t\t<?php responsive_entry_bottom(); ?>","\t\t\t\t</div><!-- end of #post-<?php the_ID(); ?> -->","\t\t\t\t<?php responsive_entry_after(); ?>","","\t\t\t<?php","\t\t\tendwhile;","","\t\t\tget_template_part( 'loop-nav' );","","\t\telse :","","\t\t\tget_template_part( 'loop-no-posts' );","","\t\tendif;","\t\t?>","","\t</div><!-- end of #content-blog -->","","<?php get_sidebar(); ?>"]},{"action":"insertText","range":{"start":{"row":78,"column":0},"end":{"row":78,"column":22}},"text":"<?php get_footer(); ?>"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":78,"column":0},"end":{"row":78,"column":22}},"text":"<?php get_footer(); ?>"},{"action":"removeLines","range":{"start":{"row":22,"column":0},"end":{"row":78,"column":0}},"nl":"\r\n","lines":["","global $more;","$more = 0;","?>","","\t<div id=\"content-blog\" class=\"<?php echo implode( ' ', responsive_get_content_classes() ); ?>\">","","\t\t<!-- Blog page title -->","\t\t<?php if( responsive_free_get_option( 'blog_post_title_toggle' ) ) { ?>","\t\t\t<h1> <?php echo responsive_free_get_option( 'blog_post_title_text' ); ?> </h1>","\t\t<?php } ?>","","\t\t<?php get_template_part( 'loop-header' ); ?>","","\t\t<?php if( have_posts() ) : ?>","","\t\t\t<?php while( have_posts() ) : the_post(); ?>","","\t\t\t\t<?php responsive_entry_before(); ?>","\t\t\t\t<div id=\"post-<?php the_ID(); ?>\" <?php post_class(); ?>>","\t\t\t\t\t<?php responsive_entry_top(); ?>","","\t\t\t\t\t<?php get_template_part( 'post-meta' ); ?>","","\t\t\t\t\t<div class=\"post-entry\">","\t\t\t\t\t\t<?php if( has_post_thumbnail() ) : ?>","\t\t\t\t\t\t\t<a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\">","\t\t\t\t\t\t\t\t<?php the_post_thumbnail(); ?>","\t\t\t\t\t\t\t</a>","\t\t\t\t\t\t<?php endif; ?>","\t\t\t\t\t\t<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>","\t\t\t\t\t\t<?php wp_link_pages( array( 'before' => '<div class=\"pagination\">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>","\t\t\t\t\t</div>","\t\t\t\t\t<!-- end of .post-entry -->","","\t\t\t\t\t<?php get_template_part( 'post-data' ); ?>","","\t\t\t\t\t<?php responsive_entry_bottom(); ?>","\t\t\t\t</div><!-- end of #post-<?php the_ID(); ?> -->","\t\t\t\t<?php responsive_entry_after(); ?>","","\t\t\t<?php","\t\t\tendwhile;","","\t\t\tget_template_part( 'loop-nav' );","","\t\telse :","","\t\t\tget_template_part( 'loop-no-posts' );","","\t\tendif;","\t\t?>","","\t</div><!-- end of #content-blog -->","","<?php get_sidebar(); ?>"]},{"action":"removeText","range":{"start":{"row":21,"column":12},"end":{"row":21,"column":13}},"text":";"},{"action":"removeText","range":{"start":{"row":21,"column":12},"end":{"row":22,"column":0}},"text":"\r\n"},{"action":"insertText","range":{"start":{"row":21,"column":12},"end":{"row":21,"column":13}},"text":";"},{"action":"insertText","range":{"start":{"row":21,"column":13},"end":{"row":22,"column":0}},"text":"\r\n"},{"action":"insertLines","range":{"start":{"row":22,"column":0},"end":{"row":78,"column":0}},"lines":["","global $more;","$more = 0;","?>","","\t<div id=\"content-blog\" class=\"<?php echo implode( ' ', responsive_get_content_classes() ); ?>\">","","\t\t<!-- Blog page title -->","\t\t<?php if( responsive_free_get_option( 'blog_post_title_toggle' ) ) { ?>","\t\t\t<h1> <?php echo responsive_free_get_option( 'blog_post_title_text' ); ?> </h1>","\t\t<?php } ?>","","\t\t<?php get_template_part( 'loop-header' ); ?>","","\t\t<?php if( have_posts() ) : ?>","","\t\t\t<?php while( have_posts() ) : the_post(); ?>","","\t\t\t\t<?php responsive_entry_before(); ?>","\t\t\t\t<div id=\"post-<?php the_ID(); ?>\" <?php post_class(); ?>>","\t\t\t\t\t<?php responsive_entry_top(); ?>","","\t\t\t\t\t<?php get_template_part( 'post-meta' ); ?>","","\t\t\t\t\t<div class=\"post-entry\">","\t\t\t\t\t\t<?php if( has_post_thumbnail() ) : ?>","\t\t\t\t\t\t\t<a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\">","\t\t\t\t\t\t\t\t<?php the_post_thumbnail(); ?>","\t\t\t\t\t\t\t</a>","\t\t\t\t\t\t<?php endif; ?>","\t\t\t\t\t\t<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>","\t\t\t\t\t\t<?php wp_link_pages( array( 'before' => '<div class=\"pagination\">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>","\t\t\t\t\t</div>","\t\t\t\t\t<!-- end of .post-entry -->","","\t\t\t\t\t<?php get_template_part( 'post-data' ); ?>","","\t\t\t\t\t<?php responsive_entry_bottom(); ?>","\t\t\t\t</div><!-- end of #post-<?php the_ID(); ?> -->","\t\t\t\t<?php responsive_entry_after(); ?>","","\t\t\t<?php","\t\t\tendwhile;","","\t\t\tget_template_part( 'loop-nav' );","","\t\telse :","","\t\t\tget_template_part( 'loop-no-posts' );","","\t\tendif;","\t\t?>","","\t</div><!-- end of #content-blog -->","","<?php get_sidebar(); ?>"]},{"action":"insertText","range":{"start":{"row":78,"column":0},"end":{"row":78,"column":22}},"text":"<?php get_footer(); ?>"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":95},"end":{"row":27,"column":96}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":96},"end":{"row":27,"column":98}},"text":"st"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":98},"end":{"row":27,"column":101}},"text":"yle"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":101},"end":{"row":27,"column":103}},"text":"=\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":103},"end":{"row":27,"column":110}},"text":"display"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":110},"end":{"row":27,"column":113}},"text":":no"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":113},"end":{"row":27,"column":116}},"text":"ne;"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":116},"end":{"row":27,"column":117}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":27,"column":0},"end":{"row":28,"column":0}},"text":"\r\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":26,"column":0},"end":{"row":26,"column":39}},"text":"\t<div id=\"featured\" class=\"main-image\">"},{"action":"insertText","range":{"start":{"row":26,"column":39},"end":{"row":27,"column":0}},"text":"\r\n"},{"action":"insertLines","range":{"start":{"row":27,"column":0},"end":{"row":95,"column":0}},"lines":["            ","\t\t<div id=\"featured-content\" class=\"grid col-460\">","","\t\t\t<h1 class=\"featured-title\">","\t\t\t\t<?php","\t\t\t\tif ( isset( $responsive_options['home_headline'] ) && $db && $empty ) {","\t\t\t\t\techo $responsive_options['home_headline'];","\t\t\t\t} else {","\t\t\t\t\t_e( 'Hello, World!', 'responsive' );","\t\t\t\t}","\t\t\t\t?>","\t\t\t</h1>","","\t\t\t<h2 class=\"featured-subtitle\">","\t\t\t\t<?php","\t\t\t\tif ( isset( $responsive_options['home_subheadline'] ) && $db && $empty )","\t\t\t\t\techo $responsive_options['home_subheadline'];","\t\t\t\telse {","\t\t\t\t\t_e( 'Your H2 subheadline here', 'responsive' );","\t\t\t\t}","\t\t\t\t?>","\t\t\t</h2>","","\t\t\t<?php","\t\t\tif ( isset( $responsive_options['home_content_area'] ) && $db && $empty ) {","\t\t\t\techo do_shortcode( wpautop( $responsive_options['home_content_area'] ) );","\t\t\t} else {","\t\t\t\t?>","\t\t\t","\t\t\t","","\t\t\t<?php","\t\t\t}","","\t\t\tif ( $responsive_options['cta_button'] == 0 ): ?>","","\t\t\t\t<div class=\"call-to-action\">","\t\t\t\t    ","","\t\t\t\t\t<a href=\"<?php echo $responsive_options['cta_url']; ?>\"  class=\"blue button\">","\t\t\t\t\t","\t\t\t\t\t\t<?php","\t\t\t\t\t\tif ( isset( $responsive_options['cta_text'] ) && $db )","\t\t\t\t\t\t\techo $responsive_options['cta_text'];","\t\t\t\t\t\telse","\t\t\t\t\t\t\t_e( 'Call to Action', 'responsive' );","\t\t\t\t\t\t?>","\t\t\t\t\t\t","\t\t\t\t\t</a>","\t\t\t\t<h4 style=\"color:gray;text-align: right;font-size: 16px;font-weight: 200;margin-top: 0px;\" ;=\"\" 'margin-top:-33px';=\"\" 'font-weight:200'=\"\"> *מה זה ייצוגית</h4>","","\t\t\t\t</div><!-- end of .call-to-action -->","","\t\t\t<?php endif; ?>","","\t\t</div>","\t\t<!-- end of .col-460 -->","","\t\t<div id=\"featured-image\" class=\"grid col-460 fit\">","","\t\t\t<?php $featured_content = ( !empty( $responsive_options['featured_content'] ) ) ? $responsive_options['featured_content'] : '<img class=\"aligncenter\" src=\"' . get_template_directory_uri() . '/core/images/groppy6.png\" width=\"440\" height=\"300\" alt=\"\" />'; ?>","","\t\t\t<?php echo do_shortcode( wpautop( $featured_content ) ); ?>","","\t\t</div>","\t\t<!-- end of #featured-image -->","","\t</div><!-- end of #featured -->"]}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":147,"column":18},"end":{"row":147,"column":26}},"text":" 'home' "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":145,"column":0},"end":{"row":145,"column":36}},"text":"\t</div><!-- end of #content-blog -->"},{"action":"removeLines","range":{"start":{"row":97,"column":0},"end":{"row":145,"column":0}},"nl":"\r\n","lines":["\t<div id=\"content-blog\" class=\"<?php echo implode( ' ', responsive_get_content_classes() ); ?>\" style=\"display:none;\">","","\t\t<!-- Blog page title -->","\t\t<?php if( responsive_free_get_option( 'blog_post_title_toggle' ) ) { ?>","\t\t\t<h1> <?php echo responsive_free_get_option( 'blog_post_title_text' ); ?> </h1>","\t\t<?php } ?>","","\t\t<?php get_template_part( 'loop-header' ); ?>","","\t\t<?php if( have_posts() ) : ?>","","\t\t\t<?php while( have_posts() ) : the_post(); ?>","","\t\t\t\t<?php responsive_entry_before(); ?>","\t\t\t\t<div id=\"post-<?php the_ID(); ?>\" <?php post_class(); ?>>","\t\t\t\t\t<?php responsive_entry_top(); ?>","","\t\t\t\t\t<?php get_template_part( 'post-meta' ); ?>","","\t\t\t\t\t<div class=\"post-entry\">","\t\t\t\t\t\t<?php if( has_post_thumbnail() ) : ?>","\t\t\t\t\t\t\t<a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\">","\t\t\t\t\t\t\t\t<?php the_post_thumbnail(); ?>","\t\t\t\t\t\t\t</a>","\t\t\t\t\t\t<?php endif; ?>","\t\t\t\t\t\t<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>","\t\t\t\t\t\t<?php wp_link_pages( array( 'before' => '<div class=\"pagination\">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>","\t\t\t\t\t</div>","\t\t\t\t\t<!-- end of .post-entry -->","","\t\t\t\t\t<?php get_template_part( 'post-data' ); ?>","","\t\t\t\t\t<?php responsive_entry_bottom(); ?>","\t\t\t\t</div><!-- end of #post-<?php the_ID(); ?> -->","\t\t\t\t<?php responsive_entry_after(); ?>","","\t\t\t<?php","\t\t\tendwhile;","","\t\t\tget_template_part( 'loop-nav' );","","\t\telse :","","\t\t\tget_template_part( 'loop-no-posts' );","","\t\tendif;","\t\t?>",""]}]}]]},"ace":{"folds":[],"scrolltop":840,"scrollleft":0,"selection":{"start":{"row":21,"column":12},"end":{"row":21,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1407436781573,"hash":"fc7915bdaff44cedd3571b9f4cdb7ff25ef47901"}