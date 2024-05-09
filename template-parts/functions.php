<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twenty_twenty_one_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('twentytwentyone', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		register_nav_menus(
			array(
				'primary' => esc_html__('Primary menu', 'twentytwentyone'),
				'footer'  => esc_html__('Secondary menu', 'twentytwentyone'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');
		$background_color = get_theme_mod('background_color', 'D1E4DD');
		if (127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex($background_color)) {
			add_theme_support('dark-editor-style');
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ($is_IE) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style($editor_stylesheet_path);

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__('Extra small', 'twentytwentyone'),
					'shortName' => esc_html_x('XS', 'Font size', 'twentytwentyone'),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__('Small', 'twentytwentyone'),
					'shortName' => esc_html_x('S', 'Font size', 'twentytwentyone'),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__('Normal', 'twentytwentyone'),
					'shortName' => esc_html_x('M', 'Font size', 'twentytwentyone'),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__('Large', 'twentytwentyone'),
					'shortName' => esc_html_x('L', 'Font size', 'twentytwentyone'),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__('Extra large', 'twentytwentyone'),
					'shortName' => esc_html_x('XL', 'Font size', 'twentytwentyone'),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__('Huge', 'twentytwentyone'),
					'shortName' => esc_html_x('XXL', 'Font size', 'twentytwentyone'),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__('Gigantic', 'twentytwentyone'),
					'shortName' => esc_html_x('XXXL', 'Font size', 'twentytwentyone'),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__('Black', 'twentytwentyone'),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__('Dark gray', 'twentytwentyone'),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__('Gray', 'twentytwentyone'),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__('Green', 'twentytwentyone'),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__('Blue', 'twentytwentyone'),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__('Purple', 'twentytwentyone'),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__('Red', 'twentytwentyone'),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__('Orange', 'twentytwentyone'),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__('Yellow', 'twentytwentyone'),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__('White', 'twentytwentyone'),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__('Purple to yellow', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to purple', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__('Green to yellow', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to green', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__('Red to yellow', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__('Yellow to red', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__('Purple to red', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__('Red to purple', 'twentytwentyone'),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if (is_customize_preview()) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support('starter-content', twenty_twenty_one_get_starter_content());
		}

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');

		// Add support for experimental link color control.
		add_theme_support('experimental-link-color');

		// Add support for experimental cover block spacing.
		add_theme_support('custom-spacing');

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support('custom-units');

		// Remove feed icon link from legacy RSS widget.
		add_filter('rss_widget_feed_link', '__return_false');
	}
}
add_action('after_setup_theme', 'twenty_twenty_one_setup');

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init()
{

	register_sidebar(
		array(
			'name'          => esc_html__('Footer', 'twentytwentyone'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Oceanis', 'twentytwentyone'),
			'id'            => 'sidebar-2',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Excess', 'twentytwentyone'),
			'id'            => 'sidebar-3',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('First', 'twentytwentyone'),
			'id'            => 'sidebar-4',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('First SE', 'twentytwentyone'),
			'id'            => 'sidebar-5',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Oceanis Yacht', 'twentytwentyone'),
			'id'            => 'sidebar-6',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Clubswan Yachts', 'twentytwentyone'),
			'id'            => 'sidebar-7',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Maxi Swan Yachts', 'twentytwentyone'),
			'id'            => 'sidebar-8',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Swan Yachts', 'twentytwentyone'),
			'id'            => 'sidebar-9',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Main Menu', 'twentytwentyone'),
			'id'            => 'sidebar-10',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'twentytwentyone'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 style="text-transform:uppercase;">',
			'after_title'   => '</h5>',
		)
	);
}
add_action('widgets_init', 'twenty_twenty_one_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('twenty_twenty_one_content_width', 750);
}
add_action('after_setup_theme', 'twenty_twenty_one_content_width', 0);

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts()
{
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ($is_IE) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get('Version'));
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
	}

	// RTL styles.
	wp_style_add_data('twenty-twenty-one-style', 'rtl', 'replace');

	// Print styles.
	wp_enqueue_style('twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get('Version'), 'print');

	// Threaded comment reply styles.
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get('Version'),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if (has_nav_menu('primary')) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array('twenty-twenty-one-ie11-polyfills'),
			wp_get_theme()->get('Version'),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array('twenty-twenty-one-ie11-polyfills'),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'twenty_twenty_one_scripts');

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script()
{

	wp_enqueue_script('twentytwentyone-editor', get_theme_file_uri('/assets/js/editor.js'), array('wp-blocks', 'wp-dom'), wp_get_theme()->get('Version'), true);
}

add_action('enqueue_block_editor_assets', 'twentytwentyone_block_editor_script');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix()
{

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
?>
		<script>
			/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function() {
				var t, e = location.hash.substring(1);
				/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
			}), !1);
		</script>
	<?php
	}
}
add_action('wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix');

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages()
{
	$custom_css = twenty_twenty_one_get_non_latin_css('front-end');

	if ($custom_css) {
		wp_add_inline_style('twenty-twenty-one-style', $custom_css);
	}
}
add_action('wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages');

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init()
{
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri('/assets/js/customize-helpers.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri('/assets/js/customize-preview.js'),
		array('customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers'),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('customize_preview_init', 'twentytwentyone_customize_preview_init');

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts()
{

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri('/assets/js/customize-helpers.js'),
		array(),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts');

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes()
{
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters('twentytwentyone_html_classes', '');
	if (!$classes) {
		return;
	}
	echo 'class="' . esc_attr($classes) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class()
{
	?>
	<script>
		if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
			document.body.classList.add('is-IE');
		}
	</script>
<?php
}
add_action('wp_footer', 'twentytwentyone_add_ie_class');

if (!function_exists('wp_get_list_item_separator')) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator()
	{
		/* translators: Used between list items, there is a space after the comma. */
		return __(', ', 'twentytwentyone');
	}
endif;

function allDataFetch()
{
	print_r($_POST);
	wp_die();
}
add_action("wp_ajax_allDataFetch", "allDataFetch");
add_action("wp_ajax_nopriv_allDataFetch", "allDataFetch");
/*
====================================================================
Adding ACF OPTION PAGE TO WORDPRESS ADMIN
====================================================================
*/

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}



function custom_post_type()
{

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x('Yatch', 'Post Type General Name', 'twentythirteen'),
		'singular_name'       => _x('Yatch', 'Post Type Singular Name', 'twentythirteen'),
		'menu_name'           => __('Yatch', 'twentythirteen'),
		'parent_item_colon'   => __('Parent Yatch', 'twentythirteen'),
		'all_items'           => __('All Yatch', 'twentythirteen'),
		'view_item'           => __('View Yatch', 'twentythirteen'),
		'add_new_item'        => __('Add New Yatch', 'twentythirteen'),
		'add_new'             => __('Add New', 'twentythirteen'),
		'edit_item'           => __('Edit Yatch', 'twentythirteen'),
		'update_item'         => __('Update Yatch', 'twentythirteen'),
		'search_items'        => __('Search Yatch', 'twentythirteen'),
		'not_found'           => __('Not Found', 'twentythirteen'),
		'not_found_in_trash'  => __('Not found in Trash', 'twentythirteen'),
	);

	// Set other options for Custom Post Type

	$args = array(
		'label'               => __('yatch', 'twentythirteen'),
		'description'         => __('Yatch news and reviews', 'twentythirteen'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'show_in_rest'        => true,

		// This is where we add taxonomies to our CPT
		'taxonomies'          => array('category'),
	);

	// Registering your Custom Post Type
	register_post_type('yatch', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'custom_post_type', 0);


//Function to get Data From API
function get_data_from_api()
{
	$url = "https://services.boatwizard.com/bridge/events/7d587e58-01bc-4e42-8347-34bf8bdcd0d8/boats?status=on";
	$boat_listing = simplexml_load_string(file_get_contents($url));
	$data = json_encode($boat_listing);
	$data_full['boat_listing_full'] = json_decode($data);
	$a = array();
	$email = '';
	$y = 0;
	foreach ($data_full['boat_listing_full']->VehicleRemarketing as $key => $value) {
		if (is_object($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat) && is_array($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BoatLengthGroup)) {
			$length = $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BoatLengthGroup[0]->BoatLengthMeasure;
		} else if (is_object($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BoatLengthGroup)) {
			$length = $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BoatLengthGroup->BoatLengthMeasure;
		} else {
			$length = null;
		}

		if ((is_object($value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact) && is_array($value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact->URICommunication))) {
			$email = $value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact->URICommunication[0]->CompleteNumber;
		} else {
			$email = $value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact->URICommunication->CompleteNumber;
		}

		$a[$y]['year'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->ModelYear) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->ModelYear : null;
		$a[$y]['price'] = isset($value->VehicleRemarketingBoatLineItem->PricingABIE->Price->ChargeAmount) ? $value->VehicleRemarketingBoatLineItem->PricingABIE->Price->ChargeAmount : null;
		$a[$y]['make'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->MakeString) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->MakeString : null;
		$a[$y]['length'] = $length;
		$a[$y]['date'] = isset($value->VehicleRemarketingBoatLineItem->LastModificationDate) ? $value->VehicleRemarketingBoatLineItem->LastModificationDate : null;
		$a[$y]['location'] = isset($value->VehicleRemarketingBoatLineItem->Location->LocationAddress->CityName) ? $value->VehicleRemarketingBoatLineItem->Location->LocationAddress->CityName : null;
		$a[$y]['beam'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BeamMeasure) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BeamMeasure : null;
		$a[$y]['documentid'] = isset($value->VehicleRemarketingHeader->DocumentIdentificationGroup->DocumentIdentification->DocumentID) ? $value->VehicleRemarketingHeader->DocumentIdentificationGroup->DocumentIdentification->DocumentID : null;
		// $a[$y]['length'] = $length;

		$a[$y]['saleclasscode'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->SaleClassCode) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->SaleClassCode : null;
		$a[$y]['partyid'] = isset($value->VehicleRemarketingBoatLineItem->DealerParty->PartyID) ? $value->VehicleRemarketingBoatLineItem->DealerParty->PartyID : null;

		$a[$y]['model'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->Model) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->Model : null;
		$a[$y]['code'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingEngineLineItem->VehicleRemarketingEngine->BoatEngineTypeCode) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingEngineLineItem->VehicleRemarketingEngine->BoatEngineTypeCode : null;
		$a[$y]['featuredata'] = isset($value->VehicleRemarketingBoatLineItem->FeatureGroupDataNode->FeatureDataNode) ? $value->VehicleRemarketingBoatLineItem->FeatureGroupDataNode->FeatureDataNode : null;
		$a[$y]['fuelcapacity'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->FuelTankCapacityMeasure) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->FuelTankCapacityMeasure : null;
		$a[$y]['weight'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->DryWeightMeasure) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->DryWeightMeasure : null;
		$a[$y]['description'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->GeneralBoatDescription) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->GeneralBoatDescription : null;

		$a[$y]['person_name'] = isset($value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact->PersonName) ? $value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact->PersonName : null;
		$a[$y]['person_phone'] = isset($value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact->TelephoneCommunication->CompleteNumber) ? $value->VehicleRemarketingBoatLineItem->DealerParty->SpecifiedOrganization->PrimaryContact->TelephoneCommunication->CompleteNumber : null;
		$a[$y]['person_email'] = $email;
		$a[$y]['images'] = isset($value->VehicleRemarketingBoatLineItem) ? $value->VehicleRemarketingBoatLineItem : null;
		$a[$y]['stock'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->VehicleStockString) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->VehicleStockString : null;
		$a[$y]['class'] = isset($value->VehicleRemarketingBoatLineItem) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode : null;
		$a[$y]['hin'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->Hull->HullID) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->Hull->HullID : null;
		$a[$y]['category'] = isset($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BoatCategoryCode) ? $value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->BoatCategoryCode : null;
		if (isset($value->VehicleRemarketingBoatLineItem)) {
			if (is_array($value->VehicleRemarketingBoatLineItem->AdditionalDetailDescription)) {
				foreach ($value->VehicleRemarketingBoatLineItem->VehicleRemarketingBoat->AdditionalDetailDescription as $item) {
					if (strtolower(trim($item->Title)) == 'status') {
						$a[$y]['status'] = strip_tags($item->Description);
						break;
					}
				}
			} else {
				$a[$y]['status'] = null;
			}
		}
		$y++;
	}
	return $a;
}

//action hook for get quote form
add_action("wp_ajax_get_quote_form", "get_quote_form");
add_action("wp_ajax_nopriv_get_quote_form", "get_quote_form");

function get_quote_form()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['documentid']) == $_POST['id'];
	});

	foreach ($data1['boat_listing'] as $lists) {
		foreach ($lists as $key => $value) {
			$only_used_val_arr[$key] = $value;
		}
	}
	echo json_encode($only_used_val_arr);
	die();
}


//action hook for Value Trade form
add_action("wp_ajax_value_trade_form", "value_trade_form");
add_action("wp_ajax_nopriv_value_trade_form", "value_trade_form");

function value_trade_form()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['documentid']) == $_POST['id'];
	});

	foreach ($data1['boat_listing'] as $lists) {
		foreach ($lists as $key => $value) {
			$only_used_val_arr[$key] = $value;
		}
	}
	echo json_encode($only_used_val_arr);
	die();
}

