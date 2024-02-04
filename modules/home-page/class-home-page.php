<?php

/**
 * @class    Cart Page
 * @category Class
 * @author   Ganesh pawar
 * */
class HomePage {

    protected static $_instance = null;

    public static function get_instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        $this->hooks();
    }

    public function hooks() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles_scripts'));
    }

    /* ----------------------------------------------------- */
    /* Enqueue stylesheets javascript only for this module only */
    /* ----------------------------------------------------- */
    public function enqueue_styles_scripts() {
        if (is_page('')){
            /*  Style Sheets */
            wp_enqueue_style('home_page_style', get_stylesheet_directory_uri() . '/modules/home-page/css/style.css');
            wp_enqueue_style('home_page_responsive_style', get_stylesheet_directory_uri() . '/modules/home-page/css/responsive-style.css');

            /*  Java Scripts */
            wp_enqueue_script('home_page_script', get_stylesheet_directory_uri() . '/modules/home-page/js/script.js', array('jquery'));
        }
    }
    
} //end class

function home_page_object() {
    return HomePage::get_instance();
}

home_page_object();
