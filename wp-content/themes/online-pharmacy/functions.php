<?php
/**
 * Online Pharmacy functions and definitions
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

function online_pharmacy_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'online-pharmacy-featured-image', 2000, 1200, true );
	add_image_size( 'online-pharmacy-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'online-pharmacy' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', online_pharmacy_fonts_url() ) );
}
add_action( 'after_setup_theme', 'online_pharmacy_setup' );

/**
 * Register custom fonts.
 */
function online_pharmacy_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Roboto Slab:wght@100;200;300;400;500;600;700;800;900';
	$font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$font_family[] = 'Viga';
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/**
 * Register widget area.
 */
function online_pharmacy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'online-pharmacy' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'online-pharmacy' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'online-pharmacy' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'online-pharmacy' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'online-pharmacy' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'online-pharmacy' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'online-pharmacy' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-pharmacy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'online_pharmacy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function online_pharmacy_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'online-pharmacy-fonts', online_pharmacy_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'online-pharmacy-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'online-pharmacy-style',$online_pharmacy_tp_theme_css );
	wp_style_add_data('online-pharmacy-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'online-pharmacy-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'online-pharmacy-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	if(!wp_is_mobile()){
		wp_enqueue_script( 'jquery-superfish', get_theme_file_uri( '/assets/js/jquery.superfish.js' ), array( 'jquery' ), '2.1.2', true );
		wp_enqueue_script( 'online-pharmacy-custom-scripts-superfish', get_theme_file_uri( '/assets/js/online-pharmacy-custom-superfish.js' ), array( 'jquery' ), true );
	}

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'online-pharmacy-custom-scripts', esc_url( get_template_directory_uri() ) . '/assets/js/online-pharmacy-custom.js', array('jquery'), true);

	wp_enqueue_script( 'online-pharmacy-focus-nav', esc_url( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'online_pharmacy_scripts' );

//Admin Enqueue for Admin
function online_pharmacy_admin_enqueue_scripts(){
	wp_enqueue_style('online-pharmacy-admin-style', esc_url( get_template_directory_uri() ) . '/assets/css/admin.css');
	wp_enqueue_script( 'online-pharmacy-custom-scripts', esc_url( get_template_directory_uri() ). '/assets/js/online-pharmacy-custom.js', array('jquery'), true);
}
add_action( 'admin_enqueue_scripts', 'online_pharmacy_admin_enqueue_scripts' );

/*radio button sanitization*/
function online_pharmacy_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function online_pharmacy_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function online_pharmacy_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'online_pharmacy_loop_columns');
if (!function_exists('online_pharmacy_loop_columns')) {
	function online_pharmacy_loop_columns() {
		$columns = get_theme_mod( 'online_pharmacy_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'online_pharmacy_per_page', 20 );
function online_pharmacy_per_page( $cols ) {
  	$cols = get_theme_mod( 'online_pharmacy_product_per_page', 9 );
	return $cols;
}

function online_pharmacy_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function online_pharmacy_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function online_pharmacy_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function online_pharmacy_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function online_pharmacy_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','online_pharmacy_front_page_template' );

define('ONLINE_PHARMACY_CREDIT',__('https://www.themespride.com/themes/free-pharmacy-wordpress-theme/','online-pharmacy') );
if ( ! function_exists( 'online_pharmacy_credit' ) ) {
	function online_pharmacy_credit(){
		echo "<a href=".esc_url(ONLINE_PHARMACY_CREDIT)." target='_blank'>".esc_html__('Online Pharmacy WordPress Theme','online-pharmacy')."</a>";
	}
}

function online_pharmacy_activation_notice() { ?>
    <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="online-pharmacy-getting-started-notice clearfix">
            <div class="online-pharmacy-theme-notice-content">
                <h2 class="online-pharmacy-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'online-pharmacy' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'online-pharmacy')) ?></p>

                <a class="online-pharmacy-btn-get-started button button-primary button-hero online-pharmacy-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=online-pharmacy-about' )); ?>" ><?php esc_html_e( 'Get started', 'online-pharmacy' ) ?></a><span class="online-pharmacy-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

add_action( 'admin_notices', 'online_pharmacy_activation_notice' );

/**
 * Logo Custamization.
 */

function online_pharmacy_logo_width(){

	$online_pharmacy_logo_width   = get_theme_mod( 'online_pharmacy_logo_width', 150 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $online_pharmacy_logo_width ); ?>px;
		    max-width: 100%;
	}
	<?php echo "</style>";
}

add_action( 'wp_head', 'online_pharmacy_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * About Theme Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );
