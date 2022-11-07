<?php
/**
 * Online Pharmacy: Customizer
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function online_pharmacy_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'online_pharmacy_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'online-pharmacy' ),
	    'description' => __( 'Description of what this panel does.', 'online-pharmacy' ),
	) );

	//Sidebar Position
	$wp_customize->add_section('online_pharmacy_tp_general_settings',array(
        'title' => __('TP General Option', 'online-pharmacy'),
        'priority' => 2,
        'panel' => 'online_pharmacy_panel_id'
    ) );

 	$wp_customize->add_setting('online_pharmacy_tp_body_layout_settings',array(
		'default' => 'Full',
		'sanitize_callback' => 'online_pharmacy_sanitize_choices'
	));
 	$wp_customize->add_control('online_pharmacy_tp_body_layout_settings',array(
		'type' => 'radio',
		'label'     => __('Body Layout Setting', 'online-pharmacy'),
		'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'online-pharmacy'),
		'section' => 'online_pharmacy_tp_general_settings',
		'choices' => array(
		'Full' => __('Full','online-pharmacy'),
		'Container' => __('Container','online-pharmacy'),
		'Container Fluid' => __('Container Fluid','online-pharmacy')
		),
	) );

   // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('online_pharmacy_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'online_pharmacy_sanitize_choices'
	));
	$wp_customize->add_control('online_pharmacy_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Theme Sidebar Position', 'online-pharmacy'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'online-pharmacy'),
     'section' => 'online_pharmacy_tp_general_settings',
     'choices' => array(
         'full' => __('Full','online-pharmacy'),
         'left' => __('Left','online-pharmacy'),
         'right' => __('Right','online-pharmacy'),
         'three-column' => __('Three Columns','online-pharmacy'),
         'four-column' => __('Four Columns','online-pharmacy'),
         'grid' => __('Grid Layout','online-pharmacy')
     ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('online_pharmacy_sidebar_page_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'online_pharmacy_sanitize_choices'
	));
	$wp_customize->add_control('online_pharmacy_sidebar_page_layout',array(
     'type' => 'radio',
     'label'     => __('Page Sidebar Position', 'online-pharmacy'),
     'description'   => __('This option work for pages.', 'online-pharmacy'),
     'section' => 'online_pharmacy_tp_general_settings',
     'choices' => array(
         'full' => __('Full','online-pharmacy'),
         'left' => __('Left','online-pharmacy'),
         'right' => __('Right','online-pharmacy')
     ),
	) );

	$wp_customize->add_setting('online_pharmacy_preloader_show_hide',array(
		'default' => false,
		'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
	));
 	$wp_customize->add_control('online_pharmacy_preloader_show_hide',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Preloader Option','online-pharmacy'),
		'section' => 'online_pharmacy_tp_general_settings',
	));

	$wp_customize->add_setting('online_pharmacy_sticky',array(
		'default' => false,
		'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
	));
	$wp_customize->add_control('online_pharmacy_sticky',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Sticky Header','online-pharmacy'),
		'section' => 'online_pharmacy_tp_general_settings',
	));


	//TP Blog Option
	$wp_customize->add_section('online_pharmacy_blog_option',array(
		'title' => __('TP Blog Option', 'online-pharmacy'),
		'priority' => 1,
		'panel' => 'online_pharmacy_panel_id'
	) );

    $wp_customize->add_setting('online_pharmacy_remove_date',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_remove_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date Option','online-pharmacy'),
       'section' => 'online_pharmacy_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'online_pharmacy_remove_date', array(
		'selector' => '.entry-date',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_remove_date',
	 ));

    $wp_customize->add_setting('online_pharmacy_remove_author',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_remove_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author Option','online-pharmacy'),
       'section' => 'online_pharmacy_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'online_pharmacy_remove_author', array(
		'selector' => '.entry-author',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_remove_author',
	 ));

    $wp_customize->add_setting('online_pharmacy_remove_comments',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_remove_comments',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comment Option','online-pharmacy'),
       'section' => 'online_pharmacy_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'online_pharmacy_remove_comments', array(
		'selector' => '.entry-comments',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_remove_comments',
	 ));

    $wp_customize->add_setting('online_pharmacy_remove_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_remove_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tags Option','online-pharmacy'),
       'section' => 'online_pharmacy_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'online_pharmacy_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_remove_tags',
	 ));

    $wp_customize->add_setting('online_pharmacy_remove_read_button',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_remove_read_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Read More Button','online-pharmacy'),
       'section' => 'online_pharmacy_blog_option',
    ));
    $wp_customize->selective_refresh->add_partial( 'online_pharmacy_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_remove_read_button',
	 ));

    $wp_customize->add_setting('online_pharmacy_read_more_text',array(
		'default'=> __('Read More','online-pharmacy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_pharmacy_read_more_text',array(
		'label'	=> __('Edit Button Text','online-pharmacy'),
		'section'=> 'online_pharmacy_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'online_pharmacy_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'online_pharmacy_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'online_pharmacy_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','online-pharmacy' ),
		'section'     => 'online_pharmacy_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Top Bar
	$wp_customize->add_section( 'online_pharmacy_topbar', array(
    	'title'      => __( 'Contact Details', 'online-pharmacy' ),
    	'priority' => 4,
    	'description' => __( 'Add your contact details', 'online-pharmacy' ),
		'panel' => 'online_pharmacy_panel_id'
	) );

	$wp_customize->add_setting('online_pharmacy_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'online_pharmacy_sanitize_phone_number'
	));
	$wp_customize->add_control('online_pharmacy_phone_number',array(
		'label'	=> __('Add Phone Number','online-pharmacy'),
		'section'=> 'online_pharmacy_topbar',
		'type'=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'online_pharmacy_phone_number', array(
		'selector' => '.top-header span i',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_phone_number',
	) );

	$wp_customize->add_setting('online_pharmacy_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_pharmacy_email_address',array(
		'label'	=> __('Add Email Address','online-pharmacy'),
		'section'=> 'online_pharmacy_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('online_pharmacy_my_account_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_pharmacy_my_account_link',array(
		'label'	=> __('Add My Account Page Link','online-pharmacy'),
		'section'=> 'online_pharmacy_topbar',
		'type'=> 'url'
	));

	$wp_customize->add_setting('online_pharmacy_book_ticket_button',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_pharmacy_book_ticket_button',array(
		'label'	=> __('Add Book Ticket Button Text','online-pharmacy'),
		'section'=> 'online_pharmacy_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('online_pharmacy_book_ticket_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_pharmacy_book_ticket_link',array(
		'label'	=> __('Add Book Ticket Page Link','online-pharmacy'),
		'section'=> 'online_pharmacy_topbar',
		'type'=> 'url'
	));

	// Social Media
	$wp_customize->add_section( 'online_pharmacy_social_media', array(
    	'title'      => __( 'Social Media Links', 'online-pharmacy' ),
    	'priority' => 5,
    	'description' => __( 'Add your Social Links', 'online-pharmacy' ),
		'panel' => 'online_pharmacy_panel_id'
	) );

	$wp_customize->add_setting('online_pharmacy_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_pharmacy_facebook_url',array(
		'label'	=> __('Facebook Link','online-pharmacy'),
		'section'=> 'online_pharmacy_social_media',
		'type'=> 'url'
	));
	$wp_customize->selective_refresh->add_partial( 'online_pharmacy_facebook_url', array(
		'selector' => '.media-links a i',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_facebook_url',
	) );

	$wp_customize->add_setting('online_pharmacy_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_pharmacy_twitter_url',array(
		'label'	=> __('Twitter Link','online-pharmacy'),
		'section'=> 'online_pharmacy_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('online_pharmacy_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_pharmacy_instagram_url',array(
		'label'	=> __('Instagram Link','online-pharmacy'),
		'section'=> 'online_pharmacy_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('online_pharmacy_youtube_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_pharmacy_youtube_url',array(
		'label'	=> __('YouTube Link','online-pharmacy'),
		'section'=> 'online_pharmacy_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('online_pharmacy_pint_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_pharmacy_pint_url',array(
		'label'	=> __('Pinterest Link','online-pharmacy'),
		'section'=> 'online_pharmacy_social_media',
		'type'=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'online_pharmacy_slider_section' , array(
    	'title'      => __( 'Slider Section', 'online-pharmacy' ),
    	'priority' => 6,
		'panel' => 'online_pharmacy_panel_id'
	) );

	$wp_customize->add_setting('online_pharmacy_slider_arrows',array(
		'default' => false,
		'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
	));
	$wp_customize->add_control('online_pharmacy_slider_arrows',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide slider','online-pharmacy'),
		'section' => 'online_pharmacy_slider_section',
	));

 	$wp_customize->selective_refresh->add_partial( 'online_pharmacy_slider_arrows', array(
		'selector' => '#slider .carousel-caption',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_slider_arrows',
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'online_pharmacy_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'online_pharmacy_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'online_pharmacy_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'online-pharmacy' ),
			'description' => __('Image Size ( 1835 x 700 ) px','online-pharmacy'),
			'section'  => 'online_pharmacy_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//footer
	$wp_customize->add_section('online_pharmacy_footer_section',array(
		'title'	=> __('Footer Text','online-pharmacy'),
		'description'	=> __('Add copyright text.','online-pharmacy'),
		'panel' => 'online_pharmacy_panel_id'
	));

	$wp_customize->add_setting('online_pharmacy_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_pharmacy_footer_text',array(
		'label'	=> __('Copyright Text','online-pharmacy'),
		'section'	=> 'online_pharmacy_footer_section',
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'online_pharmacy_footer_text', array(
		'selector' => '#footer p',
		'render_callback' => 'online_pharmacy_customize_partial_online_pharmacy_footer_text',
	) );

	$wp_customize->add_setting('online_pharmacy_return_to_header',array(
		'default' => true,
		'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
	));
	$wp_customize->add_control('online_pharmacy_return_to_header',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Return to header','online-pharmacy'),
		'section' => 'online_pharmacy_footer_section',
	));

   // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('online_pharmacy_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'online_pharmacy_sanitize_choices'
	));
	$wp_customize->add_control('online_pharmacy_scroll_top_position',array(
     'type' => 'radio',
     'label'     => __('Scroll to top Position', 'online-pharmacy'),
     'description'   => __('This option work for scroll to top', 'online-pharmacy'),
     'section' => 'online_pharmacy_footer_section',
     'choices' => array(
         'Right' => __('Right','online-pharmacy'),
         'Left' => __('Left','online-pharmacy'),
         'Center' => __('Center','online-pharmacy')
     ),
	) );

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'online_pharmacy_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'online_pharmacy_customize_partial_blogdescription',
	) );

	$wp_customize->add_setting('online_pharmacy_site_title',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_site_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Title','online-pharmacy'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('online_pharmacy_site_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_site_tagline',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tagline','online-pharmacy'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('online_pharmacy_logo_width',array(
		'default' => 150,
		'sanitize_callback'	=> 'online_pharmacy_sanitize_number_absint'
	));
	 $wp_customize->add_control('online_pharmacy_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','online-pharmacy'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('online_pharmacy_logo_settings',array(
        'default' => 'Different Line',
        'sanitize_callback' => 'online_pharmacy_sanitize_choices'
	));
    $wp_customize->add_control('online_pharmacy_logo_settings',array(
        'type' => 'radio',
        'label'     => __('Logo Layout Settings', 'online-pharmacy'),
        'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'online-pharmacy'),
        'section' => 'title_tagline',
        'choices' => array(
            'Different Line' => __('Different Line','online-pharmacy'),
            'Same Line' => __('Same Line','online-pharmacy')
        ),
	) );

	$wp_customize->add_setting('online_pharmacy_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'online_pharmacy_sanitize_number_absint'
	));
	$wp_customize->add_control('online_pharmacy_per_columns',array(
		'label'	=> __('Product Per Row','online-pharmacy'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('online_pharmacy_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'online_pharmacy_sanitize_number_absint'
	));
	$wp_customize->add_control('online_pharmacy_product_per_page',array(
		'label'	=> __('Product Per Page','online-pharmacy'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

    $wp_customize->add_setting('online_pharmacy_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Shop page sidebar','online-pharmacy'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting('online_pharmacy_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'online_pharmacy_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_pharmacy_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product page sidebar','online-pharmacy'),
       'section' => 'woocommerce_product_catalog',
    ));
}
add_action( 'customize_register', 'online_pharmacy_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Online Pharmacy 1.0
 * @see online_pharmacy_customize_register()
 *
 * @return void
 */
