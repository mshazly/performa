<?php
function jquery_cdn() {
   //if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_deregister_script( 'jquery-migrate' );
      wp_register_script('jquery', get_template_directory_uri() . '/_include/libs/jquery/dist/jquery.js', array(), '2.1.3',TRUE);
      wp_enqueue_script('jquery');
   //}
}
add_action('init', 'jquery_cdn');


function performa_scripts() {

    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', '1.3' );
    
    
    wp_enqueue_script('tether', get_template_directory_uri() . '/_include/libs/tether/dist/js/tether.min.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/_include/libs/bootstrap/dist/js/bootstrap.js', 'jquery', '4.0', TRUE);
    wp_enqueue_script('jqstorageapi', get_template_directory_uri() . '/_include/libs/jQuery-Storage-API/jquery.storageapi.min.js', 'jquery', '1.7.5', TRUE);
    wp_enqueue_script('pace-js', get_template_directory_uri() . '/_include/libs/PACE/pace.min.js', 'jquery', '1.0.2', TRUE);
    wp_enqueue_script('pjax-js', get_template_directory_uri() . '/_include/libs/jquery-pjax/jquery.pjax.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('blockUI-js', get_template_directory_uri() . '/_include/libs/blockUI/jquery.blockUI.js', 'jquery', '2.70.0', TRUE);
    wp_enqueue_script('jscroll-js', get_template_directory_uri() . '/_include/libs/jscroll/jquery.jscroll.min.js', 'jquery', '2.3.5', TRUE);
    wp_enqueue_script('lazyload-js', get_template_directory_uri() . '/_include/js/config.lazyload.js', 'jquery', '1.1', TRUE);
    wp_localize_script( 'lazyload-js', 'global_var', array('ajax_url' => admin_url( 'admin-ajax.php' ), 'template_dir' => get_template_directory_uri(), 'site_url'=>get_bloginfo('url')));
    
    wp_enqueue_script('ui-load', get_template_directory_uri() . '/_include/js/ui-load.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-jp', get_template_directory_uri() . '/_include/js/ui-jp.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-include', get_template_directory_uri() . '/_include/js/ui-include.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-device', get_template_directory_uri() . '/_include/js/ui-device.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-form', get_template_directory_uri() . '/_include/js/ui-form.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-modal', get_template_directory_uri() . '/_include/js/ui-modal.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-nav', get_template_directory_uri() . '/_include/js/ui-nav.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-list', get_template_directory_uri() . '/_include/js/ui-list.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-screenfull', get_template_directory_uri() . '/_include/js/ui-screenfull.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-scroll-to', get_template_directory_uri() . '/_include/js/ui-scroll-to.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-toggle-class', get_template_directory_uri() . '/_include/js/ui-toggle-class.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ui-taburl', get_template_directory_uri() . '/_include/js/ui-taburl.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/_include/js/app.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('ajax-js', get_template_directory_uri() . '/_include/js/ajax.js', 'jquery', '1.0', TRUE);
    wp_enqueue_script('rtl-js', get_template_directory_uri() . '/_include/js/rtl.js', 'jquery', '1.0', TRUE);
    
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/_include/libs/isotope/isotope.pkgd.min.js', 'jquery', '1.0', TRUE);
    
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/_include/js/scripts.js', 'isotope-js', '1.3', TRUE);
  
    
    /*  
    wp_enqueue_script('custom-scripts-js', get_template_directory_uri() . '/_include/js/scripts.js', array('bootstrap-js'), '1.0', true);
    wp_localize_script( 'custom-scripts-js', 'global_var', array('ajax_url' => admin_url( 'admin-ajax.php' ), 'template_dir' => get_template_directory_uri(), 'site_url'=>get_bloginfo('url')));*/
}

add_action( 'wp_enqueue_scripts', 'performa_scripts' );

/*-----------------------------------------------------------------------------------*/
/*	Theme Setup
/*-----------------------------------------------------------------------------------*/

if ( !function_exists( 'az_theme_setup' ) ) {
	function az_theme_setup(){
		// Load Translation Domain
		//load_theme_textdomain(AZ_THEME_NAME, get_template_directory() . '/languages');

		// Remove Generator for Security
		remove_action( 'wp_head', 'wp_generator' );

                // Add Support for Post Formats
		add_theme_support('post-formats', array('quote','video','audio', 'image', 'gallery','link'));

                // Configure Thumbnails
		add_theme_support('post-thumbnails');

		// Register Menus
		register_nav_menus(array('primary_menu' => __( 'Primary Menu' )));
                
                /*$user_role = add_role(
                    'investor',
                    __( 'Investor' ),
                    array(
                        'read'         => TRUE,  
                        'edit_posts'   => FALSE,
                        'delete_posts' => FALSE, 
                    )
                );
                
                
                if( current_user_can('subscriber') || current_user_can('investor') ):
                    show_admin_bar(false);
                endif;*/
                
                update_option( 'image_default_align', 'none' );
                //update_option( 'image_default_link_type', 'none' );
                update_option( 'image_default_size', 'full' );

	}
}
add_action('after_setup_theme', 'az_theme_setup');

function get_main_menu($post_id){
				$primary_nav = wp_get_nav_menu_items('Primary Menu');
				$primary_nav_beef = NULL;
				$beef_count = 0;
                                if(empty($post_id)):
                                    global $post;
                                    $post_id = $post->ID;
                                endif;
				foreach($primary_nav as $primary_item):
                                    $beef_count ++;
                                    $menuclass = $actv_html = '';
                                    if($post_id == $primary_item->object_id):
                                        $menuclass = 'current';
                                        $actv_html = '<span class="nav-label">
                                                        <b class="label label-xs rounded danger"></b>
                                                      </span>';
                                    endif;
                                                   //<i class='ion-filing'></i>
                                    $primary_nav_beef .= "<li><a href=". $primary_item->url ." class='b-default ".$menuclass."'>"
                                                            .$actv_html
                                                            ."<span class='nav-icon'><i class='ion-filing'></i></span>"
                                                            . "<span>". $primary_item->title ."</span></a></li>";
				endforeach;

				echo "<ul class='nav' data-ui-nav >" . $primary_nav_beef . "</ul>";

	
}

?>