//action hook for Finance form
add_action("wp_ajax_finance_form", "finance_form");
add_action("wp_ajax_nopriv_finance_form", "finance_form");

function finance_form()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['documentid']) == $_POST['id'];
	});

	foreach ($data1['boat_listing'] as $lists) {
		foreach ($lists as $key => $value) {
			$only_used_val_arr[$key] = $value;
		}
	}
	echo json_encode($only_used_val_arr);
	die();
}
//action hook for Test Drive form
add_action("wp_ajax_test_drive_form", "test_drive_form");
add_action("wp_ajax_nopriv_test_drive_form", "test_drive_form");

function test_drive_form()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['documentid']) == $_POST['id'];
	});

	foreach ($data1['boat_listing'] as $lists) {
		foreach ($lists as $key => $value) {
			$only_used_val_arr[$key] = $value;
		}
	}
	echo json_encode($only_used_val_arr);
	die();
}

// action hook for searching form
add_action("wp_ajax_get_particular_data", "get_particular_data");
add_action("wp_ajax_nopriv_get_particular_data", "get_particular_data");

function get_particular_data()
{
	global $wpdb;
	$key = $_POST['keyword'];
	$result = $wpdb->get_results("Select * from nvsb_sailboat_api_data where boat_model like '%$key%'");
	if (!empty($result)) {
		$all_fetched_data = "<ul class='list_result' style='width:100%;height:100px;overflow-y:scroll;'>";
		foreach ($result as $row) :
			$all_fetched_data .= "<li class='fetched_data' style='color:white;cursor:pointer;list-style:none;padding-left:38px;padding-top:5px;' data-boatid = '" . $row->boat_id . "'>" . $row->boat_model . "</li>";
		endforeach;
		$all_fetched_data .= "</ul>";
		$arr['status'] = 'success';
		$arr['data'] = $all_fetched_data;
	} else {
		$arr['status'] = 'failed';
		$arr['data'] = "<p style='color:#fff;'> No data Found </p>";
	}
	echo json_encode($arr);
	die();
}

