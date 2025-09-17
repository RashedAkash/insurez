<?php
if ( ! function_exists( 'insurez_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function insurez_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'insurez', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main-menu' => __( 'Main Menu','insurez' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'gallery', 'audio'
	) );

	remove_theme_support( 'widgets-block-editor' );

}
endif; // insurez_setup
add_action( 'after_setup_theme', 'insurez_setup' );




/**
 * Add a sidebar.
 */
function insurez_widget_init() {

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'insurez' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Widgets in this area will be shown blog sidebar', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="ablog__sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget--title mb-30">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Fiiter Widget 01', 'insurez' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'Widgets in this area will be shown footer', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-30 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer__widget--title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fiiter Widget 02', 'insurez' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'Widgets in this area will be shown footer', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-30  wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer__widget--title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fiiter Widget 03', 'insurez' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'Widgets in this area will be shown footer', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-30 pl-30 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer__widget--title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fiiter Widget 04', 'insurez' ),
		'id'            => 'footer-widget-4',
		'description'   => __( 'Widgets in this area will be shown footer', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-30 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer__widget--title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'insurez_widget_init' );



// Theme Scripts and Styles
function insurez_theme_scripts() {

    // === CSS ===
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.2.3', 'all' );
    wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.css', array(), '5.2.3', 'all' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '8.2.2', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '8.2.2', 'all' );
    wp_enqueue_style( 'themify', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/css/nouislider.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all' );
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'insurez-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // === JS ===
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array( 'jquery' ), '5.1.3', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array( 'jquery' ), '8.2.2', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array( 'jquery', 'imagesloaded' ), '3.0.6', true );

    // Main JS (vendor ফোল্ডার থাকলে path চেক করুন)
    wp_enqueue_script( 'insurez-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery', 'isotope' ), '1.0.0', true );

    // WP comment reply
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'insurez_theme_scripts' );




include_once('inc/insurez-kirki.php');
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');