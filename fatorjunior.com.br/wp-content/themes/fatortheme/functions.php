<?php 
// Navigations Menus
	register_nav_menus(array(
			'primary' => __('Primary Menu')
		));

function theme_setup(){
	// Add featured image support
	add_theme_support('post-thumbnails');
	
}

add_action('after_setup_theme', 'theme_setup');

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ));
}
?>