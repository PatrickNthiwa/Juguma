<?php
function posterity_setup_theme_options() {
	global $posterity_a13;

	//get all cursors
	$cursors = array(
		'christmas.png'         => 'christmas.png',
		'empty_black.png'       => 'empty_black.png',
		'empty_black_white.png' => 'empty_black_white.png',
		'superior_cursor.png'   => 'superior_cursor.png'
	);
	$posterity_a13->posterity_set_settings_set( 'cursors', $cursors );

	//get all menu effects
	$menu_effects = array(
		'none'      => esc_html__( 'None', 'posterity' ),
		'ferdinand' => 'ferdinand'
	);
	$posterity_a13->posterity_set_settings_set( 'menu_effects', $menu_effects );

	//get all custom sidebars
	$header_sidebars = $posterity_a13->get_option( 'custom_sidebars' );
	if ( ! is_array( $header_sidebars ) ) {
		$header_sidebars = array();
	}
	//create 2 arrays for different purpose
	$header_sidebars            = array_merge( array( 'off' => esc_html__( 'Off', 'posterity' ) ), $header_sidebars );
	$header_sidebars_off_global = array_merge( array( 'G' => esc_html__( 'Global settings', 'posterity' ) ), $header_sidebars );
	//re-indexing these arrays
	array_unshift( $header_sidebars, null );
	unset( $header_sidebars[0] );
	array_unshift( $header_sidebars_off_global, null );
	unset( $header_sidebars_off_global[0] );
	$posterity_a13->posterity_set_settings_set( 'header_sidebars', $header_sidebars );
	$posterity_a13->posterity_set_settings_set( 'header_sidebars_off_global', $header_sidebars_off_global );

	$on_off = array(
		'on'  => esc_html__( 'Enable', 'posterity' ),
		'off' => esc_html__( 'Disable', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'on_off', $on_off );

	$font_weights = array(
		'100'    => esc_html__( '100', 'posterity' ),
		'200'    => esc_html__( '200', 'posterity' ),
		'300'    => esc_html__( '300', 'posterity' ),
		'normal' => esc_html__( 'Normal 400', 'posterity' ),
		'500'    => esc_html__( '500', 'posterity' ),
		'600'    => esc_html__( '600', 'posterity' ),
		'bold'   => esc_html__( 'Bold 700', 'posterity' ),
		'800'    => esc_html__( '800', 'posterity' ),
		'900'    => esc_html__( '900', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'font_weights', $font_weights );

	$font_transforms = array(
		'none'      => esc_html__( 'None', 'posterity' ),
		'uppercase' => esc_html__( 'Uppercase', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'font_transforms', $font_transforms );

	$text_align = array(
		'left'   => esc_html__( 'Left', 'posterity' ),
		'center' => esc_html__( 'Center', 'posterity' ),
		'right'  => esc_html__( 'Right', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'text_align', $text_align );

	$image_fit = array(
		'cover'    => esc_html__( 'Cover', 'posterity' ),
		'contain'  => esc_html__( 'Contain', 'posterity' ),
		'fitV'     => esc_html__( 'Fit Vertically', 'posterity' ),
		'fitH'     => esc_html__( 'Fit Horizontally', 'posterity' ),
		'center'   => esc_html__( 'Just center', 'posterity' ),
		'repeat'   => esc_html__( 'Repeat', 'posterity' ),
		'repeat-x' => esc_html__( 'Repeat X', 'posterity' ),
		'repeat-y' => esc_html__( 'Repeat Y', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'image_fit', $image_fit );

	$content_layouts = array(
		'center'        => esc_html__( 'Center fixed width', 'posterity' ),
		'left'          => esc_html__( 'Left fixed width', 'posterity' ),
		'left_padding'  => esc_html__( 'Left fixed width + padding', 'posterity' ),
		'right'         => esc_html__( 'Right fixed width', 'posterity' ),
		'right_padding' => esc_html__( 'Right fixed width + padding', 'posterity' ),
		'full_fixed'    => esc_html__( 'Full width + fixed content', 'posterity' ),
		'full_padding'  => esc_html__( 'Full width + padding', 'posterity' ),
		'full'          => esc_html__( 'Full width', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'content_layouts', $content_layouts );

	$parallax_types = array(
		"tb"   => esc_html__( 'top to bottom', 'posterity' ),
		"bt"   => esc_html__( 'bottom to top', 'posterity' ),
		"lr"   => esc_html__( 'left to right', 'posterity' ),
		"rl"   => esc_html__( 'right to left', 'posterity' ),
		"tlbr" => esc_html__( 'top-left to bottom-right', 'posterity' ),
		"trbl" => esc_html__( 'top-right to bottom-left', 'posterity' ),
		"bltr" => esc_html__( 'bottom-left to top-right', 'posterity' ),
		"brtl" => esc_html__( 'bottom-right to top-left', 'posterity' ),
	);

	$content_under_header = array(
		'content' => esc_html__( 'Yes, hide the content', 'posterity' ),
		'title'   => esc_html__( 'Yes, hide the content and add top padding to the outside title bar.', 'posterity' ),
		'off'     => esc_html__( 'Turn it off', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'content_under_header', $content_under_header );

	$social_colors = array(
		'black'            => esc_html__( 'Black', 'posterity' ),
		'color'            => esc_html__( 'Color', 'posterity' ),
		'white'            => esc_html__( 'White', 'posterity' ),
		'semi-transparent' => esc_html__( 'Semi transparent', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'social_colors', $social_colors );

	$bricks_hover = array(
		'cross'      => esc_html__( 'Show cross', 'posterity' ),
		'drop'       => esc_html__( 'Drop', 'posterity' ),
		'shift'      => esc_html__( 'Shift', 'posterity' ),
		'pop'        => esc_html__( 'Pop text', 'posterity' ),
		'border'     => esc_html__( 'Border', 'posterity' ),
		'scale-down' => esc_html__( 'Scale down', 'posterity' ),
		'none'       => esc_html__( 'None', 'posterity' ),
	);
	$posterity_a13->posterity_set_settings_set( 'bricks_hover', $bricks_hover );

	//tags allowed in descriptions
	$valid_tags = array(
		'a'      => array(
			'href' => array(),
		),
		'br'     => array(),
		'code'   => array(),
		'em'     => array(),
		'strong' => array(),
	);
	$posterity_a13->posterity_set_settings_set( 'valid_tags', $valid_tags );
	/*
	 *
	 * ---> START SECTIONS
	 *
	 */

//GENERAL SETTINGS
	$posterity_a13->posterity_set_sections( array(
		'title'    => esc_html__( 'General settings', 'posterity' ),
		'desc'     => '',
		'id'       => 'section_general_settings',
		'icon'     => 'el el-adjust-alt',
		'priority' => 3,
		'fields'   => array()
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Front page', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_general_front_page',
		'icon'       => 'fa fa-home',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'fp_variant',
				'type'        => 'select',
				'title'       => esc_html__( 'What to show on the front page?', 'posterity' ),
				/* translators: %s: URL */
				'description' => sprintf( wp_kses( __( 'If you choose <strong>Page</strong> then make sure that in <a href="%s">WordPress Homepage Settings</a> you have selected <strong>A static page</strong>, that you wish to use as the front page.', 'posterity' ), $valid_tags ), 'javascript:wp.customize.section( \'static_front_page\' ).focus();' ),
				'options'     => array(
					'page'         => esc_html__( 'Page', 'posterity' ),
					'blog'         => esc_html__( 'Blog', 'posterity' ),
				),
				'default'     => 'page',

			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'General layout', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_main_settings',
		'icon'       => 'fa fa-wrench',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'appearance_body_image',
				'type'    => 'image',
				'title'   => esc_html__( 'Background image', 'posterity' ),
				'partial' => array(
					'selector'            => '.page-background',
					'container_inclusive' => true,
					'settings'            => array(
						'appearance_body_image',
						'appearance_body_image_fit',
						'appearance_body_bg_color',
					),
					'render_callback'     => 'posterity_page_background',
				),
			),
			array(
				'id'      => 'appearance_body_image_fit',
				'type'    => 'select',
				'title'   => esc_html__( 'How to fit the background image', 'posterity' ),
				'options' => $image_fit,
				'default' => 'cover',
				'partial' => true,
			),
			array(
				'id'      => 'appearance_body_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '#999999',
				'partial' => true,
			),
			array(
				'id'          => 'layout_type',
				'type'        => 'radio',
				'title'       => esc_html__( 'Layout', 'posterity' ),
				'options'     => array(
					'full' => esc_html__( 'Full width', 'posterity' ),
				),
				'default'     => 'full',
			),
			array(
				'id'      => 'custom_cursor',
				'type'    => 'radio',
				'title'   => esc_html__( 'Mouse cursor', 'posterity' ),
				'options' => array(
					'default' => esc_html__( 'Normal', 'posterity' ),
					'select'  => esc_html__( 'Predefined', 'posterity' ),
					'custom'  => esc_html__( 'Custom', 'posterity' ),
				),
				'default' => 'default',
				'js'      => true,
			),
			array(
				'id'       => 'cursor_select',
				'type'     => 'select',
				'title'    => esc_html__( 'Cursor', 'posterity' ),
				'options'  => $cursors,
				'default'  => 'empty_black_white.png',
				'required' => array( 'custom_cursor', '=', 'select' ),
				'js'       => true,
			),
			array(
				'id'       => 'cursor_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Custom cursor image', 'posterity' ),
				'required' => array( 'custom_cursor', '=', 'custom' ),
				'js'       => true,
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Page preloader', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_page_preloader',
		'icon'       => 'fa fa-spinner',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'preloader',
				'type'        => 'radio',
				'title'       => esc_html__( 'Page preloader', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
				'js'          => true,
			),
			array(
				'id'          => 'preloader_hide_event',
				'type'        => 'radio',
				'title'       => esc_html__( 'Hide event', 'posterity' ),
				'description' => wp_kses( __( '<strong>On load</strong> is called when the whole site, with all the images, is loaded, which can take a lot of time on heavier sites, and even more time on mobile devices. Also,  it can sometimes hang and never hide the preloader, when there is a problem with some resource. <br /><strong>On DOM ready</strong> is called when the whole HTML with CSS is loaded, so after the preloader is hidden, you can still see the loading of images. This is a much safer option.', 'posterity' ), $valid_tags ),
				'options'     => array(
					'ready' => esc_html__( 'On DOM ready', 'posterity' ),
					'load'  => esc_html__( 'On load', 'posterity' ),
				),
				'default'     => 'ready',
				'required'    => array( 'preloader', '=', 'on' ),
				'js'          => true,
			),
			array(
				'id'       => 'preloader_bg_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'required' => array( 'preloader', '=', 'on' ),
				'partial'  => array(
					'selector'            => '#preloader',
					'container_inclusive' => true,
					'settings'            => array(
						'preloader_bg_image',
						'preloader_bg_image_fit',
						'preloader_bg_color',
						'preloader_type',
						'preloader_color',
					),
					'render_callback'     => 'posterity_page_preloader',
				),
			),
			array(
				'id'       => 'preloader_bg_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'cover',
				'required' => array( 'preloader', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'preloader_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Background color', 'posterity' ),
				'default'  => '',
				'required' => array( 'preloader', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'preloader_type',
				'type'     => 'select',
				'title'    => esc_html__( 'Type', 'posterity' ),
				'options'  => array(
					'none'              => esc_html__( 'none', 'posterity' ),
					'atom'              => esc_html__( 'Atom', 'posterity' ),
					'flash'             => esc_html__( 'Flash', 'posterity' ),
					'indicator'         => esc_html__( 'Indicator', 'posterity' ),
					'radar'             => esc_html__( 'Radar', 'posterity' ),
					'circle_illusion'   => esc_html__( 'Circle Illusion', 'posterity' ),
					'square_of_squares' => esc_html__( 'Square of squares', 'posterity' ),
					'plus_minus'        => esc_html__( 'Plus minus', 'posterity' ),
					'hand'              => esc_html__( 'Hand', 'posterity' ),
					'blurry'            => esc_html__( 'Blurry', 'posterity' ),
					'arcs'              => esc_html__( 'Arcs', 'posterity' ),
					'tetromino'         => esc_html__( 'Tetromino', 'posterity' ),
					'infinity'          => esc_html__( 'Infinity', 'posterity' ),
					'cloud_circle'      => esc_html__( 'Cloud circle', 'posterity' ),
					'dots'              => esc_html__( 'Dots', 'posterity' ),
					'jet_pack_man'      => esc_html__( 'Jet-Pack-Man', 'posterity' ),
					'circle'            => 'Circle'
				),
				'default'  => 'flash',
				'required' => array( 'preloader', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'preloader_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Animation color', 'posterity' ),
				'required' => array(
					array( 'preloader', '=', 'on' ),
					array( 'preloader_type', '!=', 'tetromino' ),
					array( 'preloader_type', '!=', 'blurry' ),
					array( 'preloader_type', '!=', 'square_of_squares' ),
					array( 'preloader_type', '!=', 'circle_illusion' ),
				),
				'default'  => '',
				'partial'  => true,
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Theme Header', 'posterity' ),
		'desc'       => esc_html__( 'Theme header is a place where you usually find the logo of your site, main menu, and a few other elements.', 'posterity' ),
		'id'         => 'subsection_header',
		'icon'       => 'fa fa-ellipsis-h',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'header_switch',
				'type'    => 'radio',
				'title'   => esc_html__( 'Theme Header', 'posterity' ),
				'description' => esc_html__( 'If you do not plan to use theme header or want to replace it with something else, just disable it here.', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			)
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Footer', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_footer',
		'icon'       => 'fa fa-ellipsis-h',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'footer_switch',
				'type'    => 'radio',
				'title'   => esc_html__( 'Footer', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
				'partial'     => array(
					'selector'            => '#footer',
					'container_inclusive' => true,
					'settings'            => array(
						'footer_switch',
						'footer_widgets_columns',
						'footer_text',
						'footer_privacy_link',
						'footer_content_width',
						'footer_content_style',
						'footer_bg_color',
						'footer_lower_bg_color',
						'footer_lower_bg_color',
						'footer_widgets_color',
						'footer_separator',
						'footer_separator_color',
						'footer_font_size',
						'footer_widgets_font_size',
						'footer_font_color',
						'footer_link_color',
						'footer_hover_color',
					),
					'render_callback'     => 'posterity_theme_footer',
				),
			),
			array(
				'id'       => 'footer_widgets_columns',
				'type'     => 'select',
				'title'    => esc_html__( 'Widgets columns number', 'posterity' ),
				'options'  => array(
					'1' => esc_html__( '1', 'posterity' ),
					'2' => esc_html__( '2', 'posterity' ),
					'3' => esc_html__( '3', 'posterity' ),
					'4' => esc_html__( '4', 'posterity' ),
					'5' => esc_html__( '5', 'posterity' ),
				),
				'default'  => '4',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'          => 'footer_text',
				'type'        => 'textarea',
				'title'       => esc_html__( 'Content', 'posterity' ),
				'description' => esc_html__( 'You can use HTML here.', 'posterity' ),
				'default'     => '',
				'required'    => array( 'footer_switch', '=', 'on' ),
				'partial'     => true,
			),
			array(
				'id'          => 'footer_privacy_link',
				'type'        => 'radio',
				'title'       => esc_html__( 'Privacy Policy Link', 'posterity' ),
				'description' => esc_html__( 'Since WordPress 4.9.6 there is an option to set Privacy Policy page. If you enable this option it will display a link to it in the footer after footer content.', 'posterity' ).' <a href="'.esc_url( admin_url( 'options-privacy.php' ) ).'">'.esc_html__( 'Here you can set your Privacy Policy page', 'posterity' ).'</a>',
				'options'     => $on_off,
				'default'     => 'off',
				'required'    => array( 'footer_switch', '=', 'on' ),
				'partial'     => true,
			),
			array(
				'id'          => 'footer_socials',
				'type'        => 'radio',
				'title'       => esc_html__( 'Social icons', 'posterity' ),
				/* translators: %s: URL */
				'description' => sprintf( wp_kses( __( 'If you need to edit social links go to <a href="%s">Social icons</a> settings.', 'posterity' ), $valid_tags ), 'javascript:wp.customize.section( \'section_social\' ).focus();' ),
				'options'     => $on_off,
				'default'     => 'off',
				'required'    => array( 'footer_switch', '=', 'on' ),
				'partial'     => array(
					'selector'            => '.f-links',
					'container_inclusive' => true,
					'settings'            => array(
						'footer_socials',
						'footer_socials_color',
						'footer_socials_color_hover',
					),
					'render_callback'     => 'footer_socials'
				),
			),
			array(
				'id'       => 'footer_socials_color',
				'type'     => 'select',
				'title'    => esc_html__( 'Social icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ),
				'options'  => $social_colors,
				'default'  => 'color',
				'required' => array(
					array( 'footer_switch', '=', 'on' ),
					array( 'footer_socials', '=', 'on' ),
				),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_socials_color_hover',
				'type'     => 'select',
				'title'    => esc_html__( 'Social icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'options'  => $social_colors,
				'default'  => 'semi-transparent',
				'required' => array(
					array( 'footer_switch', '=', 'on' ),
					array( 'footer_socials', '=', 'on' ),
				),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_content_width',
				'type'     => 'radio',
				'title'    => esc_html__( 'Content', 'posterity' ). ' : ' .esc_html__( 'Width', 'posterity' ),
				'options'  => array(
					'narrow' => esc_html__( 'Narrow', 'posterity' ),
					'full'   => esc_html__( 'Full width', 'posterity' ),
				),
				'default'  => 'narrow',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_content_style',
				'type'     => 'radio',
				'title'    => esc_html__( 'Content', 'posterity' ). ' : ' .esc_html__( 'Style', 'posterity' ),
				'options'  => array(
					'classic'  => esc_html__( 'Classic', 'posterity' ),
					'centered' => esc_html__( 'Centered', 'posterity' ),
				),
				'default'  => 'classic',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Background color', 'posterity' ),
				'default'  => '',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_lower_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Lower part', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ),
				'desc'     => esc_html__( 'If you want to have a different color in the lower part than in the footer widgets.', 'posterity' ),
				'default'  => '',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_widgets_color',
				'type'     => 'radio',
				'title'    => esc_html__( 'Widgets colors', 'posterity' ),
				'desc'     => esc_html__( 'Depending on what background you have set up, choose proper option.', 'posterity' ),
				'options'  => array(
					'dark-sidebar'  => esc_html__( 'On dark', 'posterity' ),
					'light-sidebar' => esc_html__( 'On light', 'posterity' ),
				),
				'default'  => 'dark-sidebar',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_separator',
				'type'     => 'radio',
				'title'    => esc_html__( 'Separator between widgets and footer content', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'on',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_separator_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Separator', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'footer_switch', '=', 'on' ),
					array( 'footer_separator', '=', 'on' ),
				),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_font_size',
				'type'     => 'slider',
				'title'    => esc_html__( 'Lower part', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'default'  => 10,
				'min'      => 10,
				'max'      => 30,
				'step'     => 1,
				'unit'     => 'px',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'       => 'footer_widgets_font_size',
				'type'     => 'slider',
				'title'    => esc_html__( 'Widgets part', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'default'  => 10,
				'min'      => 10,
				'max'      => 30,
				'step'     => 1,
				'unit'     => 'px',
				'required' => array( 'footer_switch', '=', 'on' ),
				'partial'  => true,
			),
			array(
				'id'          => 'footer_font_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Lower part', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'description' => esc_html__( 'Does not work for footer widgets.', 'posterity' ),
				'default'     => '',
				'required'    => array( 'footer_switch', '=', 'on' ),
				'partial'     => true,
			),
			array(
				'id'          => 'footer_link_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Lower part', 'posterity' ). ' : ' .esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'description' => esc_html__( 'Does not work for footer widgets.', 'posterity' ),
				'default'     => '',
				'required'    => array( 'footer_switch', '=', 'on' ),
				'partial'     => true,
			),
			array(
				'id'          => 'footer_hover_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Lower part', 'posterity' ). ' : ' .esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'description' => esc_html__( 'Does not work for footer widgets.', 'posterity' ),
				'default'     => '',
				'required'    => array( 'footer_switch', '=', 'on' ),
				'partial'     => true,
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Hidden sidebar', 'posterity' ),
		'desc'       => esc_html__( 'It is active only if it contains active widgets. After activation, displays the opening button in the header.', 'posterity' ),
		'id'         => 'subsection_hidden_sidebar',
		'icon'       => 'fa fa-columns',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'      => 'hidden_sidebar_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'hidden_sidebar_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Font size', 'posterity' ),
				'default' => 10,
				'min'     => 5,
				'max'     => 30,
				'step'    => 1,
				'unit'    => 'px',
			),
			array(
				'id'          => 'hidden_sidebar_widgets_color',
				'type'        => 'radio',
				'title'       => esc_html__( 'Widgets colors', 'posterity' ),
				'description' => esc_html__( 'Depending on what background you have set up, choose proper option.', 'posterity' ),
				'options'     => array(
					'dark-sidebar'  => esc_html__( 'On dark', 'posterity' ),
					'light-sidebar' => esc_html__( 'On light', 'posterity' ),
				),
				'default'     => 'dark-sidebar',
			),
			array(
				'id'      => 'hidden_sidebar_side',
				'type'    => 'radio',
				'title'   => esc_html__( 'Side', 'posterity' ),
				'options' => array(
					'left'  => esc_html__( 'Left', 'posterity' ),
					'right' => esc_html__( 'Right', 'posterity' ),
				),
				'default' => 'left',
			),
			array(
				'id'      => 'hidden_sidebar_effect',
				'type'    => 'select',
				'title'   => esc_html__( 'Opening effect', 'posterity' ),
				'options' => array(
					'1' => esc_html__( 'Slide in on top', 'posterity' ),
					'2' => esc_html__( 'Reveal', 'posterity' ),
					'3' => esc_html__( 'Push', 'posterity' ),
					'4' => esc_html__( 'Slide along', 'posterity' ),
					'5' => esc_html__( 'Reverse slide out', 'posterity' ),
					'6' => esc_html__( 'Fall down', 'posterity' ),
				),
				'default' => '2',
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Fonts settings', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_fonts_settings',
		'icon'       => 'fa fa-font',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'nav_menu_fonts',
				'type'        => 'font',
				'title'       => esc_html__( 'Font for main navigation menu and overlay menu:', 'posterity' ),
				'default'     => array(
					'font-family'    => 'Poppins',
					'word-spacing'   => 'normal',
					'letter-spacing' => 'normal'
				),
			),
			array(
				'id'          => 'titles_fonts',
				'type'        => 'font',
				'title'       => esc_html__( 'Font for Titles/Headings:', 'posterity' ),
				'default'     => array(
					'font-family'    => 'Poppins',
					'word-spacing'   => 'normal',
					'letter-spacing' => 'normal'
				),
			),
			array(
				'id'          => 'normal_fonts',
				'type'        => 'font',
				'title'       => esc_html__( 'Font for normal(content) text:', 'posterity' ),
				'default'     => array(
					'font-family'    => 'Poppins',
					'word-spacing'   => 'normal',
					'letter-spacing' => 'normal'
				),
			),
			array(
				'id'      => 'logo_fonts',
				'type'    => 'font',
				'title'   => esc_html__( 'Font for text logo:', 'posterity' ),
				'default' => array(
					'font-family'    => 'Poppins',
					'word-spacing'   => 'normal',
					'letter-spacing' => 'normal'
				),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Headings', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_heading_styles',
		'icon'       => 'fa fa-header',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'      => 'headings_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Text color', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'headings_color_hover',
				'type'    => 'color',
				'title'   => esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'headings_weight',
				'type'    => 'select',
				'title'   => esc_html__( 'Font weight', 'posterity' ),
				'options' => $font_weights,
				'default' => 'bold',
			),
			array(
				'id'      => 'headings_transform',
				'type'    => 'radio',
				'title'   => esc_html__( 'Text transform', 'posterity' ),
				'options' => $font_transforms,
				'default' => 'none',
			),
			array(
				'id'      => 'page_title_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Main titles', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'default' => 36,
				'min'     => 10,
				'step'    => 1,
				'max'     => 60,
				'unit'    => 'px',
			),
			array(
				'id'          => 'page_title_font_size_768',
				'type'        => 'slider',
				'title'       => esc_html__( 'Main titles', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ). ' - ' .esc_html__( 'on mobile devices', 'posterity' ),
				'description' => esc_html__( 'It will be used on devices less than 768 pixels wide.', 'posterity' ),
				'min'         => 10,
				'max'         => 60,
				'step'        => 1,
				'unit'        => 'px',
				'default'     => 32,
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Content', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_content_styles',
		'icon'       => 'fa fa-align-left',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'content_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Background color', 'posterity' ),
				'description' => esc_html__( 'It will change the default white background color that is set under content on pages, blog, posts', 'posterity' ),
				'default'     => '#ffffff',
			),
			array(
				'id'      => 'content_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Text color', 'posterity' ),
				'default' => '#000000',
			),
			array(
				'id'      => 'content_link_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'content_link_color_hover',
				'type'    => 'color',
				'title'   => esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'content_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Font size', 'posterity' ),
				'default' => 16,
				'min'     => 10,
				'step'    => 1,
				'max'     => 30,
				'unit'    => 'px',
			),
			array(
				'id'          => 'first_paragraph',
				'type'        => 'radio',
				'title'       => esc_html__( 'First paragraph', 'posterity' ). ' : ' .esc_html__( 'Highlight', 'posterity' ),
				'description' => esc_html__( 'If enabled, it highlights(font size and color) the first paragraph in the content(blog, post, page).', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'       => 'first_paragraph_color',
				'type'     => 'color',
				'title'    => esc_html__( 'First paragraph', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array( 'first_paragraph', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Social icons', 'posterity' ),
		'desc'       => esc_html__( 'These icons will be used in various places across theme if you decide to activate them.', 'posterity' ),
		'id'         => 'section_social',
		'icon'       => 'fa fa-facebook-official',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'socials_variant',
				'type'    => 'radio',
				'title'   => esc_html__( 'Type of icons', 'posterity' ),
				'options' => array(
					'squares'    => esc_html__( 'Squares', 'posterity' ),
					'circles'    => esc_html__( 'Circles', 'posterity' ),
					'icons-only' => esc_html__( 'Only icons', 'posterity' ),
				),
				'default' => 'squares',
			),
			array(
				'id'          => 'social_services',
				'type'        => 'socials',
				'title'       => esc_html__( 'Links', 'posterity' ),
				'description' => esc_html__( 'Drag and drop to change order of icons. Only filled links will show up as social icons.', 'posterity' ),
				'label'       => false,
				'options'     => $posterity_a13->posterity_get_social_icons_list( 'names' ),
				'default'     => $posterity_a13->posterity_get_social_icons_list( 'empty' )
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Lightbox settings', 'posterity' ),
		'desc'       => esc_html__( 'If you wish to use some other plugin/script for images and items, you can switch off default theme lightbox. If you are planning to use different lightbox script instead, then you will have to do some extra work with scripting to make it work in every theme place.', 'posterity' ),
		'id'         => 'subsection_lightbox',
		'icon'       => 'fa fa-picture-o',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'skt_lightbox',
				'type'        => 'radio',
				'title'       => esc_html__( 'Theme lightbox', 'posterity' ),
				'options'     => array(
					'lightGallery' => esc_html__( 'Light Gallery', 'posterity' ),
					'off'          => esc_html__( 'Disable', 'posterity' ),
				),
				'default'     => 'lightGallery',
			),
			array(
				'id'          => 'lightbox_single_post',
				'type'        => 'radio',
				'title'       => esc_html__( 'Use theme lightbox for images in posts', 'posterity' ),
				'description' => esc_html__( 'If enabled, the theme will use a lightbox to display images in the post content. To work properly, Images should link to "Media File".', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
				'required'    => array( 'skt_lightbox', '=', 'lightGallery' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Widgets', 'posterity' ),
		'id'         => 'subsection_widgets',
		'icon'       => 'fa fa-puzzle-piece',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'widgets_top_margin',
				'type'        => 'radio',
				'title'       => esc_html__( 'Top margin', 'posterity' ),
				'description' => esc_html__( 'It only affects the widgets in the vertical sidebars.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'      => 'widget_title_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Main titles', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'min'     => 10,
				'max'     => 60,
				'step'    => 1,
				'unit'    => 'px',
				'default' => 26,
			),
			array(
				'id'          => 'widget_font_size',
				'type'        => 'slider',
				'title'       => esc_html__( 'Content', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'description' => esc_html__( 'It only affects the widgets in the vertical sidebars.', 'posterity' ),
				'min'         => 5,
				'max'         => 30,
				'step'        => 1,
				'unit'        => 'px',
				'default'     => 16,
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'To top button', 'posterity' ),
		'id'         => 'subsection_to_top',
		'icon'       => 'fa fa-chevron-up',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'to_top',
				'type'        => 'radio',
				'title'       => esc_html__( 'To top button', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'      => 'to_top_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '#524F51',
				'required' => array( 'to_top', '=', 'on' ),
			),
			array(
				'id'      => 'to_top_bg_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#000000',
				'required' => array( 'to_top', '=', 'on' ),
			),
			array(
				'id'      => 'to_top_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Icon', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ),
				'default' => '#cccccc',
				'required' => array( 'to_top', '=', 'on' ),
			),
			array(
				'id'      => 'to_top_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Icon', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#ffffff',
				'required' => array( 'to_top', '=', 'on' ),
			),
			array(
				'id'      => 'to_top_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Icon', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'min'     => 10,
				'step'    => 1,
				'max'     => 60,
				'unit'    => 'px',
				'default' => 13,
				'required' => array( 'to_top', '=', 'on' ),
			),
			array(
				'id'          => 'to_top_icon',
				'type'        => 'text',
				'title'       => esc_html__( 'Icon', 'posterity' ),
				'default'     => 'chevron-up',
				'input_attrs' => array(
					'class' => 'a13-fa-icon',
				),
				'required' => array( 'to_top', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Buttons', 'posterity' ),
		'desc'       => esc_html__( 'You can change here colors of buttons that submit forms. For shop buttons, go to the shop settings.', 'posterity' ),
		'id'         => 'subsection_buttons',
		'icon'       => 'fa fa-arrow-down',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'button_submit_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '#524F51',
			),
			array(
				'id'      => 'button_submit_bg_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#000000',
			),
			array(
				'id'      => 'button_submit_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Text color', 'posterity' ),
				'default' => '#cccccc'
			),
			array(
				'id'      => 'button_submit_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#ffffff'
			),
			array(
				'id'      => 'button_submit_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Font size', 'posterity' ),
				'min'     => 10,
				'max'     => 60,
				'step'    => 1,
				'unit'    => 'px',
				'default' => 13,
			),
			array(
				'id'      => 'button_submit_weight',
				'type'    => 'select',
				'title'   => esc_html__( 'Font weight', 'posterity' ),
				'options' => $font_weights,
				'default' => 'bold',
			),
			array(
				'id'      => 'button_submit_transform',
				'type'    => 'radio',
				'title'   => esc_html__( 'Text transform', 'posterity' ),
				'options' => $font_transforms,
				'default' => 'uppercase',
			),
			array(
				'id'      => 'button_submit_padding',
				'type'    => 'spacing',
				'title'   => esc_html__( 'Padding', 'posterity' ),
				'mode'    => 'padding',
				'sides'   => array( 'left', 'right' ),
				'units'   => array( 'px', 'em' ),
				'default' => array(
					'padding-left'  => '30px',
					'padding-right' => '30px',
					'units'         => 'px'
				),
			),
			array(
				'id'          => 'button_submit_radius',
				'type'        => 'slider',
				'title'       => esc_html__( 'Border radius', 'posterity' ),
				'min'         => 0,
				'max'         => 20,
				'step'        => 1,
				'unit'        => 'px',
				'default'     => 20,
			),
		)
	) );

//HEADER SETTINGS
	$posterity_a13->posterity_set_sections( array(
		'title'    => esc_html__( 'Header settings', 'posterity' ),
		'desc'     => '',
		'id'       => 'section_header_settings',
		'icon'     => 'el el-magic',
		'priority' => 6,
		'fields'   => array()
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Type, variant, background', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_header_type',
		'icon'       => 'fa fa-cogs',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'header_type',
				'type'        => 'radio',
				'title'       => esc_html__( 'Type', 'posterity' ),
				'options'     => array(
					'horizontal' => esc_html__( 'Horizontal', 'posterity' ),
				),
				'default'     => 'horizontal',
			),
			array(
				'id'       => 'header_horizontal_sticky',
				'type'     => 'select',
				'title'    => esc_html__( 'Sticky version', 'posterity' ),
				'options'  => array(
					'sticky-no-hiding'   => esc_html__( 'No hiding sticky', 'posterity' ),
					'no-sticky no-fixed' => esc_html__( 'Disabled, show only default header(not fixed)', 'posterity' ),
					'no-sticky'          => esc_html__( 'Disabled, show only default header fixed', 'posterity' )
				),
				'default'  => 'sticky-no-hiding',
				'required' => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'          => 'header_horizontal_variant',
				'type'        => 'select',
				'title'       => esc_html__( 'Variant', 'posterity' ),
				'options'     => array(
					'one_line'               => esc_html__( 'One line, logo on side', 'posterity' ),
					'one_line_menu_centered' => esc_html__( 'One line, menu centered', 'posterity' ),
				),
				'default'     => 'one_line',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'          => 'header_color_variants',
				'type'        => 'select',
				'title'       => esc_html__( 'Header color variants', 'posterity' ),
				'description' => esc_html__( 'If you want to use theme header color variants(light and dark variants) or the sticky header variant, then enable this option. Some settings of the header can then be overridden in color & sticky variants.', 'posterity' ),
				'options'     => array(
					'sticky' => esc_html__( 'Turn on only for a sticky variant', 'posterity' ),
					'off'    => esc_html__( 'Disable', 'posterity' ),
				),
				'default'     => 'sticky',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'       => 'header_content_width',
				'type'     => 'radio',
				'title'    => esc_html__( 'Content width', 'posterity' ),
				'options'  => array(
					'narrow' => esc_html__( 'Narrow', 'posterity' ),
					'full'   => esc_html__( 'Full width', 'posterity' ),
				),
				'default'  => 'full',
				'required' => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'       => 'header_content_width_narrow_bg',
				'type'     => 'radio',
				'title'    => esc_html__( 'Narrow the entire header as well', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'off',
				'required' => array(
					array( 'header_type', '=', 'horizontal' ),
					array( 'header_content_width', '=', 'narrow' )
				),
			),
			array(
				'id'      => 'header_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '#ffffff',
			),
			array(
				'id'          => 'header_bg_hover_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'description' => esc_html__( 'Useful in special cases, like when you make a transparent header.', 'posterity' ),
				'default'     => '',
			),
			array(
				'id'       => 'header_border',
				'type'     => 'radio',
				'title'    => esc_html__( 'Bottom border', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'on',
				'required' => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'      => 'header_shadow',
				'type'    => 'radio',
				'title'   => esc_html__( 'Shadow', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'header_separators_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Separator and lines color', 'posterity' ),
				'default'  => '',
				'required' => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'          => 'header_socials',
				'type'        => 'radio',
				'title'       => esc_html__( 'Social icons', 'posterity' ),
				/* translators: %s: URL */
				'description' => sprintf( wp_kses( __( 'If you need to edit social links go to <a href="%s">Social icons</a> settings.', 'posterity' ), $valid_tags ), 'javascript:wp.customize.section( \'section_social\' ).focus();' ),
				'options'     => $on_off,
				'default'     => 'off',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'       => 'header_socials_color',
				'type'     => 'select',
				'title'    => esc_html__( 'Social icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ),
				'options'  => $social_colors,
				'default'  => 'white',
				'required' => array(
					array( 'header_type', '=', 'horizontal' ),
					array( 'header_socials', '=', 'on' ),
				)
			),
			array(
				'id'       => 'header_socials_color_hover',
				'type'     => 'select',
				'title'    => esc_html__( 'Social icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'options'  => $social_colors,
				'default'  => 'color',
				'required' => array(
					array( 'header_type', '=', 'horizontal' ),
					array( 'header_socials', '=', 'on' ),
				)
			),
			array(
				'id'          => 'header_socials_display_on_mobile',
				'type'        => 'radio',
				'title'       => esc_html__( 'Social icons', 'posterity' ). ' - ' .esc_html__( 'Display it on mobiles', 'posterity' ),
				'description' => esc_html__( 'Should it be displayed on devices less than 600 pixels wide.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
				'required'    => array(
					array( 'header_type', '=', 'horizontal' ),
					array( 'header_socials', '=', 'on' ),
				)
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Logo', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_logo',
		'icon'       => 'fa fa-picture-o',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'logo_from_variants',
				'type'        => 'radio',
				'title'       => esc_html__( 'Use logos from header variants', 'posterity' ),
				'description' => esc_html__( 'If you want to be able to change the logo in header color variants (light and dark variants) or in the sticky header variant, then enable this option.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
				'required'    => array(
					array( 'header_type', '=', 'horizontal' ),
					array( 'header_color_variants', '!=', 'off' ),
				)
			),
			array(
				'id'      => 'logo_type',
				'type'    => 'radio',
				'title'   => esc_html__( 'Type', 'posterity' ),
				'options' => array(
					'image' => esc_html__( 'Image', 'posterity' ),
					'text'  => esc_html__( 'Text', 'posterity' ),
				),
				'default' => 'image',
			),
			array(
				'id'          => 'logo_image',
				'type'        => 'image',
				'title'       => esc_html__( 'Image', 'posterity' ),
				'description' => esc_html__( 'Upload an image for logo.', 'posterity' ),
				'default'     => '',
				'required'    => array( 'logo_type', '=', 'image' ),
			),
			array(
				'id'          => 'logo_image_high_dpi',
				'type'        => 'image',
				'title'       => esc_html__( 'Image for HIGH DPI screen', 'posterity' ),
				'description' => esc_html__( 'For example Retina(iPhone/iPad) screen has HIGH DPI screen.', 'posterity' ) . ' ' . esc_html__( 'Upload an image for logo.', 'posterity' ),
				'default'     => '',
				'required'    => array( 'logo_type', '=', 'image' ),
			),
			array(
				'id'          => 'logo_image_max_desktop_width',
				'type'        => 'slider',
				'title'       => esc_html__( 'Max width', 'posterity' ). ' - ' .esc_html__( 'on desktop', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ) .' '. esc_html__( 'It works only on large screens(1025px wide or more).', 'posterity' ),
				'min'         => 25,
				'step'        => 1,
				'max'         => 400,
				'unit'        => 'px',
				'default'     => 200,
				'required'    => array(
					array( 'logo_type', '=', 'image' ),
					array( 'header_type', '=', 'horizontal' ),
				)
			),
			array(
				'id'          => 'logo_image_max_mobile_width',
				'type'        => 'slider',
				'title'       => esc_html__( 'Max width', 'posterity' ). ' - ' .esc_html__( 'on mobile devices', 'posterity' ),
				'description' => esc_html__( 'It works only on mobile devices(1024px wide or less).', 'posterity' ),
				'min'         => 25,
				'max'         => 250,
				'step'        => 1,
				'unit'        => 'px',
				'default'     => 200,
				'required'    => array(
					array( 'logo_type', '=', 'image' ),
				)
			),
			array(
				'id'          => 'logo_image_height',
				'type'        => 'slider',
				'title'       => esc_html__( 'Height', 'posterity' ),
				'description' => esc_html__( 'Leave empty if you do not need anything fancy', 'posterity' ),
				'min'         => 0,
				'max'         => 100,
				'step'        => 1,
				'unit'        => 'px',
				'default'     => '',
				'required'    => array( 'logo_type', '=', 'image' ),
			),
			array(
				'id'       => 'logo_image_normal_opacity',
				'type'     => 'slider',
				'title'    => esc_html__( 'Opacity', 'posterity' ),
				'min'      => 0,
				'max'      => 1,
				'step'     => 0.01,
				'default'  => '1.00',
				'required' => array( 'logo_type', '=', 'image' ),
			),
			array(
				'id'       => 'logo_image_hover_opacity',
				'type'     => 'slider',
				'title'    => esc_html__( 'Opacity', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'min'      => 0,
				'max'      => 1,
				'step'     => 0.01,
				'default'  => '0.50',
				'required' => array( 'logo_type', '=', 'image' ),
			),
			array(
				'id'          => 'logo_text',
				'type'        => 'text',
				'title'       => esc_html__( 'Text', 'posterity' ),
				'description' => wp_kses( __( 'If you use more than one word in the logo, you can use <code>&amp;nbsp;</code> instead of a white space, so the words will not break into many lines.', 'posterity' ), $valid_tags ).
				                 /* translators: %s: Customizer JS URL */
				                 '<br />'.sprintf( wp_kses( __( 'If you want to change the font for logo go to <a href="%s">Font settings</a>.', 'posterity' ), $valid_tags ), 'javascript:wp.customize.control( \''.POSTERITY_OPTIONS_NAME.'[logo_fonts]\' ).focus();' ),
				'default'     => get_bloginfo( 'name' ),
				'required'    => array( 'logo_type', '=', 'text' ),
			),
			array(
				'id'       => 'logo_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array( 'logo_type', '=', 'text' ),
			),
			array(
				'id'       => 'logo_color_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default'  => '',
				'required' => array( 'logo_type', '=', 'text' ),
			),
			array(
				'id'       => 'logo_font_size',
				'type'     => 'slider',
				'title'    => esc_html__( 'Font size', 'posterity' ),
				'min'      => 10,
				'max'      => 60,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => 26,
				'required' => array( 'logo_type', '=', 'text' ),
			),
			array(
				'id'       => 'logo_weight',
				'type'     => 'select',
				'title'    => esc_html__( 'Font weight', 'posterity' ),
				'options'  => $font_weights,
				'default'  => 'normal',
				'required' => array( 'logo_type', '=', 'text' ),
			),
			array(
				'id'          => 'logo_padding',
				'type'        => 'spacing',
				'title'       => esc_html__( 'Padding', 'posterity' ). ' - ' .esc_html__( 'on desktop', 'posterity' ),
				'description' => esc_html__( 'It works only on large screens(1025px wide or more).', 'posterity' ),
				'mode'        => 'padding',
				'sides'       => array( 'top', 'bottom' ),
				'units'       => array( 'px', 'em' ),
				'default'     => array(
					'padding-top'    => '10px',
					'padding-bottom' => '10px',
					'units'          => 'px'
				)
			),
			array(
				'id'          => 'logo_padding_mobile',
				'type'        => 'spacing',
				'title'       => esc_html__( 'Padding', 'posterity' ). ' - ' .esc_html__( 'on mobile devices', 'posterity' ),
				'description' => esc_html__( 'It works only on mobile devices(1024px wide or less).', 'posterity' ),
				'mode'        => 'padding',
				'sides'       => array( 'top', 'bottom' ),
				'units'       => array( 'px', 'em' ),
				'default'     => array(
					'padding-top'    => '10px',
					'padding-bottom' => '10px',
					'units'          => 'px'
				)
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Main Menu', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_header_menu',
		'icon'       => 'fa fa-bars',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'header_main_menu',
				'type'    => 'radio',
				'title'   => esc_html__( 'Main Menu', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'          => 'menu_hover_effect',
				'type'        => 'select',
				'title'       => esc_html__( 'Hover effect', 'posterity' ),
				'description' => esc_html__( 'It works only for first level links.', 'posterity' ),
				'options'     => $menu_effects,
				'default'     => 'none',
				'required'    => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'          => 'menu_close_mobile_menu_on_click',
				'type'        => 'radio',
				'title'       => esc_html__( 'Mobile menu', 'posterity' ). ' : ' .esc_html__( 'Close menu after click', 'posterity' ),
				'description' => esc_html__( 'After turning on the mobile menu will be closed after clicking the link menu. This option is good for "one page" sites. For traditional websites, it is recommended to disable this option.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
				'required'    => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'          => 'menu_allow_mobile_menu',
				'type'        => 'radio',
				'title'       => esc_html__( 'Allow for the mobile menu', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ) .' '. esc_html__( 'If you disable this then menu will not switch to mobile menu. You should consider disabling this option only if you have a clean header with a short menu.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
				'required'    => array(
					array( 'header_main_menu', '=', 'on' ),
					array( 'header_type', '=', 'horizontal' ),
				)
			),
			array(
				'id'      => 'header_mobile_menu_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Mobile menu', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ),
				'default' => '#ffffff',
				'required'    => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'menu_font_size',
				'type'     => 'slider',
				'title'    => esc_html__( 'Font size', 'posterity' ),
				'min'      => 10,
				'max'      => 30,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => 16,
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'menu_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '#222222',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'menu_hover_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover/active', 'posterity' ),
				'default'  => '#0083dd',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'          => 'menu_hover_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover/active', 'posterity' ),
				'description' => esc_html__( 'It works only for first level links.', 'posterity' ),
				'default'     => '#000000',
				'required'    => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'menu_weight',
				'type'     => 'select',
				'title'    => esc_html__( 'Font weight', 'posterity' ),
				'options'  => $font_weights,
				'default'  => 'normal',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'menu_transform',
				'type'     => 'radio',
				'title'    => esc_html__( 'Text transform', 'posterity' ),
				'options'  => $font_transforms,
				'default'  => 'uppercase',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'submenu_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ),
				'default'  => '#ffffff',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'submenu_separator_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Mega-Menu separator color', 'posterity' ),
				'default'  => '',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'submenu_open_icons',
				'type'     => 'radio',
				'title'    => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Opening/Closing icons', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'on',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'          => 'submenu_opener',
				'type'        => 'text',
				'title'       => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Opening icon', 'posterity' ),
				'default'     => 'angle-down',
				'input_attrs' => array(
					'class' => 'a13-fa-icon',
				),
				'required'    => array(
					array( 'header_main_menu', '=', 'on' ),
					array( 'submenu_open_icons', '=', 'on' ),
				)

			),
			array(
				'id'          => 'submenu_closer',
				'type'        => 'text',
				'title'       => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Closing icon', 'posterity' ),
				'default'     => 'angle-up',
				'input_attrs' => array(
					'class' => 'a13-fa-icon',
				),
				'required'    => array(
					array( 'header_main_menu', '=', 'on' ),
					array( 'submenu_open_icons', '=', 'on' ),
				)
			),
			array(
				'id'          => 'submenu_third_lvl_opener',
				'type'        => 'text',
				'title'       => esc_html__( 'Submenu 3rd level', 'posterity' ). ' : ' .esc_html__( 'Opening icon', 'posterity' ),
				'default'     => 'angle-right',
				'input_attrs' => array(
					'class' => 'a13-fa-icon',
				),
				'required'    => array(
					array( 'header_main_menu', '=', 'on' ),
					array( 'submenu_open_icons', '=', 'on' ),
				)

			),
			array(
				'id'          => 'submenu_third_lvl_closer',
				'type'        => 'text',
				'title'       => esc_html__( 'Submenu 3rd level', 'posterity' ). ' : ' .esc_html__( 'Closing icon', 'posterity' ),
				'default'     => 'angle-left',
				'input_attrs' => array(
					'class' => 'a13-fa-icon',
				),
				'required'    => array(
					array( 'header_main_menu', '=', 'on' ),
					array( 'submenu_open_icons', '=', 'on' ),
				)
			),
			array(
				'id'       => 'submenu_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'required' => array( 'header_main_menu', '=', 'on' ),
				'default'  => '#000000',
			),
			array(
				'id'       => 'submenu_color_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover/active', 'posterity' ),
				'default'  => '#0083dd',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'submenu_font_size',
				'type'     => 'slider',
				'title'    => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'min'      => 10,
				'max'      => 30,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => 16,
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'submenu_weight',
				'type'     => 'select',
				'title'    => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Font weight', 'posterity' ),
				'options'  => $font_weights,
				'default'  => 'normal',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
			array(
				'id'       => 'submenu_transform',
				'type'     => 'radio',
				'title'    => esc_html__( 'Submenu/Mega-Menu', 'posterity' ). ' : ' .esc_html__( 'Text transform', 'posterity' ),
				'options'  => $font_transforms,
				'default'  => 'uppercase',
				'required' => array( 'header_main_menu', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Sticky header', 'posterity' ). ' - ' .esc_html__( 'Override normal settings', 'posterity' ),
		'desc'       => esc_html__( 'Works only with the horizontal header.', 'posterity' ) .' '. esc_html__( 'You can change some options here to modify the appearance of the sticky header(if it is enabled).', 'posterity' ),
		'id'         => 'subsection_header_sticky',
		'icon'       => 'fa fa-thumb-tack',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'header_sticky_logo_image',
				'type'        => 'image',
				'title'       => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Image', 'posterity' ),
				'description' => esc_html__( 'Upload an image for logo.', 'posterity' ),
				'default'     => '',
				'required'    => array(
					array( 'logo_type', '=', 'image' ),
					array( 'logo_from_variants', '=', 'on' ),
				)
			),
			array(
				'id'          => 'header_sticky_logo_image_high_dpi',
				'type'        => 'image',
				'title'       => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Image for HIGH DPI screen', 'posterity' ),
				'description' => esc_html__( 'For example Retina(iPhone/iPad) screen has HIGH DPI screen.', 'posterity' ) . ' ' . esc_html__( 'Upload an image for logo.', 'posterity' ),
				'default'     => '',
				'required'    => array(
					array( 'logo_type', '=', 'image' ),
					array( 'logo_from_variants', '=', 'on' ),
				)
			),
			array(
				'id'          => 'header_sticky_logo_image_max_desktop_width',
				'type'        => 'slider',
				'title'       => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Max width', 'posterity' ). ' - ' .esc_html__( 'on desktop', 'posterity' ),
				'description' => esc_html__( 'It works only on large screens(1025px wide or more).', 'posterity' ),
				'min'         => 25,
				'step'        => 1,
				'max'         => 400,
				'unit'        => 'px',
				'default'     => 200,
				'required'    => array(
					array( 'logo_type', '=', 'image' ),
					array( 'header_type', '=', 'horizontal' ),
				)
			),
			array(
				'id'          => 'header_sticky_logo_image_max_mobile_width',
				'type'        => 'slider',
				'title'       => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Max width', 'posterity' ). ' - ' .esc_html__( 'on mobile devices', 'posterity' ),
				'description' => esc_html__( 'It works only on mobile devices(1024px wide or less).', 'posterity' ),
				'min'         => 25,
				'max'         => 250,
				'step'        => 1,
				'unit'        => 'px',
				'default'     => 200,
				'required'    => array(
					array( 'logo_type', '=', 'image' ),
					array( 'header_type', '=', 'horizontal' ),
				)
			),
			array(
				'id'      => 'header_sticky_logo_padding',
				'type'    => 'spacing',
				'title'   => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Padding', 'posterity' ). ' - ' .esc_html__( 'on desktop', 'posterity' ),
				'description' => esc_html__( 'It works only on large screens(1025px wide or more).', 'posterity' ),
				'mode'    => 'padding',
				'sides'   => array( 'top', 'bottom' ),
				'units'   => array( 'px', 'em' ),
				'default' => array(
					'padding-top'    => '10px',
					'padding-bottom' => '10px',
					'units'          => 'px'
				),
			),
			array(
				'id'          => 'header_sticky_logo_padding_mobile',
				'type'        => 'spacing',
				'title'       => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Padding', 'posterity' ). ' - ' .esc_html__( 'on mobile devices', 'posterity' ),
				'description' => esc_html__( 'It works only on mobile devices(1024px wide or less).', 'posterity' ),
				'mode'        => 'padding',
				'sides'       => array( 'top', 'bottom' ),
				'units'       => array( 'px', 'em' ),
				'default'     => array(
					'padding-top'    => '10px',
					'padding-bottom' => '10px',
					'units'          => 'px'
				),
			),
			array(
				'id'       => 'header_sticky_logo_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'logo_type', '=', 'text' ),
					array( 'logo_from_variants', '=', 'on' ),
				)
			),
			array(
				'id'       => 'header_sticky_logo_color_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Logo', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'logo_type', '=', 'text' ),
					array( 'logo_from_variants', '=', 'on' ),
				)
			),
			array(
				'id'      => 'header_sticky_menu_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Main Menu', 'posterity' ). ' : ' .esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'header_sticky_menu_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Main Menu', 'posterity' ). ' : ' .esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover/active', 'posterity' ),
				'default' => '',
			),
			array(
				'id'          => 'header_sticky_menu_hover_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Main Menu', 'posterity' ). ' : ' .esc_html__( 'Links', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover/active', 'posterity' ),
				'description' => esc_html__( 'It works only for first level links.', 'posterity' ),
				'default'     => 'rgba(0,0,0,0)',
			),
			array(
				'id'      => 'header_sticky_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'header_sticky_mobile_menu_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Mobile menu', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ),
				'default' => '#ffffff',
			),
			array(
				'id'      => 'header_sticky_shadow',
				'type'    => 'radio',
				'title'   => esc_html__( 'Shadow', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'      => 'header_sticky_separators_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Header', 'posterity' ). ' : ' .esc_html__( 'Separator and lines color', 'posterity' ),
				'default' => '',
			),
			array(
				'id'          => 'header_sticky_tools_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Tools icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ),
				'description' => esc_html__( 'Basket, sidebar, menu and search icons. It is also color for the text of "Tools button".', 'posterity' ),
				'default'     => '',
			),
			array(
				'id'          => 'header_sticky_tools_color_hover',
				'type'        => 'color',
				'title'       => esc_html__( 'Tools icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ). ' - ' .esc_html__( 'on hover/active', 'posterity' ),
				'description' => esc_html__( 'Basket, sidebar, menu and search icons. It is also color for the text of "Tools button".', 'posterity' ),
				'default'     => '',
			),
			array(
				'id'       => 'header_sticky_button_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ),
				'default'  => 'rgba(0,0,0,0)',
				'required' => array( 'header_button', '!=', '' ),
			),
			array(
				'id'       => 'header_sticky_button_bg_color_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default'  => 'rgba(0,0,0,0)',
				'required' => array( 'header_button', '!=', '' ),
			),
			array(
				'id'       => 'header_sticky_button_border_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Border color', 'posterity' ),
				'default'  => 'rgba(0,0,0,0.2)',
				'required' => array( 'header_button', '!=', '' ),
			),
			array(
				'id'       => 'header_sticky_button_border_color_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Border color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default'  => 'rgba(0,0,0,0.4)',
				'required' => array( 'header_button', '!=', '' ),
			),
			array(
				'id'       => 'header_sticky_socials_color',
				'type'     => 'select',
				'title'    => esc_html__( 'Social icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ),
				'options'  => $social_colors,
				'default'  => 'semi-transparent',
				'required' => array(
					array( 'header_type', '=', 'horizontal' ),
					array( 'header_socials', '=', 'on' ),
				)
			),
			array(
				'id'       => 'header_sticky_socials_color_hover',
				'type'     => 'select',
				'title'    => esc_html__( 'Social icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'options'  => $social_colors,
				'default'  => 'color',
				'required' => array(
					array( 'header_type', '=', 'horizontal' ),
					array( 'header_socials', '=', 'on' ),
				)
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Tools icons', 'posterity' ). ' - ' .esc_html__( 'General settings', 'posterity' ),
		'id'         => 'subsection_header_tools',
		'icon'       => 'fa fa-ellipsis-h',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'header_tools_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Tools icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ),
				'description' => esc_html__( 'Basket, sidebar, menu and search icons. It is also color for the text of "Tools button".', 'posterity' ),
				'default'     => '#000000',
			),
			array(
				'id'          => 'header_tools_color_hover',
				'type'        => 'color',
				'title'       => esc_html__( 'Tools icons', 'posterity' ). ' : ' .esc_html__( 'Color', 'posterity' ). ' - ' .esc_html__( 'on hover/active', 'posterity' ),
				'description' => esc_html__( 'Basket, sidebar, menu and search icons. It is also color for the text of "Tools button".', 'posterity' ),
				'default'     => '#0083dd',
			),
			array(
				'id'      => 'header_search',
				'type'    => 'radio',
				'title'   => esc_html_x( 'Search', 'tool', 'posterity' ),
				'options' => $on_off,
				'default' => 'off',
			),			
			array(
				'id'          => 'header_button',
				'type'        => 'text',
				'title'       => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Text', 'posterity' ),
				'description' => esc_html__( 'If left empty then the text will not be displayed.', 'posterity' ),
				'default'     => '',
				'partial' => array(
					'selector' => '.tools_button',
					'container_inclusive' => true,
					'settings' => array(
						'header_button',
						'header_button_link',
						'header_button_link_target',
						'header_button_font_size',
						'header_button_weight',
						'header_button_bg_color',
						'header_button_bg_color_hover',
						'header_button_display_on_mobile',
					),
					'render_callback' => 'posterity_header_button',
				)
			),
			array(
				'id'       => 'header_button_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Link', 'posterity' ),
				'default'  => '',
				'required' => array( 'header_button', '!=', '' ),
				'partial'  => true,
			),
			array(
				'id'          => 'header_button_link_target',
				'type'        => 'radio',
				'title'       => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Open link in new tab', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
				'required'    => array( 'header_button', '!=', '' ),
				'partial'  => true,
			),
			array(
				'id'       => 'header_button_font_size',
				'type'     => 'slider',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Font size', 'posterity' ),
				'min'      => 5,
				'max'      => 30,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => '12',
				'required' => array( 'header_button', '!=', '' ),
				'partial'  => true,
			),
			array(
				'id'       => 'header_button_weight',
				'type'     => 'select',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Font weight', 'posterity' ),
				'options'  => $font_weights,
				'default'  => 'normal',
				'required' => array( 'header_button', '!=', '' ),
				'partial'  => true,
			),
			array(
				'id'       => 'header_button_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ),
				'default'  => 'rgba(0,0,0,0)',
				'required' => array( 'header_button', '!=', '' ),
				'partial'  => true,
			),
			array(
				'id'       => 'header_button_bg_color_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Tools button', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default'  => 'rgba(0,0,0,0)',
				'required' => array( 'header_button', '!=', '' ),
				'partial'  => true,
			),
			array(
				'id'          => 'header_button_display_on_mobile',
				'type'        => 'radio',
				'title'       => esc_html__( 'Tools button', 'posterity' ). ' - ' .esc_html__( 'Display it on mobiles', 'posterity' ),
				'description' => esc_html__( 'Should it be displayed on devices less than 600 pixels wide.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
				'required'    => array( 'header_button', '!=', '' ),
				'partial'  => true,
			),
		)
	) );


//BLOG SETTINGS
	$posterity_a13->posterity_set_sections( array(
		'title'    => esc_html__( 'Blog settings', 'posterity' ),
		'desc'     => esc_html__( 'Posts list refers to Blog, Search and Archives pages', 'posterity' ),
		'id'       => 'section_blog_layout',
		'icon'     => 'fa fa-pencil',
		'priority' => 9,
		'fields'   => array()
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Background', 'posterity' ),
		'id'         => 'subsection_blog_bg',
		'desc'       => esc_html__( 'This will be the default background for pages related to the blog.', 'posterity' ),
		'icon'       => 'fa fa-picture-o',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'blog_custom_background',
				'type'    => 'radio',
				'title'   => esc_html__( 'Custom background', 'posterity' ),
				'options' => $on_off,
				'default' => 'off',
			),
			array(
				'id'       => 'blog_body_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'required' => array( 'blog_custom_background', '=', 'on' ),
			),
			array(
				'id'       => 'blog_body_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'cover',
				'required' => array( 'blog_custom_background', '=', 'on' ),
			),
			array(
				'id'       => 'blog_body_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Background color', 'posterity' ),
				'default'  => '',
				'required' => array( 'blog_custom_background', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Posts list', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_blog',
		'icon'       => 'fa fa-list',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'blog_content_under_header',
				'type'        => 'select',
				'title'       => esc_html__( 'Hide content under the header', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ),
				'options'     => $content_under_header,
				'default'     => 'off',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'      => 'blog_content_layout',
				'type'    => 'select',
				'title'   => esc_html__( 'Content Layout', 'posterity' ),
				'options' => $content_layouts,
				'default' => 'center',
			),
			array(
				'id'      => 'blog_content_padding',
				'type'    => 'select',
				'title'   => esc_html__( 'Content', 'posterity' ). ' : ' .esc_html__( 'Top/bottom padding', 'posterity' ),
				'options' => array(
					'both'   => esc_html__( 'Both on', 'posterity' ),
					'top'    => esc_html__( 'Only top', 'posterity' ),
					'bottom' => esc_html__( 'Only bottom', 'posterity' ),
					'off'    => esc_html__( 'Both off', 'posterity' ),
				),
				'default' => 'off',
			),
			array(
				'id'      => 'blog_sidebar',
				'type'    => 'select',
				'title'   => esc_html__( 'Sidebar', 'posterity' ),
				'options' => array(
					'left-sidebar'  => esc_html__( 'Left', 'posterity' ),
					'right-sidebar' => esc_html__( 'Right', 'posterity' ),
					'off'           => esc_html__( 'Off', 'posterity' ),
				),
				'default' => 'off',
			),
			array(
				'id'      => 'blog_post_look',
				'type'    => 'select',
				'title'   => esc_html__( 'Post look', 'posterity' ),
				'options' => array(
					'vertical_no_padding' => esc_html__( 'Vertical no padding', 'posterity' ),
					'vertical_padding'    => esc_html__( 'Vertical with padding', 'posterity' ),
					'vertical_centered'   => esc_html__( 'Vertical centered', 'posterity' ),
					'horizontal'          => esc_html__( 'Horizontal', 'posterity' ),
				),
				'default' => 'vertical_padding',
			),
			array(
				'id'          => 'blog_layout_mode',
				'type'        => 'radio',
				'title'       => esc_html__( 'How to place items in rows', 'posterity' ),
				'description' => esc_html__( 'If your items have different heights, you can start each row of items from a new line instead of the masonry style.', 'posterity' ),
				'options'     => array(
					'packery' => esc_html__( 'Masonry', 'posterity' ),
					'fitRows' => esc_html__( 'Each row from new line', 'posterity' ),
				),
				'default'     => 'packery',
			),
			array(
				'id'          => 'blog_brick_columns',
				'type'        => 'slider',
				'title'       => esc_html__( 'Bricks columns', 'posterity' ),
				'description' => esc_html__( 'It is a maximum number of columns displayed on larger devices. On smaller devices, it can be a lower number of columns.', 'posterity' ),
				'min'         => 1,
				'max'         => 4,
				'step'        => 1,
				'unit'        => '',
				'default'     => 2,
				'required'    => array( 'blog_post_look', '!=', 'horizontal' ),
			),
			array(
				'id'          => 'blog_bricks_max_width',
				'type'        => 'slider',
				'title'       => esc_html__( 'The maximum width of the brick layout', 'posterity' ),
				'description' => esc_html__( 'Depending on the actual width of the screen, the available space for bricks may be smaller, but never greater than this number.', 'posterity' ),
				'min'         => 200,
				'max'         => 2500,
				'step'        => 1,
				'unit'        => 'px',
				'default'     => 1920,
				'required'    => array( 'blog_post_look', '!=', 'horizontal' ),
			),
			array(
				'id'      => 'blog_brick_margin',
				'type'    => 'slider',
				'title'   => esc_html__( 'Brick margin', 'posterity' ),
				'min'     => 0,
				'max'     => 100,
				'step'    => 1,
				'unit'    => 'px',
				'default' => 10,
			),
			array(
				'id'      => 'blog_lazy_load',
				'type'    => 'radio',
				'title'   => esc_html__( 'Lazy load', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'blog_lazy_load_mode',
				'type'     => 'radio',
				'title'    => esc_html__( 'Lazy load', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'options'  => array(
					'button' => esc_html__( 'By clicking button', 'posterity' ),
					'auto'   => esc_html__( 'On scroll', 'posterity' ),
				),
				'default'  => 'button',
				'required' => array( 'blog_lazy_load', '=', 'on' ),
			),
			array(
				'id'          => 'blog_read_more',
				'type'        => 'radio',
				'title'       => esc_html__( 'Display "Read more" link', 'posterity' ),
				'description' => esc_html__( 'Should "Read more" link be displayed after excerpts on blog list/search results.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'          => 'blog_excerpt_type',
				'type'        => 'radio',
				'title'       => esc_html__( 'Type of post excerpts', 'posterity' ),
				'description' => wp_kses( __(
					'In the Manual mode, excerpts are used only if you add the "Read More Tag" (&lt;!--more--&gt;).<br /> In the Automatic mode, if you will not provide the "Read More Tag" or explicit excerpt, the content of the post will be truncated automatically.<br /> This setting only concerns blog list, archive list, search results.', 'posterity' ), $valid_tags ),
				'options'     => array(
					'auto'   => esc_html__( 'Automatic', 'posterity' ),
					'manual' => esc_html__( 'Manual', 'posterity' ),
				),
				'default'     => 'auto',
			),
			array(
				'id'          => 'blog_excerpt_length',
				'type'        => 'slider',
				'title'       => esc_html__( 'Number of words to cut post', 'posterity' ),
				'description' => esc_html__( 'After this many words post will be cut in the automatic mode.', 'posterity' ),
				'min'         => 3,
				'max'         => 200,
				'step'        => 1,
				'unit'        => '',
				'default'     => 40,
				'required'    => array( 'blog_excerpt_type', '=', 'auto' ),
			),
			array(
				'id'          => 'blog_media',
				'type'        => 'radio',
				'title'       => esc_html__( 'Display post Media', 'posterity' ),
				'description' => esc_html__( 'You can set to not display post media(featured image/video/slider) inside of the post brick.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'          => 'blog_videos',
				'type'        => 'radio',
				'title'       => esc_html__( 'Display of posts video', 'posterity' ),
				'description' => esc_html__( 'You can set to display videos as featured image on posts list. This can speed up loading of pages with many posts(blog, archive, search results) when the videos are used.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'          => 'blog_date',
				'type'        => 'radio',
				'title'       => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Date of publish or last update', 'posterity' ),
				'description' => esc_html__( 'You can\'t use both dates, because the Search Engine will not know which date is correct.', 'posterity' ),
				'options'     => array(
					'on'      => esc_html__( 'Published', 'posterity' ),
					'updated' => esc_html__( 'Updated', 'posterity' ),
					'off'     => esc_html__( 'Disable', 'posterity' ),
				),
				'default'     => 'on',
			),
			array(
				'id'      => 'blog_author',
				'type'    => 'radio',
				'title'   => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Author', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'      => 'blog_comments',
				'type'    => 'radio',
				'title'   => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Comments number', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'      => 'blog_cats',
				'type'    => 'radio',
				'title'   => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Categories', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'          => 'blog_tags',
				'type'        => 'radio',
				'title'       => esc_html__( 'Tags', 'posterity' ),
				'description' => esc_html__( 'Displays list of post tags under a post content.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Posts list', 'posterity' ). ' - ' .esc_html__( 'Title bar', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_blog_title',
		'icon'       => 'fa fa-text-width',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'blog_title',
				'type'    => 'radio',
				'title'   => esc_html__( 'Title', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'blog_title_bar_variant',
				'type'     => 'radio',
				'title'    => esc_html__( 'Variant', 'posterity' ),
				'options'  => array(
					'classic'  => esc_html__( 'Classic(to side)', 'posterity' ),
					'centered' => esc_html__( 'Centered', 'posterity' ),
				),
				'default'  => 'centered',
				'required' => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'       => 'blog_title_bar_width',
				'type'     => 'radio',
				'title'    => esc_html__( 'Width', 'posterity' ),
				'options'  => array(
					'full'  => esc_html__( 'Full', 'posterity' ),
					'boxed' => esc_html__( 'Boxed', 'posterity' ),
				),
				'default'  => 'full',
				'required' => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'       => 'blog_title_bar_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'default'  => '',
				'required' => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'       => 'blog_title_bar_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'repeat',
				'required' => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'       => 'blog_title_bar_parallax',
				'type'     => 'radio',
				'title'    => esc_html__( 'Parallax', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'off',
				'required' => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'          => 'blog_title_bar_parallax_type',
				'type'        => 'select',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'description' => esc_html__( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'options'     => $parallax_types,
				'default'     => 'tb',
				'required'    => array(
					array( 'blog_title', '=', 'on' ),
					array( 'blog_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'blog_title_bar_parallax_speed',
				'type'        => 'slider',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Speed', 'posterity' ),
				'description' => esc_html__( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'min'         => 0,
				'max'         => 1,
				'step'        => 0.01,
				'default'     => '1.00',
				'required'    => array(
					array( 'blog_title', '=', 'on' ),
					array( 'blog_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'blog_title_bar_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Overlay color', 'posterity' ),
				'description' => esc_html__( 'Will be placed above the image(if used)', 'posterity' ),
				'default'     => '#ffffff',
				'required'    => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'       => 'blog_title_bar_title_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'          => 'blog_title_bar_color_1',
				'type'        => 'color',
				'title'       => esc_html__( 'Other elements', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'     => '',
				'required'    => array( 'blog_title', '=', 'on' ),
			),
			array(
				'id'       => 'blog_title_bar_space_width',
				'type'     => 'slider',
				'title'    => esc_html__( 'Top/bottom padding', 'posterity' ),
				'min'      => 0,
				'max'      => 600,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => '40',
				'required' => array( 'blog_title', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Single post', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_post',
		'icon'       => 'fa fa-pencil-square',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'post_content_under_header',
				'type'        => 'select',
				'title'       => esc_html__( 'Hide content under the header', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ),
				'options'     => $content_under_header,
				'default'     => 'off',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'      => 'post_content_layout',
				'type'    => 'select',
				'title'   => esc_html__( 'Content Layout', 'posterity' ),
				'options' => $content_layouts,
				'default' => 'center',
			),
			array(
				'id'      => 'post_sidebar',
				'type'    => 'select',
				'title'   => esc_html__( 'Sidebar', 'posterity' ),
				'options' => array(
					'left-sidebar'  => esc_html__( 'Left', 'posterity' ),
					'right-sidebar' => esc_html__( 'Right', 'posterity' ),
					'off'           => esc_html__( 'Off', 'posterity' ),
				),
				'default' => 'right-sidebar',
			),
			array(
				'id'          => 'post_media',
				'type'        => 'radio',
				'title'       => esc_html__( 'Display post Media', 'posterity' ),
				'description' => esc_html__( 'You can set to not display post media(featured image/video/slider) inside of the post.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'          => 'post_author_info',
				'type'        => 'radio',
				'title'       => esc_html__( 'Author info', 'posterity' ),
				'description' => esc_html__( 'Will show information about author below post content.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
			),
			array(
				'id'          => 'post_date',
				'type'        => 'radio',
				'title'       => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Date of publish or last update', 'posterity' ),
				'description' => esc_html__( 'You can\'t use both dates, because the Search Engine will not know which date is correct.', 'posterity' ),
				'options'     => array(
					'on'      => esc_html__( 'Published', 'posterity' ),
					'updated' => esc_html__( 'Updated', 'posterity' ),
					'off'     => esc_html__( 'Disable', 'posterity' ),
				),
				'default'     => 'on',
			),
			array(
				'id'      => 'post_author',
				'type'    => 'radio',
				'title'   => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Author', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'      => 'post_comments',
				'type'    => 'radio',
				'title'   => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Comments number', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'      => 'post_cats',
				'type'    => 'radio',
				'title'   => esc_html__( 'Post info', 'posterity' ). ' : ' .esc_html__( 'Categories', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'          => 'post_tags',
				'type'        => 'radio',
				'title'       => esc_html__( 'Tags', 'posterity' ),
				'description' => esc_html__( 'Displays list of post tags under a post content.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'          => 'post_navigation',
				'type'        => 'radio',
				'title'       => esc_html__( 'Posts navigation', 'posterity' ),
				'description' => esc_html__( 'Links to next and prev post.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),

		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Single post', 'posterity' ). ' - ' .esc_html__( 'Title bar', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_post_title',
		'icon'       => 'fa fa-text-width',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'post_title',
				'type'    => 'radio',
				'title'   => esc_html__( 'Title', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'post_title_bar_position',
				'type'     => 'radio',
				'title'    => esc_html__( 'Title position', 'posterity' ),
				'options'  => array(
					'outside' => esc_html__( 'Before the content', 'posterity' ),
					'inside'  => esc_html__( 'Inside the content', 'posterity' ),
				),
				'default'  => 'inside',
				'required' => array( 'post_title', '=', 'on' ),
			),
			array(
				'id'       => 'post_title_bar_variant',
				'type'     => 'radio',
				'title'    => esc_html__( 'Variant', 'posterity' ),
				'options'  => array(
					'classic'  => esc_html__( 'Classic(to side)', 'posterity' ),
					'centered' => esc_html__( 'Centered', 'posterity' ),
				),
				'default'  => 'classic',
				'required' => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'post_title_bar_width',
				'type'     => 'radio',
				'title'    => esc_html__( 'Width', 'posterity' ),
				'options'  => array(
					'full'  => esc_html__( 'Full', 'posterity' ),
					'boxed' => esc_html__( 'Boxed', 'posterity' ),
				),
				'default'  => 'full',
				'required' => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'post_title_bar_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'post_title_bar_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'repeat',
				'required' => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'post_title_bar_parallax',
				'type'     => 'radio',
				'title'    => esc_html__( 'Parallax', 'posterity' ),
				'default'  => 'off',
				'options'  => $on_off,
				'required' => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'          => 'post_title_bar_parallax_type',
				'type'        => 'select',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'description' => esc_html__( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'options'     => $parallax_types,
				'default'     => 'tb',
				'required'    => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
					array( 'post_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'post_title_bar_parallax_speed',
				'type'        => 'slider',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Speed', 'posterity' ),
				'description' => esc_html__( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'min'         => 0,
				'max'         => 1,
				'step'        => 0.01,
				'default'     => '1.00',
				'required'    => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
					array( 'post_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'post_title_bar_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Overlay color', 'posterity' ),
				'description' => esc_html__( 'Will be placed above the image(if used)', 'posterity' ),
				'default'     => '',
				'required'    => array( 'post_title', '=', 'on' ),
			),
			array(
				'id'       => 'post_title_bar_title_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'          => 'post_title_bar_color_1',
				'type'        => 'color',
				'title'       => esc_html__( 'Other elements', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'     => '',
				'required'    => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'post_title_bar_space_width',
				'type'     => 'slider',
				'title'    => esc_html__( 'Top/bottom padding', 'posterity' ),
				'min'      => 0,
				'max'      => 600,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => '40',
				'required' => array(
					array( 'post_title', '=', 'on' ),
					array( 'post_title_bar_position', '!=', 'inside' ),
				)
			),
		)
	) );

//SHOP SETTINGS
	$posterity_a13->posterity_set_sections( array(
		'title'    => esc_html__( 'Shop(WooCommerce) settings', 'posterity' ),
		'desc'     => '',
		'id'       => 'section_shop_general',
		'icon'     => 'fa fa-shopping-cart',
		'priority' => 12,
		'woocommerce_required' => true,//only visible with WooCommerce plugin being available
		'fields'   => array()
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Background', 'posterity' ),
		'desc'       => esc_html__( 'These options will work for all shop pages - product list, single product and other.', 'posterity' ),
		'id'         => 'subsection_shop_general',
		'icon'       => 'fa fa-picture-o',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'shop_custom_background',
				'type'    => 'radio',
				'title'   => esc_html__( 'Custom background', 'posterity' ),
				'options' => $on_off,
				'default' => 'off',
			),
			array(
				'id'       => 'shop_body_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'required' => array( 'shop_custom_background', '=', 'on' ),
			),
			array(
				'id'       => 'shop_body_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'cover',
				'required' => array( 'shop_custom_background', '=', 'on' ),
			),
			array(
				'id'       => 'shop_body_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Background color', 'posterity' ),
				'required' => array( 'shop_custom_background', '=', 'on' ),
				'default'  => '',
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Products list', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_shop',
		'icon'       => 'fa fa-list',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'shop_search',
				'type'        => 'radio',
				'title'       => esc_html__( 'Search in products instead of pages', 'posterity' ),
				'description' => esc_html__( 'It will change WordPress default search function to make shop search. So when this is activated search function in header or search widget will act as WooCommerece search widget.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
			),
			array(
				'id'          => 'shop_content_under_header',
				'type'        => 'select',
				'title'       => esc_html__( 'Hide content under the header', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ),
				'options'     => $content_under_header,
				'default'     => 'off',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'      => 'shop_content_layout',
				'type'    => 'select',
				'title'   => esc_html__( 'Content Layout', 'posterity' ),
				'options' => $content_layouts,
				'default' => 'full',
			),
			array(
				'id'      => 'shop_sidebar',
				'type'    => 'select',
				'title'   => esc_html__( 'Sidebar', 'posterity' ),
				'options' => array(
					'left-sidebar'  => esc_html__( 'Left', 'posterity' ),
					'right-sidebar' => esc_html__( 'Right', 'posterity' ),
					'off'           => esc_html__( 'Off', 'posterity' ),
				),
				'default' => 'left-sidebar',
			),
			array(
				'id'      => 'shop_products_variant',
				'type'    => 'radio',
				'title'   => esc_html__( 'Look of products on list', 'posterity' ),
				'options' => array(
					'overlay' => esc_html__( 'Text as overlay', 'posterity' ),
					'under'   => esc_html__( 'Text under photo', 'posterity' ),
				),
				'default' => 'overlay',
			),
			array(
				'id'       => 'shop_products_subvariant',
				'type'     => 'select',
				'title'    => esc_html__( 'Look of products on list', 'posterity' ),
				'options'  => array(
					'left'   => esc_html__( 'Texts to left', 'posterity' ),
					'center' => esc_html__( 'Texts to center', 'posterity' ),
					'right'  => esc_html__( 'Texts to right', 'posterity' ),
				),
				'default'  => 'center',
				'required' => array( 'shop_products_variant', '=', 'under' ),
			),
			array(
				'id'      => 'shop_products_second_image',
				'type'    => 'radio',
				'title'   => esc_html__( 'Show second image of product on hover', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'          => 'shop_products_layout_mode',
				'type'        => 'radio',
				'title'       => esc_html__( 'How to place items in rows', 'posterity' ),
				'description' => esc_html__( 'If your items have different heights, you can start each row of items from a new line instead of the masonry style.', 'posterity' ),
				'options'     => array(
					'packery' => esc_html__( 'Masonry', 'posterity' ),
					'fitRows' => esc_html__( 'Each row from new line', 'posterity' ),
				),
				'default'     => 'packery',
			),
			array(
				'id'          => 'shop_products_columns',
				'type'        => 'slider',
				'title'       => esc_html__( 'Bricks columns', 'posterity' ),
				'description' => esc_html__( 'It is a maximum number of columns displayed on larger devices. On smaller devices, it can be a lower number of columns.', 'posterity' ),
				'min'         => 1,
				'max'         => 4,
				'step'        => 1,
				'unit'        => '',
				'default'     => 4,
			),
			array(
				'id'      => 'shop_products_per_page',
				'type'    => 'slider',
				'title'   => esc_html__( 'Items per page', 'posterity' ),
				'min'     => 1,
				'max'     => 30,
				'step'    => 1,
				'unit'    => 'products',
				'default' => 12,
			),
			array(
				'id'      => 'shop_brick_margin',
				'type'    => 'slider',
				'title'   => esc_html__( 'Brick margin', 'posterity' ),
				'min'     => 0,
				'max'     => 100,
				'step'    => 1,
				'unit'    => 'px',
				'default' => 20,
			),
			array(
				'id'      => 'shop_lazy_load',
				'type'    => 'radio',
				'title'   => esc_html__( 'Lazy load', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'shop_lazy_load_mode',
				'type'     => 'radio',
				'title'    => esc_html__( 'Lazy load', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'options'  => array(
					'button' => esc_html__( 'By clicking button', 'posterity' ),
					'auto'   => esc_html__( 'On scroll', 'posterity' ),
				),
				'default'  => 'auto',
				'required' => array( 'shop_lazy_load', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Products list', 'posterity' ). ' - ' .esc_html__( 'Title bar', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_shop_title',
		'icon'       => 'fa fa-text-width',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'shop_title',
				'type'    => 'radio',
				'title'   => esc_html__( 'Title', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'shop_title_bar_variant',
				'type'     => 'radio',
				'title'    => esc_html__( 'Variant', 'posterity' ),
				'options'  => array(
					'classic'  => esc_html__( 'Classic(to side)', 'posterity' ),
					'centered' => esc_html__( 'Centered', 'posterity' ),
				),
				'default'  => 'classic',
				'required' => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_title_bar_width',
				'type'     => 'radio',
				'title'    => esc_html__( 'Width', 'posterity' ),
				'options'  => array(
					'full'  => esc_html__( 'Full', 'posterity' ),
					'boxed' => esc_html__( 'Boxed', 'posterity' ),
				),
				'default'  => 'full',
				'required' => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_title_bar_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'default'  => '',
				'required' => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_title_bar_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'repeat',
				'required' => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_title_bar_parallax',
				'type'     => 'radio',
				'title'    => esc_html__( 'Parallax', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'off',
				'required' => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'          => 'shop_title_bar_parallax_type',
				'type'        => 'select',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'description' => esc_html__( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'options'     => $parallax_types,
				'default'     => 'tb',
				'required'    => array(
					array( 'shop_title', '=', 'on' ),
					array( 'shop_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'shop_title_bar_parallax_speed',
				'type'        => 'slider',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Speed', 'posterity' ),
				'description' => esc_html__( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'min'         => 0,
				'max'         => 1,
				'step'        => 0.01,
				'default'     => '1.00',
				'required'    => array(
					array( 'shop_title', '=', 'on' ),
					array( 'shop_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'shop_title_bar_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Overlay color', 'posterity' ),
				'description' => esc_html__( 'Will be placed above the image(if used)', 'posterity' ),
				'default'     => '',
				'required'    => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_title_bar_title_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'          => 'shop_title_bar_color_1',
				'type'        => 'color',
				'title'       => esc_html__( 'Other elements', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'     => '',
				'required'    => array( 'shop_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_title_bar_space_width',
				'type'     => 'slider',
				'title'    => esc_html__( 'Top/bottom padding', 'posterity' ),
				'min'      => 0,
				'max'      => 600,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => '40',
				'required' => array( 'shop_title', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Single product', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_product',
		'icon'       => 'fa fa-pencil-square',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'product_content_under_header',
				'type'        => 'select',
				'title'       => esc_html__( 'Hide content under the header', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ),
				'options'     => $content_under_header,
				'default'     => 'off',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'      => 'product_content_layout',
				'type'    => 'select',
				'title'   => esc_html__( 'Content Layout', 'posterity' ),
				'options' => $content_layouts,
				'default' => 'full_fixed',
			),
			array(
				'id'      => 'product_sidebar',
				'type'    => 'select',
				'title'   => esc_html__( 'Sidebar', 'posterity' ),
				'options' => array(
					'left-sidebar'  => esc_html__( 'Left', 'posterity' ),
					'right-sidebar' => esc_html__( 'Right', 'posterity' ),
					'off'           => esc_html__( 'Off', 'posterity' ),
				),
				'default' => 'left-sidebar',
			),
			array(
				'id'          => 'product_custom_thumbs',
				'type'        => 'radio',
				'title'       => esc_html__( 'Theme thumbnails', 'posterity' ),
				'description' => esc_html__( 'If disabled it will display standard WooCommerce thumbnails.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
			array(
				'id'          => 'product_related_products',
				'type'        => 'radio',
				'title'       => esc_html__( 'Related products', 'posterity' ),
				'description' => esc_html__( 'Should related products be displayed on single product page.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Single product', 'posterity' ). ' - ' .esc_html__( 'Title bar', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_product_title',
		'icon'       => 'fa fa-text-width',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'product_title',
				'type'    => 'radio',
				'title'   => esc_html__( 'Title', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'product_title_bar_position',
				'type'     => 'radio',
				'title'    => esc_html__( 'Title position', 'posterity' ),
				'options'  => array(
					'outside' => esc_html__( 'Before the content', 'posterity' ),
					'inside'  => esc_html__( 'Inside the content', 'posterity' ),
				),
				'default'  => 'inside',
				'required' => array( 'product_title', '=', 'on' ),
			),
			array(
				'id'       => 'product_title_bar_variant',
				'type'     => 'radio',
				'title'    => esc_html__( 'Variant', 'posterity' ),
				'options'  => array(
					'classic'  => esc_html__( 'Classic(to side)', 'posterity' ),
					'centered' => esc_html__( 'Centered', 'posterity' ),
				),
				'default'  => 'classic',
				'required' => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'product_title_bar_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'product_title_bar_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'repeat',
				'required' => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'product_title_bar_parallax',
				'type'     => 'radio',
				'title'    => esc_html__( 'Parallax', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'off',
				'required' => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'          => 'product_title_bar_parallax_type',
				'type'        => 'select',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'description' => esc_html__( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'options'     => $parallax_types,
				'default'     => 'tb',
				'required'    => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
					array( 'product_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'product_title_bar_parallax_speed',
				'type'        => 'slider',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Speed', 'posterity' ),
				'description' => esc_html__( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'min'         => 0,
				'max'         => 1,
				'step'        => 0.01,
				'default'     => '1.00',
				'required'    => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
					array( 'product_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'product_title_bar_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Overlay color', 'posterity' ),
				'description' => esc_html__( 'Will be placed above the image(if used)', 'posterity' ),
				'default'     => '',
				'required'    => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'product_title_bar_title_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'          => 'product_title_bar_color_1',
				'type'        => 'color',
				'title'       => esc_html__( 'Other elements', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'     => '',
				'required'    => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'product_title_bar_space_width',
				'type'     => 'slider',
				'title'    => esc_html__( 'Top/bottom padding', 'posterity' ),
				'min'      => 0,
				'max'      => 600,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => '40',
				'required' => array(
					array( 'product_title', '=', 'on' ),
					array( 'product_title_bar_position', '!=', 'inside' ),
				)
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Other shop pages', 'posterity' ),
		'desc'       => esc_html__( 'Settings for cart, checkout, order received and my account pages.', 'posterity' ),
		'id'         => 'subsection_shop_no_major_pages',
		'icon'       => 'fa fa-cog',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'shop_no_major_pages_content_under_header',
				'type'        => 'select',
				'title'       => esc_html__( 'Hide content under the header', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ),
				'options'     => $content_under_header,
				'default'     => 'off',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'      => 'shop_no_major_pages_content_layout',
				'type'    => 'select',
				'title'   => esc_html__( 'Content Layout', 'posterity' ),
				'options' => $content_layouts,
				'default' => 'full_fixed',
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'desc'       => esc_html__( 'Settings for cart, checkout, order received and my account pages.', 'posterity' ),
		'title'      => esc_html__( 'Other shop pages', 'posterity' ). ' - ' .esc_html__( 'Title bar', 'posterity' ),
		'id'         => 'subsection_shop_no_major_pages_title',
		'icon'       => 'fa fa-text-width',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'shop_no_major_pages_title',
				'type'    => 'radio',
				'title'   => esc_html__( 'Title', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'shop_no_major_pages_title_bar_variant',
				'type'     => 'radio',
				'title'    => esc_html__( 'Variant', 'posterity' ),
				'options'  => array(
					'classic'  => esc_html__( 'Classic(to side)', 'posterity' ),
					'centered' => esc_html__( 'Centered', 'posterity' ),
				),
				'default'  => 'classic',
				'required' => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_no_major_pages_title_bar_width',
				'type'     => 'radio',
				'title'    => esc_html__( 'Width', 'posterity' ),
				'options'  => array(
					'full'  => esc_html__( 'Full', 'posterity' ),
					'boxed' => esc_html__( 'Boxed', 'posterity' ),
				),
				'default'  => 'full',
				'required' => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_no_major_pages_title_bar_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'default'  => '',
				'required' => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_no_major_pages_title_bar_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'repeat',
				'required' => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_no_major_pages_title_bar_parallax',
				'type'     => 'radio',
				'title'    => esc_html__( 'Parallax', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'off',
				'required' => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'          => 'shop_no_major_pages_title_bar_parallax_type',
				'type'        => 'select',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'description' => esc_html__( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'options'     => $parallax_types,
				'default'     => 'tb',
				'required'    => array(
					array( 'shop_no_major_pages_title', '=', 'on' ),
					array( 'shop_no_major_pages_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'shop_no_major_pages_title_bar_parallax_speed',
				'type'        => 'slider',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Speed', 'posterity' ),
				'description' => esc_html__( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'min'         => 0,
				'max'         => 1,
				'step'        => 0.01,
				'default'     => '1.00',
				'required'    => array(
					array( 'shop_no_major_pages_title', '=', 'on' ),
					array( 'shop_no_major_pages_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'shop_no_major_pages_title_bar_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Overlay color', 'posterity' ),
				'description' => esc_html__( 'Will be placed above the image(if used)', 'posterity' ),
				'default'     => '',
				'required'    => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_no_major_pages_title_bar_title_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'          => 'shop_no_major_pages_title_bar_color_1',
				'type'        => 'color',
				'title'       => esc_html__( 'Other elements', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'     => '',
				'required'    => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
			array(
				'id'       => 'shop_no_major_pages_title_bar_space_width',
				'type'     => 'slider',
				'title'    => esc_html__( 'Top/bottom padding', 'posterity' ),
				'min'      => 0,
				'max'      => 600,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => '40',
				'required' => array( 'shop_no_major_pages_title', '=', 'on' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Pop up basket', 'posterity' ),
		'desc'       => esc_html__( 'When WooCommerce is activated, button opening this basket will appear in the header. There also have to be some active widgets in "Basket sidebar" for this.', 'posterity' ),
		'id'         => 'subsection_basket_sidebars',
		'icon'       => 'fa fa-shopping-basket',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'      => 'basket_sidebar_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '',
			),
			array(
				'id'      => 'basket_sidebar_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Font size', 'posterity' ),
				'min'     => 5,
				'max'     => 30,
				'step'    => 1,
				'unit'    => 'px',
				'default' => '',
			),
			array(
				'id'          => 'basket_sidebar_widgets_color',
				'type'        => 'radio',
				'title'       => esc_html__( 'Widgets colors', 'posterity' ),
				'description' => esc_html__( 'Depending on what background you have set up, choose proper option.', 'posterity' ),
				'options'     => array(
					'dark-sidebar'  => esc_html__( 'On dark', 'posterity' ),
					'light-sidebar' => esc_html__( 'On light', 'posterity' ),
				),
				'default'     => 'light-sidebar',
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Buttons', 'posterity' ),
		'desc'       => esc_html__( 'You can change here the colors of buttons used in the shop. Alternative buttons colors are used in various places in the shop.', 'posterity' ),
		'id'         => 'subsection_buttons_shop',
		'icon'       => 'fa fa-arrow-down',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'button_shop_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ),
				'default' => '#524F51',
			),
			array(
				'id'      => 'button_shop_bg_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#000000',
			),
			array(
				'id'      => 'button_shop_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Text color', 'posterity' ),
				'default' => '#cccccc'
			),
			array(
				'id'      => 'button_shop_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#ffffff'
			),
			array(
				'id'      => 'button_shop_alt_bg_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Alternative button', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ),
				'default' => '#524F51',
			),
			array(
				'id'      => 'button_shop_alt_bg_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Alternative button', 'posterity' ). ' : ' .esc_html__( 'Background color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#000000',
			),
			array(
				'id'      => 'button_shop_alt_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Alternative button', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default' => '#cccccc'
			),
			array(
				'id'      => 'button_shop_alt_hover_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Alternative button', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ). ' - ' .esc_html__( 'on hover', 'posterity' ),
				'default' => '#ffffff'
			),
			array(
				'id'      => 'button_shop_font_size',
				'type'    => 'slider',
				'title'   => esc_html__( 'Font size', 'posterity' ),
				'min'     => 10,
				'max'     => 60,
				'step'    => 1,
				'unit'    => 'px',
				'default' => 13,
			),
			array(
				'id'      => 'button_shop_weight',
				'type'    => 'select',
				'title'   => esc_html__( 'Font weight', 'posterity' ),
				'options' => $font_weights,
				'default' => 'bold',
			),
			array(
				'id'      => 'button_shop_transform',
				'type'    => 'radio',
				'title'   => esc_html__( 'Text transform', 'posterity' ),
				'options' => $font_transforms,
				'default' => 'uppercase',
			),
			array(
				'id'      => 'button_shop_padding',
				'type'    => 'spacing',
				'title'   => esc_html__( 'Padding', 'posterity' ),
				'mode'    => 'padding',
				'sides'   => array( 'left', 'right' ),
				'units'   => array( 'px', 'em' ),
				'default' => array(
					'padding-left'  => '30px',
					'padding-right' => '30px',
					'units'         => 'px'
				),
			),
		)
	) );

//PAGE SETTINGS
	$posterity_a13->posterity_set_sections( array(
		'title'    => esc_html__( 'Page settings', 'posterity' ),
		'desc'     => '',
		'id'       => 'section_page',
		'icon'     => 'el el-file-edit',
		'priority' => 15,
		'fields'   => array()
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Single page', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_page',
		'icon'       => 'el el-file-edit',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'page_comments',
				'type'    => 'radio',
				'title'   => esc_html__( 'Comments', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'          => 'page_content_under_header',
				'type'        => 'select',
				'title'       => esc_html__( 'Hide content under the header', 'posterity' ),
				'description' => esc_html__( 'Works only with the horizontal header.', 'posterity' ),
				'options'     => $content_under_header,
				'default'     => 'off',
				'required'    => array( 'header_type', '=', 'horizontal' ),
			),
			array(
				'id'      => 'page_content_layout',
				'type'    => 'select',
				'title'   => esc_html__( 'Content Layout', 'posterity' ),
				'options' => $content_layouts,
				'default' => 'center',
			),
			array(
				'id'          => 'page_sidebar',
				'type'        => 'select',
				'title'       => esc_html__( 'Sidebar', 'posterity' ),
				'description' => esc_html__( 'You can change it in each page settings.', 'posterity' ),
				'options'     => array(
					'left-sidebar'          => esc_html__( 'Sidebar on the left', 'posterity' ),
					'left-sidebar_and_nav'  => esc_html__( 'Children Navigation + sidebar on the left', 'posterity' ),
					'left-nav'              => esc_html__( 'Only children Navigation on the left', 'posterity' ),
					'right-sidebar'         => esc_html__( 'Sidebar on the right', 'posterity' ),
					'right-sidebar_and_nav' => esc_html__( 'Children Navigation + sidebar on the right', 'posterity' ),
					'right-nav'             => esc_html__( 'Only children Navigation on the right', 'posterity' ),
					'off'                   => esc_html__( 'Off', 'posterity' ),
				),
				'default'     => 'off',
			),
			array(
				'id'      => 'page_custom_background',
				'type'    => 'radio',
				'title'   => esc_html__( 'Custom background', 'posterity' ),
				'options' => $on_off,
				'default' => 'off',
			),
			array(
				'id'       => 'page_body_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'required' => array( 'page_custom_background', '=', 'on' ),
			),
			array(
				'id'       => 'page_body_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'cover',
				'required' => array( 'page_custom_background', '=', 'on' ),
			),
			array(
				'id'       => 'page_body_bg_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Background color', 'posterity' ),
				'required' => array( 'page_custom_background', '=', 'on' ),
				'default'  => '',
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Single page', 'posterity' ). ' - ' .esc_html__( 'Title bar', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_page_title',
		'icon'       => 'fa fa-text-width',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'      => 'page_title',
				'type'    => 'radio',
				'title'   => esc_html__( 'Title', 'posterity' ),
				'options' => $on_off,
				'default' => 'on',
			),
			array(
				'id'       => 'page_title_bar_position',
				'type'     => 'radio',
				'title'    => esc_html__( 'Title position', 'posterity' ),
				'options'  => array(
					'outside' => esc_html__( 'Before the content', 'posterity' ),
					'inside'  => esc_html__( 'Inside the content', 'posterity' ),
				),
				'default'  => 'outside',
				'required' => array( 'page_title', '=', 'on' ),
			),
			array(
				'id'       => 'page_title_bar_variant',
				'type'     => 'radio',
				'title'    => esc_html__( 'Variant', 'posterity' ),
				'options'  => array(
					'classic'  => esc_html__( 'Classic(to side)', 'posterity' ),
					'centered' => esc_html__( 'Centered', 'posterity' ),
				),
				'default'  => 'classic',
				'required' => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'page_title_bar_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Background image', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'page_title_bar_image_fit',
				'type'     => 'select',
				'title'    => esc_html__( 'How to fit the background image', 'posterity' ),
				'options'  => $image_fit,
				'default'  => 'repeat',
				'required' => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'page_title_bar_parallax',
				'type'     => 'radio',
				'title'    => esc_html__( 'Parallax', 'posterity' ),
				'options'  => $on_off,
				'default'  => 'off',
				'required' => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'          => 'page_title_bar_parallax_type',
				'type'        => 'select',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Type', 'posterity' ),
				'description' => esc_html__( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'options'     => $parallax_types,
				'default'     => 'tb',
				'required'    => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
					array( 'page_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'page_title_bar_parallax_speed',
				'type'        => 'slider',
				'title'       => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Speed', 'posterity' ),
				'description' => esc_html__( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'min'         => 0,
				'max'         => 1,
				'step'        => 0.01,
				'default'     => '1.00',
				'required'    => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
					array( 'page_title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'id'          => 'page_title_bar_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Overlay color', 'posterity' ),
				'description' => esc_html__( 'Will be placed above the image(if used)', 'posterity' ),
				'default'     => '',
				'required'    => array( 'page_title', '=', 'on' ),
			),
			array(
				'id'       => 'page_title_bar_title_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'default'  => '',
				'required' => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'          => 'page_title_bar_color_1',
				'type'        => 'color',
				'title'       => esc_html__( 'Other elements', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'description' => esc_html__( 'Used in breadcrumbs.', 'posterity' ),
				'default'     => '',
				'required'    => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'id'       => 'page_title_bar_space_width',
				'type'     => 'slider',
				'title'    => esc_html__( 'Top/bottom padding', 'posterity' ),
				'min'      => 0,
				'max'      => 600,
				'step'     => 1,
				'unit'     => 'px',
				'default'  => '40',
				'required' => array(
					array( 'page_title', '=', 'on' ),
					array( 'page_title_bar_position', '!=', 'inside' ),
				)
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( '404 page template', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_404_page',
		'icon'       => 'fa fa-exclamation-triangle',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'page_404_template_type',
				'type'        => 'radio',
				'title'       => esc_html__( 'Type', 'posterity' ),
				'options'     => array(
					'default' => esc_html__( 'Default', 'posterity' ),
				),
				'default'     => 'default',
			),
			array(
				'id'       => 'page_404_bg_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Default but I want to change the background image', 'posterity' ),
				'required' => array( 'page_404_template_type', '=', 'default' ),
			),
		)
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Password protected page template', 'posterity' ),
		'id'         => 'subsection_password_page',
		'icon'       => 'fa fa-lock',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'page_password_template_type',
				'type'        => 'radio',
				'title'       => esc_html__( 'Type', 'posterity' ),
				'options'     => array(
					'default' => esc_html__( 'Default', 'posterity' ),
				),
				'default'     => 'default',
			),
			array(
				'id'       => 'page_password_bg_image',
				'type'     => 'image',
				'title'    => esc_html__( 'Default but I want to change the background image', 'posterity' ),
				'required' => array( 'page_password_template_type', '=', 'default' ),
			),
		)
	) );

//MISCELLANEOUS
	$posterity_a13->posterity_set_sections( array(
		'title'    => esc_html__( 'Miscellaneous', 'posterity' ),
		'desc'     => '',
		'id'       => 'section_miscellaneous',
		'icon'     => 'fa fa-question',
		'priority' => 24,
		'fields'   => array(),
	) );

	$posterity_a13->posterity_set_sections( array(
		'title'      => esc_html__( 'Anchors', 'posterity' ),
		'desc'       => '',
		'id'         => 'subsection_anchors',
		'icon'       => 'fa fa-external-link',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'anchors_in_bar',
				'type'        => 'radio',
				'title'       => esc_html__( 'Display anchors in address bar', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'off',
			),
			array(
				'id'          => 'scroll_to_anchor',
				'type'        => 'radio',
				'title'       => esc_html__( 'Scroll to anchor handling', 'posterity' ),
				'description' => esc_html__( 'If enabled it will scroll to anchor after it is clicked on the same page. It can, however, conflict with plugins that uses the same mechanism, and the page can scroll in a weird way. In such case disable this feature.', 'posterity' ),
				'options'     => $on_off,
				'default'     => 'on',
			),
		)
	) );

	/*
 * <--- END SECTIONS
 */

	do_action( 'posterity_additional_theme_options' );
}

posterity_setup_theme_options();