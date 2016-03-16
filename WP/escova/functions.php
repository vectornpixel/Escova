<?php
/**
 * escova functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package escova
 */

if ( ! function_exists( 'escova_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function escova_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on escova, use a find and replace
	 * to change 'escova' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'escova', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'escova' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'escova_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'escova_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function escova_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'escova_content_width', 640 );
}
add_action( 'after_setup_theme', 'escova_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function escova_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'escova' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'escova_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function escova_scripts() {
	wp_enqueue_style( 'escova-style', get_stylesheet_uri() );

	wp_enqueue_script( 'escova-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'escova-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'escova_scripts' );

/**
 * Services Custom Post Type
 */
add_action( 'init', 'register_cpt_service' );

function register_cpt_service() {

	$labels = array(
		'name' => __( 'Services', 'service' ),
		'singular_name' => __( 'Service', 'service' ),
		'add_new' => __( 'Add New', 'service' ),
		'add_new_item' => __( 'Add New Service', 'service' ),
		'edit_item' => __( 'Edit Service', 'service' ),
		'new_item' => __( 'New Service', 'service' ),
		'view_item' => __( 'View Service', 'service' ),
		'search_items' => __( 'Search Services', 'service' ),
		'not_found' => __( 'No services found', 'service' ),
		'not_found_in_trash' => __( 'No services found in Trash', 'service' ),
		'parent_item_colon' => __( 'Parent Service:', 'service' ),
		'menu_name' => __( 'Services', 'service' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'Services for escova',
		'supports' => array( 'title','editor','custom-fields'),
		'taxonomies' => array( 'category' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'service', $args );
}

/**
 * Products Custom Post Type
 */

/**
 * Services Custom Post Type
 */
add_action( 'init', 'register_cpt_products' );

function register_cpt_products() {

	$labels = array(
		'name' => __( 'Products', 'products' ),
		'singular_name' => __( 'Product', 'product' ),
		'add_new' => __( 'Add New', 'products' ),
		'add_new_item' => __( 'Add New Product', 'products' ),
		'edit_item' => __( 'Edit Product', 'products' ),
		'new_item' => __( 'New Product', 'products' ),
		'view_item' => __( 'View Product', 'products' ),
		'search_items' => __( 'Search Product', 'products' ),
		'not_found' => __( 'No services found', 'products' ),
		'not_found_in_trash' => __( 'No services found in Trash', 'products' ),
		'parent_item_colon' => __( 'Parent Product:', 'products' ),
		'menu_name' => __( 'Products', 'products' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'Products for escova',
		'supports' => array( 'title','editor','custom-fields','thumbnail'),
		'taxonomies' => array( 'category' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'products', $args );
}
/**
 * Services Custom Post Type
 */
add_action( 'init', 'register_cpt_stylist' );

function register_cpt_stylist() {

	$labels = array(
		'name' => __( 'Stylists', 'stylist' ),
		'singular_name' => __( 'Stylist', 'stylist' ),
		'add_new' => __( 'Add New', 'stylist' ),
		'add_new_item' => __( 'Add New Stylist', 'stylist' ),
		'edit_item' => __( 'Edit Stylist', 'stylist' ),
		'new_item' => __( 'New Stylist', 'stylist' ),
		'view_item' => __( 'View Stylist', 'stylist' ),
		'search_items' => __( 'Search Stylists', 'stylist' ),
		'not_found' => __( 'No stylists found', 'stylist' ),
		'not_found_in_trash' => __( 'No services found in Trash', 'stylist' ),
		'parent_item_colon' => __( 'Parent Stylist:', 'stylist' ),
		'menu_name' => __( 'Stylists', 'stylist' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'Stylists for escova',
		'supports' => array( 'title','custom-fields', 'thumbnail'),
		'taxonomies' => array( 'taxonomy' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'stylist', $args );
}

/**
 * Taxonomy
 */
function stylist_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Teams', 'Taxonomy General Name'),
		'singular_name'              => _x( 'Team', 'Taxonomy Singular Name'),
		'menu_name'                  => __( 'Team Categories'),
		'all_items'                  => __( 'All Items'),
		'parent_item'                => __( 'Parent Item'),
		'parent_item_colon'          => __( 'Parent Item:'),
		'new_item_name'              => __( 'New Item Name'),
		'add_new_item'               => __( 'Add New Item'),
		'edit_item'                  => __( 'Edit Item'),
		'update_item'                => __( 'Update Item'),
		'view_item'                  => __( 'View Item'),
		'separate_items_with_commas' => __( 'Separate items with commas'),
		'add_or_remove_items'        => __( 'Add or remove items'),
		'choose_from_most_used'      => __( 'Choose from the most used'),
		'popular_items'              => __( 'Popular Items'),
		'search_items'               => __( 'Search Items'),
		'not_found'                  => __( 'Not Found'),
		'no_terms'                   => __( 'No items'),
		'items_list'                 => __( 'Items list'),
		'items_list_navigation'      => __( 'Items list navigation'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'					 => true,
	);
	register_taxonomy( 'taxonomy', array( 'stylist' ), $args );

}
add_action( 'init', 'stylist_taxonomy', 0 );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
