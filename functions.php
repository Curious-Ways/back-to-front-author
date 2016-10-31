<?php
/**
 *Space Diary functions and definitions
 *
 * @package Back to Front Author
 */

/**
 * ACF Options page
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Theme Settings');

}

/**
 * Custom Post Types
 */

require_once('inc/cpt.php');

/**
 * Taxonomies
 */

require_once('inc/tax.php');


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'back_to_front_author_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function back_to_front_author_setup() {

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	//add_image_size( 'custom-thumb', 540, 540, array( 'center', 'top' ) );
	add_image_size( 'widescreen', 2000, 700, true );
	add_image_size( 'tile', 284, 248, true );
	add_image_size( 'w400', 400, 9999 );
	add_image_size( 'w250', 250, 9999 );
	add_image_size( 'book', 250, 390, true );

	/**
	 * This theme uses wp_nav_menu() in three locations.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'back_to_front_author' ),
		'secondary' => __( 'Secondary Menu', 'back_to_front_author' )
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'back_to_front_author_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // back_to_front_author_setup
add_action( 'after_setup_theme', 'back_to_front_author_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */

//Sidebar
function back_to_front_author_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'back_to_front_author' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

// Footer
register_sidebar( array(
	'name'          => __( 'Footer Primary', 'positive_wp' ),
	'id'            => 'footer-1',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
) );

add_action( 'widgets_init', 'back_to_front_author_widgets_init' );

/**
 * Enqueue scripts and styles
 */

// http://wordpress.stackexchange.com/questions/195235/move-wordpress-native-javascript-to-bottom-of-page
wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-migrate.min' );

wp_register_script( 'jquery', 'http://staging.backtofront.london/fan-fair/wp-includes/js/jquery/jquery.js', array(), false, true );
wp_register_script( 'jquery-migrate.min', 'http://staging.backtofront.london/fan-fair/wp-includes/js/jquery/jquery-migrate.min.js', array(), false, true );

function back_to_front_author_scripts() {

	// Primary styles
	wp_register_style( 'back_to_front_author-style', get_template_directory_uri() . '/assets/css/global.css', array(),'20120208','all' );
	wp_enqueue_style( 'back_to_front_author-style' );	

  // Magnific
  // wp_enqueue_script( 'back_to_front_author-magnific', get_template_directory_uri() . '/assets/plugins/magnific/dist/jquery.magnific-popup.js', array('jquery'), '20120200', true );

  // Match Height
  wp_enqueue_script( 'back_to_front_author-matchHeight', get_template_directory_uri() . '/bower_components/matchHeight/jquery.matchHeight.js', array('jquery'), '20120200', true );

	// FitVids
  // wp_enqueue_script( 'back_to_front_author-fitvids', get_template_directory_uri() . '/bower_components/FitVids/jquery.fitvids.js', array('jquery'), '20120200', true );

	// FitText
  // wp_enqueue_script( 'back_to_front_author-fittext', get_template_directory_uri() . '/bower_components/FitText.js/jquery.fittext.js', array('jquery'), '20120200', true );

	// Picturefill
  // wp_enqueue_script( 'back_to_front_author-picturefill', get_template_directory_uri() . '/bower_components/picturefill/dist/picturefill.min.js', array('jquery'), '20120200', true );

  // Modernizer
  wp_enqueue_script( 'back_to_front_author-modernizer-js', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', array(), '20120200', true );

	// Global javascript
  wp_enqueue_script( 'back_to_front_author-global-js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), '20120200', true ); 

  // Jquery
  wp_enqueue_script( 'jquery', 'http://staging.backtofront.london/fan-fair/wp-includes/js/jquery/jquery.js', array( 'jquery' ), false, true );
  wp_enqueue_script( 'jquery-migrate.min', 'http://staging.backtofront.london/fan-fair/wp-includes/js/jquery/jquery-migrate.min.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'back_to_front_author_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Subpage function
 */

function is_subpage() {
  global $post;                              // load details about this page

  if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
      return $post->post_parent;             // return the ID of the parent post

  } else {                                   // there is no parent so ...
      return false;                          // ... the answer to the question is false
  }
}

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'yoasttobottom');