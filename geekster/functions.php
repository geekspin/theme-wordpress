<?php

// functions.php

function add_theme_scripts() {
	wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', [], null, 'all');
	wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function register_my_menu() {
	register_nav_menu('header-menu',__('Main menu'));
}
add_action('init', 'register_my_menu');

function register_navwalker(){
	require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

?>