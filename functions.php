<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */

// ------------------------------------------------

// function sf_child_theme_dequeue_style() {
//     wp_dequeue_style( 'storefront-style' );
//     wp_dequeue_style( 'storefront-woocommerce-style' );
// }

//----------------------------------------------------


// function sf_child_theme_style(){
//     wp_equeue_style( 'storefront-style', get_template_directory_uri() . "/assest/css/global-style.css", array(), '1.0', 'all');
// }

// add_action('global-style','sf_child_theme_style',1)
/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */



 /* ------------------------------------------------------ */
/* wp eneque scripts  */
/* ------------------------------------------------------ */

add_action('wp_enqueue_scripts', 'add_theme_script', 1);

function add_theme_script()
{
   wp_enqueue_style('global_archivo_fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500;600;700;800;900&display=swap', false);
   wp_enqueue_style('global_montserrat_fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap', false);
   wp_enqueue_style('global_mogra_fonts', 'https://fonts.googleapis.com/css2?family=Mogra&display=swap', false);
   wp_enqueue_style('global_style', get_stylesheet_directory_uri() . '/assets/css/global-style.css', array(), '1.1', 'all');
   wp_enqueue_style('global_responsive_style', get_stylesheet_directory_uri() . '/assets/css/global-responsive.css', array(), '1.1', 'all');
   wp_enqueue_style('slick_slider_style', get_stylesheet_directory_uri() . '/assets/css/slick.css');
   wp_enqueue_style('slick_slider_theme_style', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
   wp_enqueue_style('slick_slider_lightbox_style', get_stylesheet_directory_uri() . '/assets/css/slick-lightbox.css');
   wp_enqueue_style('magnific_popup_style', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css');
   wp_enqueue_style('font_aweosme_style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');


   wp_enqueue_script('global-script-js', get_stylesheet_directory_uri() . '/assets/js/global-script.js', array('jquery'));
   wp_enqueue_script('slick_slider_script', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'));
   wp_enqueue_script('slick_slider_lightbox_script', get_stylesheet_directory_uri() . '/assets/js/slick-lightbox.min.js', array('jquery'));
   wp_enqueue_script('magnific_popup_script', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'));
}

// ------------------------- Load Codingkart Modules ----------------------------- //

require_once 'modules/included-files.php';

// ------------------------- Custom Widget for Shop Page ------------------------- // 

function shop_widget() {
   register_sidebar(array(
      'name' => 'Shop Widget',
      'id'   => 'shop_widget',
      'description'   => 'will be desplayed in the shop',
      'before_title'  => '<h2 class="shopWidget_title">',
      'after_title'   => '</h2>'   
   ));
}

add_action('widgets_init','shop_widget');

//---------------------- Remove Review Tab in Content Single Product ----------------------------//

// function remove_product_reviews_tab( $tabs ) {
//    unset( $tabs['reviews'] );
//    return $tabs;
// }
// add_filter( 'woocommerce_product_tabs', 'remove_product_reviews_tab', 98 );

function remove_product_reviews_tab( $tabs ) {
   remove_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
}
add_filter( 'woocommerce_product_tabs', 'remove_product_reviews_tab', 98 );

//---------------------- Sale Tag in Content Single Product ----------------------------//

?>