function online_pharmacy_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Online Pharmacy 1.0
 * @see online_pharmacy_customize_register()
 *
 * @return void
 */
function online_pharmacy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'ONLINE_PHARMACY_PRO_THEME_NAME' ) ) {
	define( 'ONLINE_PHARMACY_PRO_THEME_NAME', esc_html__( 'Online Pharmacy Pro', 'online-pharmacy' ));
}
if ( ! defined( 'ONLINE_PHARMACY_PRO_THEME_URL' ) ) {
	define( 'ONLINE_PHARMACY_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/online-pharmacy-wordpress-theme/'));
}
if ( ! defined( 'ONLINE_PHARMACY_DOCS_URL' ) ) {
	define( 'ONLINE_PHARMACY_DOCS_URL', esc_url('https://www.themespride.com/demo/docs/online-pharmacy-lite/'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Online_Pharmacy_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Online_Pharmacy_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Online_Pharmacy_Customize_Section_Pro(
				$manager,
				'online_pharmacy_section_pro',
				array(
					'priority'   => 9,
					'title'    => ONLINE_PHARMACY_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'online-pharmacy' ),
					'pro_url'  => esc_url( ONLINE_PHARMACY_PRO_THEME_URL, 'online-pharmacy' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new Online_Pharmacy_Customize_Section_Pro(
				$manager,
				'online_pharmacy_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'online-pharmacy' ),
					'pro_text' => esc_html__( 'Click Here', 'online-pharmacy' ),
					'pro_url'  => esc_url( ONLINE_PHARMACY_DOCS_URL, 'online-pharmacy'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'online-pharmacy-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'online-pharmacy-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Online_Pharmacy_Customize::get_instance();
