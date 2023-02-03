<?php
/**
 * richee functions and definitions
 *
 * @package richee
 */

/*
*TGM LIBRARY 
*/
require_once get_theme_file_path().'/inc/richee-tgm.php';
/*
*Kirki Customizer settings
*/
require_once get_theme_file_path().'/inc/customizer.php';
/*
*OCDI
*/
require_once get_theme_file_path().'/ocdi/ocdi.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function richee_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on richee, use a find and replace
		* to change 'richee' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'richee', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'align-wide' );

	add_theme_support( "wp-block-styles" );

	add_theme_support( 'post-thumbnails' );	
		
	add_theme_support( 'editor-styles' );

	add_editor_style( 'style-editor.css' );

	add_theme_support( "responsive-embeds" );

	 add_theme_support( "custom-header");

	 add_theme_support( "custom-background");

	register_block_style(
        'core/quote',
        array(
            'name'         => 'blue-quote',
            'label'        => __( 'Blue Quote', 'richee' ),
            'is_default'   => true,
            'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
        )
    );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'richee' ),
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

	

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
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
add_action( 'after_setup_theme', 'richee_setup' );




/**
 * Enqueue scripts and styles.
 */
function richee_enqueue_scripts() {

	wp_enqueue_style( 'richee-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array());

	wp_enqueue_style( 'richee-fontawesome', get_template_directory_uri().'/assets/css/all.min.css', array());

	wp_enqueue_style( 'richee-progress-bar', get_template_directory_uri().'/assets/css/progress-bar.css', array());

	wp_enqueue_style( 'richee-owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array());

	wp_enqueue_style( 'richee-owl-carousel-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array());

	wp_enqueue_style( 'richee-template-style', get_template_directory_uri().'/assets/css/style.css', array());

	wp_enqueue_style( 'richee-google-fonts','//fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap', array());

	wp_enqueue_script( 'comment-reply' );

	wp_enqueue_style( 'richee-style',get_stylesheet_uri(), array());
	
	//JAVASCRIPT FILE ENQUEUE

	wp_enqueue_script( 'richee-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'richee-mixitup', get_template_directory_uri().'/assets/js/mixitup.min.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'richee-animate-typing', get_template_directory_uri().'/assets/js/jquery.animateTyping.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'richee-progressbar', get_template_directory_uri().'/assets/js/progress-bar.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'richee-progressbar-circle', get_template_directory_uri().'/assets/js/progresscircle.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'richee-onepage-nav', get_template_directory_uri().'/assets/js/onepageNav.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'richee-owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'richee-main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'richee_enqueue_scripts' );

function richee_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'richee' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Footer Widget', 'richee' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'richee_theme_slug_widgets_init' );



function richee_head_css(){
	?>

	<style>
		.hero-intro{
			background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/hero-bg.png');?>);
		}
	</style>

	<?php
}
add_action('wp_head','richee_head_css');


