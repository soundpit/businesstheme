<?php

/*
*	ADD THEME SUPPORT FOR ITEMS
*/

add_theme_support( 'title-tag' ); 
add_theme_support( 'post-thumbnails', array( 'item' ) );

/*
*	ENQUEUE SCRIPTS & STYLES
*/

function business_theme_scripts(){
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style('main_style', get_template_directory_uri().'/css/style.css');

	wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
	

};

add_action( 'wp_enqueue_scripts', 'business_theme_scripts' );

/*
*	CREATE MENUS
*/

function register_my_menus() {
	register_nav_menus( array(
			'primary' 	=> __( 'Primary Menu' ),
			'footer' 	=> __( 'Footer Menu' )
		)
	);
 }

 add_action( 'init', 'register_my_menus' );

/*
*	CREATE CUSTOM POST TYPE
*/

function codex_portfolio_init() {
	$labels = array(
		'name'               => __( 'Portfolio' ),
		'singular_name'      => __( 'Portfolio Item' ),
		'menu_name'          => __( 'Portfolio' ),
		/*'name_admin_bar'     => __( 'Portfolio' ), */
		'add_new'            => __( 'Add Portoflio Item' ),
		'add_new_item'       => __( 'Add New Portfolio Item' ),
		'new_item'           => __( 'New Portfolio Item' ),
		'edit_item'          => __( 'Edit Portfolio Item' ),
		'view_item'          => __( 'View Portfolio Items' ),
		'all_items'          => __( 'All Porftolio Items' ),
		'search_items'       => __( 'Search Portfolio Items' ),
		'parent_item_colon'  => __( 'Parent Items:' ),
		'not_found'          => __( 'No Porftolio Items found.' ),
		'not_found_in_trash' => __( 'No Porftolio Items found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( '' ) //wipes the edit field ready for custom metaboxes
	);

	register_post_type( 'item', $args );
}

add_action( 'init', 'codex_portfolio_init' );

/*
* SORT ORDER OF POSTS ALPHABETICALLY
*/

function alpha_order_classes( $query ) {
    if ( $query->is_post_type_archive('item')  ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}

add_action( 'pre_get_posts', 'alpha_order_classes' );

/*
*	CUSTOM SIDEBARS
*/

function business_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Sidebar',
		'id'            => 'footer_side',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
}
add_action( 'widgets_init', 'business_widgets_init' );

?>
