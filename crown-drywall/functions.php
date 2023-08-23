<?php

/**
 * CROWN DRYWALL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CROWN_DRYWALL
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function crown_drywall_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on CROWN DRYWALL, use a find and replace
		* to change 'crown-drywall' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('crown-drywall', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'crown-drywall'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'crown_drywall_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'crown_drywall_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crown_drywall_content_width()
{
	$GLOBALS['content_width'] = apply_filters('crown_drywall_content_width', 640);
}
add_action('after_setup_theme', 'crown_drywall_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crown_drywall_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'crown-drywall'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'crown-drywall'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'crown_drywall_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function crown_drywall_scripts()
{
	wp_enqueue_style('crown-drywall-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('crown-drywall-style', 'rtl', 'replace');

	wp_enqueue_script('crown-drywall-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'crown_drywall_scripts');

/**
 * Global CDN Add For Creating Projects
 */

if (!function_exists('crownDrywallScripts')) {
	function crownDrywallScripts()
	{
		wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), null, 'all');
		wp_enqueue_style('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null, 'all');
		wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), null, 'all');
		wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), null, 'all');

		wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js',  array(), null, true);
		wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',  array('jquery'), null, true);
		wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',  array('jquery'), null, true);
	}
	add_action('wp_enqueue_scripts', 'crownDrywallScripts');
}

if (!function_exists('crownDrywallSetup')) {
	function crownDrywallSetup()
	{
		register_nav_menus([
			'left-menu' => __('Left Menu'),
			'right-menu' => __('Right Menu'),
			'main-menu' => __('Main Menu'),
			'footer-menu' => __('Footer Menu'),
			'mobile-menu' => __('Mobile Menu')
		]);
	}

	add_action('after_setup_theme', 'crownDrywallSetup', 10);
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Admin Options
 */

include get_template_directory() . '/admin-options/admin-options.php';

/**
 * Admin Options
 */

include get_template_directory() . '/utils/sidebar.php';

/**
 * Customizer Options
 */

include get_template_directory() . '/utils/customizer-utils.php';
include get_template_directory() . '/utils/cpt-column.php';


/**
 *   Menu Class
 */

// include get_template_directory() . '/utils/menuConstant.php';
define('MENU_FILE_DIR', get_template_directory() . '/utils/menuConstant.php');
 /**
 * CPT Global Options
 */

define('CUSTOM_CPT_FILE_DIR', get_template_directory() . '/utils/cpt-utils.php');

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Header Options
 */

define('SELECTED_HEADER', get_option('selected_header'));


function enqueue_google_fonts_api()
{
	wp_enqueue_script('google-fonts-api', 'https://apis.google.com/js/api.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts_api');

if (!function_exists('cpt_html_block')) {
	function cpt_html_block() {
		require_once CUSTOM_CPT_FILE_DIR;
		$custom_cpt_for_all = new Custom_Cpt_ForAll();
		$custom_cpt_for_all->create_custom_post_cpt('HTML Block', 'cms-block', 'HTML Block', 'dashicons-media-code');
	}
	
	add_action('init', 'cpt_html_block');
}

function custom_theme_typography_styles() {
    $css = '';

    // Define the typography elements you want to customize
    $typography_elements = array(
        'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
    );

    foreach ($typography_elements as $element) {
        $font_size = get_theme_mod("{$element}_font_size", '');
        if ($font_size !== '') {
            $css .= "{$element} { font-size: {$font_size}; }\n";
        }
        // Add more typography properties as needed
    }

    return $css;
}
function custom_theme_output_typography_styles() {
    $typography_css = custom_theme_typography_styles();
    if (!empty($typography_css)) {
        echo '<style type="text/css">' . $typography_css . '</style>';
    }
}

// Hook the function to wp_head for including in the header
add_action('wp_head', 'custom_theme_output_typography_styles');

