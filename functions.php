<?php
add_action( 'wp_enqueue_scripts', 'projectcicero_enqueue_styles' );
function projectcicero_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Remove title tag 
add_action( 'init', 'projectcicero_remove_title_tag', 15 );
function projectcicero_remove_title_tag() { 
    remove_post_type_support( 'page', 'title' ); 
} 

function projectcicero_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'projectcicero_custom_logo_setup', 15 );

function projectcicero_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'projectcicero' ),
			'id'            => 'sidebar-main',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'projectcicero' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'projectcicero_widgets_init' );

?>