// action hook for searching form
add_action("wp_ajax_get_the_searched_data", "get_the_searched_data");
add_action("wp_ajax_nopriv_get_the_searched_data", "get_the_searched_data");

function get_the_searched_data()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['documentid']) == $_POST['id'];
	});

	foreach ($data1['boat_listing'] as $lists) {
		foreach ($lists as $key => $value) {
			$searched_data_arr[$key] = $value;
		}
	}
	$row_description = $searched_data_arr['year'] . ' ' . $searched_data_arr['saleclasscode'] . ' ' . $searched_data_arr['model'] . ' ' . $searched_data_arr['make'];
	$searched_data = '<div class="inventory-box-each"><div class="inven-img">';
	if (isset($searched_data_arr['images']->ImageAttachmentExtended) && is_array($searched_data_arr['images']->ImageAttachmentExtended)) {
		$searched_data .= '<img src="' . $searched_data_arr['images']->ImageAttachmentExtended[0]->URI . '">';
	} else if (isset($searched_data_arr['images']->ImageAttachmentExtended)) {
		$searched_data .= '<img src="' . $searched_data_arr['images']->ImageAttachmentExtended->URI . '">';
	} else {
		$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
	}
	$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
	if (!empty($searched_data_arr['saleclasscode'])) {
		$searched_data .= $searched_data_arr['saleclasscode'] . '</li>';
	}
	if ($searched_data_arr['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
		$searched_data .= '<li> Class: '; {
			$searched_data .=
				$searched_data_arr['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
		}
		$searched_data .= '</li>';
	}
	if ($searched_data_arr['length'] != '') {
		$searched_data .= '<li> Length:';
		$bexp = explode('.', $searched_data_arr['length']);
		if (!empty($bexp)) {
			$ff = $bexp[0];
			$fin = isset($bexp[1]) ? $bexp[1] : 0;
			$fin = floatval('.' . $fin);
			$fin = floor(($fin * 12));
			$searched_data .= $ff . "'" . ' ' . $fin . '"';
		} else {
			$searched_data .= $searched_data_arr['length'];
		}
		$searched_data .= '</li>';
	}
	if ($searched_data_arr['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
		$searched_data  .= '<li> Max HP: '; {
			$searched_data .= $searched_data_arr['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
		}
		$searched_data .= '</li>';
	}
	if ($searched_data_arr['beam'] != '') {
		$searched_data .= '<li> Beam: ';
		$bmexp = explode('.', $searched_data_arr['beam']);
		if (!empty($bmexp)) {
			$ff = $bmexp[0];
			$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
			$fin = floatval('.' . $fin);
			$fin = floor(($fin * 12));
			$searched_data .= $ff . "'" . ' ' . $fin . '"';
		} else {
			$searched_data .= $searched_data_arr['beam'];
		}
		$searched_data .= '</li>';
	}
	$searched_data .= '<li>Location: ';
	if (!empty($searched_data_arr['location'])) {
		$searched_data .= $searched_data_arr['location'];
	}
	$searched_data .= '</li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $searched_data_arr['documentid'] . '">Get Quote</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $searched_data_arr['documentid'] . '">Value Trade</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $searched_data_arr['documentid'] . '">Financing</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $searched_data_arr['documentid'] . '">Test Drive</button>
                                <button class="inventory-view" data-boat="' . $searched_data_arr['documentid'] . '"><a href="https://nvsailing.com/inventory-listing-api/?q=' . $searched_data_arr['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
                            </div>
                        </div>';

	echo $searched_data;
	die();
}

// action hook for sailboat type data sorting
add_action("wp_ajax_get_data_by_sailboat_type", "get_data_by_sailboat_type");
add_action("wp_ajax_nopriv_get_data_by_sailboat_type", "get_data_by_sailboat_type");

function get_data_by_sailboat_type()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['class']) == strtolower($_POST['key']) && strtolower($item['stock']) == "sailboat";
	});

	foreach ($data1['boat_listing'] as $lists) {

		$row_description = $lists['year'] . ' ' . $lists['saleclasscode'] . ' ' . $lists['model'] . ' ' . $lists['make'];
		$searched_data = '<div class="inventory-box-each"><div class="inven-img">';
		if (isset($lists['images']->ImageAttachmentExtended) && is_array($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended[0]->URI . '">';
		} else if (isset($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended->URI . '">';
		} else {
			$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
		}
		$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
		if (!empty($lists['saleclasscode'])) {
			$searched_data .= $lists['saleclasscode'] . '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
			$searched_data .= '<li> Class: '; {
				$searched_data .=
					$lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
			}
			$searched_data .= '</li>';
		}
		if ($lists['length'] != '') {
			$searched_data .= '<li> Length:';
			$bexp = explode('.', $lists['length']);
			if (!empty($bexp)) {
				$ff = $bexp[0];
				$fin = isset($bexp[1]) ? $bexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['length'];
			}
			$searched_data .= '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
			$searched_data  .= '<li> Max HP: '; {
				$searched_data .= $lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
			}
			$searched_data .= '</li>';
		}
		if ($lists['beam'] != '') {
			$searched_data .= '<li> Beam: ';
			$bmexp = explode('.', $lists['beam']);
			if (!empty($bmexp)) {
				$ff = $bmexp[0];
				$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['beam'];
			}
			$searched_data .= '</li>';
		}
		$searched_data .= '<li>Location: ';
		if (!empty($lists['location'])) {
			$searched_data .= $lists['location'];
		}
		$searched_data .= '</li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $lists['documentid'] . '">Get Quote</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $lists['documentid'] . '">Value Trade</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $lists['documentid'] . '">Financing</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $lists['documentid'] . '">Test Drive</button>
                                <button class="inventory-view" data-boat="' . $lists['documentid'] . '"><a href="' . site_url() . '/?q=' . $lists['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
                            </div>
                        </div>';
	}

	echo $searched_data;
	die();
}


// action hook for makes data sorting
add_action("wp_ajax_get_data_by_makes", "get_data_by_makes");
add_action("wp_ajax_nopriv_get_data_by_makes", "get_data_by_makes");

function get_data_by_makes()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['make']) == strtolower($_POST['key2']) && strtolower($item['stock']) == "sailboat";
	});
	$searched_data = "";
	foreach ($data1['boat_listing'] as $lists) {

		$row_description = $lists['year'] . ' ' . $lists['saleclasscode'] . ' ' . $lists['model'] . ' ' . $lists['make'];
		$searched_data .= '<div class="inventory-box-each"><div class="inven-img">';
		if (isset($lists['images']->ImageAttachmentExtended) && is_array($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended[0]->URI . '">';
		} else if (isset($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended->URI . '">';
		} else {
			$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
		}
		$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
		if (!empty($lists['saleclasscode'])) {
			$searched_data .= $lists['saleclasscode'] . '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
			$searched_data .= '<li> Class: '; {
				$searched_data .=
					$lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
			}
			$searched_data .= '</li>';
		}
		if ($lists['length'] != '') {
			$searched_data .= '<li> Length:';
			$bexp = explode('.', $lists['length']);
			if (!empty($bexp)) {
				$ff = $bexp[0];
				$fin = isset($bexp[1]) ? $bexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['length'];
			}
			$searched_data .= '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
			$searched_data  .= '<li> Max HP: '; {
				$searched_data .= $lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
			}
			$searched_data .= '</li>';
		}
		if ($lists['beam'] != '') {
			$searched_data .= '<li> Beam: ';
			$bmexp = explode('.', $lists['beam']);
			if (!empty($bmexp)) {
				$ff = $bmexp[0];
				$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['beam'];
			}
			$searched_data .= '</li>';
		}
		$searched_data .= '<li>Location: ';
		if (!empty($lists['location'])) {
			$searched_data .= $lists['location'];
		}
		$searched_data .= '</li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $lists['documentid'] . '">Get Quote</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $lists['documentid'] . '">Value Trade</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $lists['documentid'] . '">Financing</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $lists['documentid'] . '">Test Drive</button>
                                <button class="inventory-view" data-boat="' . $lists['documentid'] . '"><a href="' . site_url() . '/?q=' . $lists['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
                            </div>
                        </div>';
	}

	echo $searched_data;
	die();
}



// action hook for length data sorting
add_action("wp_ajax_get_data_by_length", "get_data_by_length");
add_action("wp_ajax_nopriv_get_data_by_length", "get_data_by_length");

function get_data_by_length()
{
	$a = get_data_from_api();
	// echo "<pre>";
	// print_r($a);
	if ($_POST['to'] == "") {
		$data1['boat_listing'] = array_filter($a, function ($item) {
			return (int)$item['length'] >= (int)$_POST['from'] && strtolower($item['stock']) == "sailboat";
		});
	} else {
		$data1['boat_listing'] = array_filter($a, function ($item) {
			return (int)$item['length'] >= (int)$_POST['from'] && (int)$item['length'] <= (int)$_POST['to'] && strtolower($item['stock']) == "sailboat";
		});
	}

	$searched_data = "";
	foreach ($data1['boat_listing'] as $lists) {

		$row_description = $lists['year'] . ' ' . $lists['saleclasscode'] . ' ' . $lists['model'] . ' ' . $lists['make'];
		$searched_data .= '<div class="inventory-box-each"><div class="inven-img">';
		if (isset($lists['images']->ImageAttachmentExtended) && is_array($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended[0]->URI . '">';
		} else if (isset($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended->URI . '">';
		} else {
			$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
		}
		$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
		if (!empty($lists['saleclasscode'])) {
			$searched_data .= $lists['saleclasscode'] . '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
			$searched_data .= '<li> Class: '; {
				$searched_data .=
					$lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
			}
			$searched_data .= '</li>';
		}
		if ($lists['length'] != '') {
			$searched_data .= '<li> Length:';
			$bexp = explode('.', $lists['length']);
			if (!empty($bexp)) {
				$ff = $bexp[0];
				$fin = isset($bexp[1]) ? $bexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['length'];
			}
			$searched_data .= '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
			$searched_data  .= '<li> Max HP: '; {
				$searched_data .= $lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
			}
			$searched_data .= '</li>';
		}
		if ($lists['beam'] != '') {
			$searched_data .= '<li> Beam: ';
			$bmexp = explode('.', $lists['beam']);
			if (!empty($bmexp)) {
				$ff = $bmexp[0];
				$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['beam'];
			}
			$searched_data .= '</li>';
		}
		$searched_data .= '<li>Location: ';
		if (!empty($lists['location'])) {
			$searched_data .= $lists['location'];
		}
		$searched_data .= '</li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $lists['documentid'] . '">Get Quote</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $lists['documentid'] . '">Value Trade</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $lists['documentid'] . '">Financing</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $lists['documentid'] . '">Test Drive</button>
                                <button class="inventory-view" data-boat="' . $lists['documentid'] . '"><a href="' . site_url() . '/?q=' . $lists['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
                            </div>
                        </div>';
	}

	echo $searched_data;
	die();
}


// action hook for year data sorting
add_action("wp_ajax_get_data_by_year", "get_data_by_year");
add_action("wp_ajax_nopriv_get_data_by_year", "get_data_by_year");

function get_data_by_year()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return $item['year'] == $_POST['key'] && strtolower($item['stock']) == "sailboat";
	});

	$searched_data = "";
	foreach ($data1['boat_listing'] as $lists) {

		$row_description = $lists['year'] . ' ' . $lists['saleclasscode'] . ' ' . $lists['model'] . ' ' . $lists['make'];
		$searched_data .= '<div class="inventory-box-each"><div class="inven-img">';
		if (isset($lists['images']->ImageAttachmentExtended) && is_array($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended[0]->URI . '">';
		} else if (isset($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended->URI . '">';
		} else {
			$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
		}
		$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
		if (!empty($lists['saleclasscode'])) {
			$searched_data .= $lists['saleclasscode'] . '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
			$searched_data .= '<li> Class: '; {
				$searched_data .=
					$lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
			}
			$searched_data .= '</li>';
		}
		if ($lists['length'] != '') {
			$searched_data .= '<li> Length:';
			$bexp = explode('.', $lists['length']);
			if (!empty($bexp)) {
				$ff = $bexp[0];
				$fin = isset($bexp[1]) ? $bexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['length'];
			}
			$searched_data .= '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
			$searched_data  .= '<li> Max HP: '; {
				$searched_data .= $lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
			}
			$searched_data .= '</li>';
		}
		if ($lists['beam'] != '') {
			$searched_data .= '<li> Beam: ';
			$bmexp = explode('.', $lists['beam']);
			if (!empty($bmexp)) {
				$ff = $bmexp[0];
				$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['beam'];
			}
			$searched_data .= '</li>';
		}
		$searched_data .= '<li>Location: ';
		if (!empty($lists['location'])) {
			$searched_data .= $lists['location'];
		}
		$searched_data .= '</li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $lists['documentid'] . '">Get Quote</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $lists['documentid'] . '">Value Trade</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $lists['documentid'] . '">Financing</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $lists['documentid'] . '">Test Drive</button>
                                <button class="inventory-view" data-boat="' . $lists['documentid'] . '"><a href="' . site_url() . '/?q=' . $lists['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
                            </div>
                        </div>';
	}

	echo $searched_data;
	die();
}



// action hook for price data sorting
add_action("wp_ajax_get_data_by_price", "get_data_by_price");
add_action("wp_ajax_nopriv_get_data_by_price", "get_data_by_price");

function get_data_by_price()
{
	$a = get_data_from_api();
	// echo "<pre>";
	// print_r($a);
	if ($_POST['to'] == "") {
		$data1['boat_listing'] = array_filter($a, function ($item) {
			return (int)$item['price'] >= (int)$_POST['from'] && strtolower($item['stock']) == "sailboat";
		});
	} else {
		$data1['boat_listing'] = array_filter($a, function ($item) {
			return (int)$item['price'] >= (int)$_POST['from'] && (int)$item['price'] <= (int)$_POST['to'] && strtolower($item['stock']) == "sailboat";
		});
	}

	$searched_data = "";
	foreach ($data1['boat_listing'] as $lists) {
		$row_description = $lists['year'] . ' ' . $lists['saleclasscode'] . ' ' . $lists['model'] . ' ' . $lists['make'];
		$searched_data .= '<div class="inventory-box-each"><div class="inven-img">';
		if (isset($lists['images']->ImageAttachmentExtended) && is_array($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended[0]->URI . '">';
		} else if (isset($lists['images']->ImageAttachmentExtended)) {
			$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended->URI . '">';
		} else {
			$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
		}
		$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
		if (!empty($lists['saleclasscode'])) {
			$searched_data .= $lists['saleclasscode'] . '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
			$searched_data .= '<li> Class: '; {
				$searched_data .=
					$lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
			}
			$searched_data .= '</li>';
		}
		if ($lists['length'] != '') {
			$searched_data .= '<li> Length:';
			$bexp = explode('.', $lists['length']);
			if (!empty($bexp)) {
				$ff = $bexp[0];
				$fin = isset($bexp[1]) ? $bexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['length'];
			}
			$searched_data .= '</li>';
		}
		if ($lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
			$searched_data  .= '<li> Max HP: '; {
				$searched_data .= $lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
			}
			$searched_data .= '</li>';
		}
		if ($lists['beam'] != '') {
			$searched_data .= '<li> Beam: ';
			$bmexp = explode('.', $lists['beam']);
			if (!empty($bmexp)) {
				$ff = $bmexp[0];
				$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
				$fin = floatval('.' . $fin);
				$fin = floor(($fin * 12));
				$searched_data .= $ff . "'" . ' ' . $fin . '"';
			} else {
				$searched_data .= $lists['beam'];
			}
			$searched_data .= '</li>';
		}
		$searched_data .= '<li>Location: ';
		if (!empty($lists['location'])) {
			$searched_data .= $lists['location'];
		}
		$searched_data .= '</li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $lists['documentid'] . '">Get Quote</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $lists['documentid'] . '">Value Trade</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $lists['documentid'] . '">Financing</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $lists['documentid'] . '">Test Drive</button>
                                <button class="inventory-view" data-boat="' . $lists['documentid'] . '"><a href="' . site_url() . '/?q=' . $lists['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
                            </div>
                        </div>';
	}

	echo $searched_data;
	die();
}
// action hook for status sorting
add_action("wp_ajax_get_data_by_status", "get_data_by_status");
add_action("wp_ajax_nopriv_get_data_by_status", "get_data_by_status");

function get_data_by_status()
{
	$a = get_data_from_api();
	$data1['boat_listing'] = array_filter($a, function ($item) {
		return strtolower($item['stock']) == "sailboat";
	});

	$searched_data = "";
	foreach ($data1['boat_listing'] as $lists) {
		foreach ($lists['images']->AdditionalDetailDescription as $desc_status) {
			if (strtolower($desc_status->Title) == "status") {
				$status = strip_tags($desc_status->Description);
			}
		}
		if (strtolower($status) === strtolower($_POST['key'])) {
			$row_description = $lists['year'] . ' ' . $lists['saleclasscode'] . ' ' . $lists['model'] . ' ' . $lists['make'];
			$searched_data .= '<div class="inventory-box-each"><div class="inven-img">';
			if (isset($lists['images']->ImageAttachmentExtended) && is_array($lists['images']->ImageAttachmentExtended)) {
				$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended[0]->URI . '">';
			} else if (isset($lists['images']->ImageAttachmentExtended)) {
				$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended->URI . '">';
			} else {
				$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
			}
			$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
			if (!empty($lists['saleclasscode'])) {
				$searched_data .= $lists['saleclasscode'] . '</li>';
			}
			if ($lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
				$searched_data .= '<li> Class: '; {
					$searched_data .=
						$lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
				}
				$searched_data .= '</li>';
			}
			if ($lists['length'] != '') {
				$searched_data .= '<li> Length:';
				$bexp = explode('.', $lists['length']);
				if (!empty($bexp)) {
					$ff = $bexp[0];
					$fin = isset($bexp[1]) ? $bexp[1] : 0;
					$fin = floatval('.' . $fin);
					$fin = floor(($fin * 12));
					$searched_data .= $ff . "'" . ' ' . $fin . '"';
				} else {
					$searched_data .= $lists['length'];
				}
				$searched_data .= '</li>';
			}
			if ($lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
				$searched_data  .= '<li> Max HP: '; {
					$searched_data .= $lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
				}
				$searched_data .= '</li>';
			}
			if ($lists['beam'] != '') {
				$searched_data .= '<li> Beam: ';
				$bmexp = explode('.', $lists['beam']);
				if (!empty($bmexp)) {
					$ff = $bmexp[0];
					$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
					$fin = floatval('.' . $fin);
					$fin = floor(($fin * 12));
					$searched_data .= $ff . "'" . ' ' . $fin . '"';
				} else {
					$searched_data .= $lists['beam'];
				}
				$searched_data .= '</li>';
			}
			$searched_data .= '<li>Location: ';
			if (!empty($lists['location'])) {
				$searched_data .= $lists['location'];
			}
			$searched_data .= '</li>
	                            </ul>
	                        </div>
	                        <div class="inven-btns">
	                            <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $lists['documentid'] . '">Get Quote</button>
	                            <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $lists['documentid'] . '">Value Trade</button>
	                            <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $lists['documentid'] . '">Financing</button>
	                            <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $lists['documentid'] . '">Test Drive</button>
	                            <button class="inventory-view" data-boat="' . $lists['documentid'] . '"><a href="' . site_url() . '/?q=' . $lists['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
	                        </div>
	                    </div>';
		}
	}

	echo json_encode($data1['boat_listing']); //$searched_data;
	die();
}



//ajax to search data by search button on inventory page
add_action("wp_ajax_search_data_by_clicking_search_btn", "search_data_by_clicking_search_btn");
add_action("wp_ajax_nopriv_search_data_by_clicking_search_btn", "search_data_by_clicking_search_btn");

function search_data_by_clicking_search_btn()
{
	global $wpdb;
	$key = $_POST['search_name'];
	$result = $wpdb->get_results("Select * from nvsb_sailboat_api_data where boat_model like '%$key%' limit 10");
	if (!empty($result)) {
		$searched_data = "";
		foreach ($result as $results) {
			$_POST['boat_id'] = $results->boat_id;
			$a = get_data_from_api();
			$data1['boat_listing'] = array_filter($a, function ($item) {
				return $item['documentid'] == $_POST['boat_id'];
			});

			foreach ($data1['boat_listing'] as $lists) {

				$row_description = $lists['year'] . ' ' . $lists['saleclasscode'] . ' ' . $lists['model'] . ' ' . $lists['make'];
				$searched_data .= '<div class="inventory-box-each"><div class="inven-img">';
				if (isset($lists['images']->ImageAttachmentExtended) && is_array($lists['images']->ImageAttachmentExtended)) {
					$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended[0]->URI . '">';
				} else if (isset($lists['images']->ImageAttachmentExtended)) {
					$searched_data .= '<img src="' . $lists['images']->ImageAttachmentExtended->URI . '">';
				} else {
					$searched_data .= '<img src="' . site_url() . '/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">';
				}
				$searched_data .= '</div><div class="inven-costal"><h4>' . $row_description . '</h4><ul><li> Usage: ';
				if (!empty($lists['saleclasscode'])) {
					$searched_data .= $lists['saleclasscode'] . '</li>';
				}
				if ($lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode != '') {
					$searched_data .= '<li> Class: '; {
						$searched_data .=
							$lists['images']->VehicleRemarketingBoat->BoatClassGroup->BoatClassCode;
					}
					$searched_data .= '</li>';
				}
				if ($lists['length'] != '') {
					$searched_data .= '<li> Length: ';
					$bexp = explode('.', $lists['length']);
					if (!empty($bexp)) {
						$ff = $bexp[0];
						$fin = isset($bexp[1]) ? $bexp[1] : 0;
						$fin = floatval('.' . $fin);
						$fin = floor(($fin * 12));
						$searched_data .= $ff . "'" . ' ' . $fin . '"';
					} else {
						$searched_data .= $lists['length'];
					}
					$searched_data .= '</li>';
				}
				if ($lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') {
					$searched_data  .= '<li> Max HP: '; {
						$searched_data .= $lists['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
					}
					$searched_data .= '</li>';
				}
				if ($lists['beam'] != '') {
					$searched_data .= '<li> Beam: ';
					$bmexp = explode('.', $lists['beam']);
					if (!empty($bmexp)) {
						$ff = $bmexp[0];
						$fin = isset($bmexp[1]) ? $bmexp[1] : 0;
						$fin = floatval('.' . $fin);
						$fin = floor(($fin * 12));
						$searched_data .= $ff . "'" . ' ' . $fin . '"';
					} else {
						$searched_data .= $lists['beam'];
					}
					$searched_data .= '</li>';
				}
				$searched_data .= '<li>Location: ';
				if (!empty($lists['location'])) {
					$searched_data .= $lists['location'];
				}
				$searched_data .= '</li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="' . $lists['documentid'] . '">Get Quote</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="' . $lists['documentid'] . '">Value Trade</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="' . $lists['documentid'] . '">Financing</button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="' .  $lists['documentid'] . '">Test Drive</button>
                                <button class="inventory-view" data-boat="' . $lists['documentid'] . '"><a href="' . site_url() . '/?q=' . $lists['documentid'] . '" style="color:#fff;text-decoration:none;">View Listing</a></button>
                            </div>
                        </div>';
			}
		}
		$arr['status'] = 'success';
		$arr['data'] = $searched_data;
	} else {
		$arr['status'] = 'failed';
		$arr['data'] = "<p style='color:#fff;'> No data Found </p>";
	}
	echo json_encode($arr);
	die();
}

// action to enter all ajax data to the database
// add_action("wp_ajax_enter_all_data_to_database_from_api", "enter_all_data_to_database_from_api");
// add_action("wp_ajax_nopriv_enter_all_data_to_database_from_api", "enter_all_data_to_database_from_api");
// function enter_all_data_to_database_from_api()
// {
// 	echo "Okay";

// 	wp_die();
// 	// global $wpdb;
// 	// $a = get_data_from_api();
// 	// $data_fetch['boat_listing'] = array_filter($a, function ($item) {
// 	// 	return strtolower($item['stock']) == "sailboat";
// 	// });
// 	// // $query = "";
// 	// // foreach ($data_fetch['boat_listing'] as $listing) {
// 	// // 	$boat_id = $listing['documentid'];
// 	// // 	foreach ($listing as $key => $value) {
// 	// // 		$all_boats[$key] = $value;
// 	// // 	}
// 	// // 	$query .= "Select * from nvsb_sailboat_api_data where boat_id = $boat_id";
// 	// // 	// $get_existing_id = $wpdb->get_results("Select * from nvsb_sailboat_api_data where boat_id = $boat_id");
// 	// // 	// if (empty($get_existing_id)) {
// 	// // 	// 	$wpdb->insert("nvsb_sailboat_api_data", array(
// 	// // 	// 		'boat_id' => $all_boats['documentid'],
// 	// // 	// 		'boat_model' => $all_boats['model'],
// 	// // 	// 		'boat_make' => $all_boats['make'],
// 	// // 	// 		'boat_condition' => $all_boats['saleclasscode'],
// 	// // 	// 		'boat_listing_year' => $all_boats['year'],
// 	// // 	// 		'boat_location' => $all_boats['location'],
// 	// // 	// 	));
// 	// // 	// } else {
// 	// // 	// }
// 	// // }
// 	// echo $_POST['key'];
// 	// die();
// }






//ajax to redirect to finance form from loan calculator
add_action("wp_ajax_redirect_to_financing", "redirect_to_financing");
add_action("wp_ajax_nopriv_redirect_to_financing", "redirect_to_financing");

function redirect_to_financing()
{
	extract($_POST);
	$arr_post_data = array("manufacturer" => $manufacturer, "model" => $model, "boat_price" => $boat_price, "down_payment" => $down_payment, "interest" => $interest, 'term_years' => $term_years, "monthly_budget" => $monthly_budget);
	echo json_encode($arr_post_data);
	die();
}
