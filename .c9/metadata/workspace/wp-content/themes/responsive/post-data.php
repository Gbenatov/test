{"filter":false,"title":"post-data.php","tooltip":"/wp-content/themes/responsive/post-data.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":46,"column":0},"end":{"row":46,"column":83}},"text":"<div class=\"post-edit\"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>"},{"action":"removeLines","range":{"start":{"row":0,"column":0},"end":{"row":46,"column":0}},"nl":"\r\n","lines":["","","<?php","","// Exit if accessed directly","if( !defined( 'ABSPATH' ) ) {","\texit;","}","","/**"," * Post Data Template-Part File"," *"," * @file           post-data.php"," * @package        Responsive"," * @author         Emil Uzelac"," * @copyright      2003 - 2014 CyberChimps"," * @license        license.txt"," * @version        Release: 1.1.0"," * @filesource     wp-content/themes/responsive/post-data.php"," * @link           http://codex.wordpress.org/Templates"," * @since          available since Release 1.0"," */","?>"," <?the_post_thumbnail(80,80);","add_image_size( 'single-post-thumbnail', 590, 180 );","","","?>","","","","","<?php if( !is_page() && !is_search() ) { ?>","","\t<div class=\"post-data\">","\t    ","\t\t<?php printf( __( 'קטגוריה %s', 'responsive' ), get_the_category_list( ', ' ) ); ?>","\t\t<?php the_tags( __( 'סטטוס', 'responsive' ) . ' ', ', ', '<br />' ); ?>","\t\t","\t</div><!-- end of .post-data -->","","<?php } ?>","","","",""]},{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":5}},"text":"<?php"},{"action":"insertText","range":{"start":{"row":0,"column":5},"end":{"row":1,"column":0}},"text":"\r\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":31,"column":0}},"lines":["","// Exit if accessed directly","if( !defined( 'ABSPATH' ) ) {","\texit;","}","","/**"," * Post Data Template-Part File"," *"," * @file           post-data.php"," * @package        Responsive"," * @author         Emil Uzelac"," * @copyright      2003 - 2014 CyberChimps"," * @license        license.txt"," * @version        Release: 1.1.0"," * @filesource     wp-content/themes/responsive/post-data.php"," * @link           http://codex.wordpress.org/Templates"," * @since          available since Release 1.0"," */","?>","","<?php if( !is_page() && !is_search() ) { ?>","","\t<div class=\"post-data\">","\t\t<?php printf( __( 'Posted in %s', 'responsive' ), get_the_category_list( ', ' ) ); ?>","\t\t<?php the_tags( __( 'Tagged with:', 'responsive' ) . ' ', ', ', '<br />' ); ?>","\t</div><!-- end of .post-data -->","","<?php } ?>",""]},{"action":"insertText","range":{"start":{"row":31,"column":0},"end":{"row":31,"column":83}},"text":"<div class=\"post-edit\"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":31,"column":83},"end":{"row":31,"column":83},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":112,"mode":"ace/mode/php"}},"timestamp":1407392414658,"hash":"ab8d11f090ed2f0c316e07fd413f0095f4380fcc"}