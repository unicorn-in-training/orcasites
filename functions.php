<?php
/**
 * Functions
 *
 * Main functions file for the theme.
 *
 * @package    WordPress
 * @subpackage OrcaSites 2021 Theme
 * @author     Susie Butler <susie@orcasites.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://OrcaSites.com
 * @since      1.0.0
 */

$debug_mode = false;

/**************************************************************
	Function to load our styles & scripts
 **************************************************************/
function load_site_styles_and_scripts()
{
	/* Enqueue styles */
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, '1.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
	wp_enqueue_style('font-awesome-5', 'https://use.fontawesome.com/releases/v5.3.0/css/all.css', array(), '5.3.0');
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700|Montserrat:400,400i,500,600,700|Oswald:400,700', array(), 1.0);
	wp_enqueue_script('navbar-search', get_stylesheet_directory_uri() . '/js/navbar-search.js', array('jquery'), 1.0, false);

	/* Enqueue scripts */
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
}

add_action('wp_enqueue_scripts', 'load_site_styles_and_scripts');

/**************************************************************
	Add Support for WordPress Features
 **************************************************************/
function custom_theme_styles()
{
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		)
	);

	add_theme_support('html5', array('search-form'));

	add_theme_support('post-thumbnails');

	$logo_defaults = array(
		'width'       => 300,
		'flex-height' => true,
	);

	add_theme_support('custom-logo', $logo_defaults);
}

add_action('after_setup_theme', 'custom_theme_styles');


/**************************************************************
	Create a function to handle all the theme setup items
 **************************************************************/
function load_on_initialize()
{
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Menu');
}

add_action('init', 'load_on_initialize');

/**************************************************************
	Register the sidebars
 **************************************************************/
function theme_widgets_and_sidebars()
{
	register_sidebar(
		array(
			'name'          => 'Main Sidebar',
			'id'            => 'main-sidebar',
			'description'   => 'The main sidebar of our theme',
			'class'         => 'widget-block',
			'before-widget' => '<article id="%1$s" class="widget %2$s">',
			'after-widget'  => '</article>',
			'before-title'  => '<h4 class="widget-title">',
			'after-title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'Header Widget',
			'id'            => 'header-widget',
			'description'   => 'The widget for the header section of our theme',
			'class'         => 'header-block widget-block',
			'before-widget' => '<article id="%1$s" class="widget %2$s">',
			'after-widget'  => '</article>',
			'before-title'  => '<h4 class="widget-title">',
			'after-title'   => '</h4>',
		)
	);
}

add_action('widgets_init', 'theme_widgets_and_sidebars');

/**  Search Form */
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

/**  Display fontawesome search icon in menus and toggle search form */
function add_search_form($items, $args)
{
	if ($args->theme_location === 'primary') {
		$items .= '<li class="search"><a class="search-icon"><i class="fa fa-search"></i></a><div style="display:none;" class="orcasites-search-form">' . get_search_form(false) . '</div></li>';
	}
	return $items;
}