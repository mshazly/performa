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

    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', '1.0' );
    
    
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
  
    
    /*  
    wp_enqueue_script('custom-scripts-js', get_template_directory_uri() . '/_include/js/scripts.js', array('bootstrap-js'), '1.0', true);
    wp_localize_script( 'custom-scripts-js', 'global_var', array('ajax_url' => admin_url( 'admin-ajax.php' ), 'template_dir' => get_template_directory_uri(), 'site_url'=>get_bloginfo('url')));*/
}

add_action( 'wp_enqueue_scripts', 'performa_scripts' );

?>