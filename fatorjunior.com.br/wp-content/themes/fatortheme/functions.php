<?php 
// Navigations Menus
	register_nav_menus(array(
			'primary' => __('Primary Menu')
		));
	register_nav_menus(array(
			'servicos' => __('Serviços Menu')
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
	
	register_sidebar(array(
        'name'          => 'navbar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ));
}

function change_search_result_order($query) {
// Check if current page is search page
    if ($query->is_search) {
// Specify orderby and order, ordering will be by slug of post_type: pAge > pOst
        $query->set('orderby', 'post_type');
        $query->set('order', 'ASC');
    };
    return $query;
}

add_filter('pre_get_posts', 'change_search_result_order');
?>