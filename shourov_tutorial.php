<?php
/**
 * Plugin Name: Shourov Tutorials
 * Description: This plugin is created by Shourov.
 * Version: 1.0
 * Author: Arafat
 */
class Shourov_Tutorials {
    static $instance = null;
    private function __construct() {
        $this->require_classes();
    }
    /**
     * this is main loader file
     */
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function require_classes() {
        require_once plugin_dir_path(__FILE__) . 'includes/admin_menu.php';
        require_once plugin_dir_path(__FILE__) . 'includes/custom-column.php';
        require_once plugin_dir_path(__FILE__) . 'includes/custom-post-type.php';
        require_once plugin_dir_path(__FILE__) . 'includes/books-and-chapters.php';
        require_once plugin_dir_path(__FILE__) . 'includes/chapter-for-books.php';

        new Shourov_Tutorials_Admin_Menu();
        new Shourov_Tutorials_Custom_Column();
        new Shourov_Tutorials_Custom_Post_Type();
        new Shourov_Tutorials_Books_And_Chapters();
        new Shourov_Tutorials_Chapter_For_Books();
    }
}
/**
 * here we will call our main class
 */

Shourov_Tutorials::get_instance();

