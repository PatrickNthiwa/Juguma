<?php
function posterity_meta_boxes_post() {
	$meta = array(
		/*
		 *
		 * Tab: Posts list
		 *
		 */
		'posts_list' => array(
			array(
				'name' => __('Posts list', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-list'
			),
			array(
				'name'        => __( 'Size of brick', 'posterity' ),
				'description' => __( 'What should be the width of this post on the Posts list?', 'posterity' ),
				'id'          => 'brick_ratio_x',
				'default'     => 1,
				'unit'        => '',
				'min'         => 1,
				'max'         => 4,
				'type'        => 'slider'
			),
		),


		/*
		 *
		 * Tab: Featured media
		 *
		 */
		'featured_media' => array(
			array(
				'name' => __('Featured media', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-star'
			),
			array(
				'name'        => __( 'Post media', 'posterity' ),
				'id'          => 'image_or_video',
				'default'     => 'post_image',
				'options'     => array(
					'post_image'  => __( 'Image', 'posterity' ),
				),
				'type'        => 'radio',
			),
			array(
				'name'        => __( 'Featured Image ', 'posterity' ). ' : ' . __( 'Parallax', 'posterity' ),
				'id'          => 'image_parallax',
				'default'     => 'off',
				'type'        => 'radio',
				'options'     => array(
					'on'  => __( 'Enable', 'posterity' ),
					'off' => __( 'Disable', 'posterity' ),
				),
				'required'    => array( 'image_or_video', '=', 'post_image' ),
			),
			array(
				'name'     => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Area height', 'posterity' ),
				'description' => __( 'This limits the height of the image so that the parallax can work.', 'posterity' ),
				'id'       => 'image_parallax_height',
				'default'  => '260',
				'unit'     => 'px',
				'min'      => 100,
				'max'      => 600,
				'type'     => 'slider',
				'required' => array(
					array( 'image_or_video', '=', 'post_image' ),
					array( 'image_parallax', '=', 'on' ),
				)
			),
		),

		/*
		 *
		 * Tab: Header
		 *
		 */
		'header' => array(
			array(
				'name' => __('Header', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-cogs'
			),
			array(
				'name'          => __( 'Hide content under the header', 'posterity' ),
				'description'   => __( 'Works only with the horizontal header.', 'posterity' ),
				'id'            => 'content_under_header',
				'global_value'  => 'G',
				'default'       => 'G',
				'parent_option' => 'post_content_under_header',
				'type'          => 'select',
				'options'       => array(
					'G'       => __( 'Global settings', 'posterity' ),
					'content' => __( 'Yes, hide the content', 'posterity' ),
					'title'   => __( 'Yes, hide the content and add top padding to the outside title bar.', 'posterity' ),
					'off'     => __( 'Turn it off', 'posterity' ),
				),
			),
		),

		/*
		 *
		 * Tab: Title bar
		 *
		 */
		'title_bar' => array(
			array(
				'name' => __('Title bar', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-text-width'
			),
			array(
				'name'        => __( 'Title bar', 'posterity' ),
				'description' => __( 'You can use global settings or override them here', 'posterity' ),
				'id'          => 'title_bar_settings',
				'default'     => 'global',
				'type'        => 'radio',
				'options'     => array(
					'global' => __( 'Global settings', 'posterity' ),
					'custom' => __( 'Use custom settings', 'posterity' ),
					'off'    => __( 'Turn it off', 'posterity' ),
				),
			),
			array(
				'name'        => __( 'Position', 'posterity' ),
				'id'          => 'title_bar_position',
				'default'     => 'outside',
				'type'        => 'radio',
				'options'     => array(
					'outside' => __( 'Before the content', 'posterity' ),
					'inside'  => __( 'Inside the content', 'posterity' ),
				),
				'description' => __( 'To set the background image for the "Before the content" option, use the <strong>featured image</strong>.', 'posterity' ),
				'required'    => array( 'title_bar_settings', '=', 'custom' ),
			),
			array(
				'name'        => __( 'Variant', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_variant',
				'default'     => 'classic',
				'options'     => array(
					'classic'  => __( 'Classic(to side)', 'posterity' ),
					'centered' => __( 'Centered', 'posterity' ),
				),
				'type'        => 'radio',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Width', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_width',
				'default'     => 'full',
				'options'     => array(
					'full'  => __( 'Full', 'posterity' ),
					'boxed' => __( 'Boxed', 'posterity' ),
				),
				'type'        => 'radio',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'     => __( 'How to fit the background image', 'posterity' ),
				'id'       => 'title_bar_image_fit',
				'default'  => 'repeat',
				'options'  => array(
					'cover'    => __( 'Cover', 'posterity' ),
					'contain'  => __( 'Contain', 'posterity' ),
					'fitV'     => __( 'Fit Vertically', 'posterity' ),
					'fitH'     => __( 'Fit Horizontally', 'posterity' ),
					'center'   => __( 'Just center', 'posterity' ),
					'repeat'   => __( 'Repeat', 'posterity' ),
					'repeat-x' => __( 'Repeat X', 'posterity' ),
					'repeat-y' => __( 'Repeat Y', 'posterity' ),
				),
				'type'     => 'select',
				'required' => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Parallax', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_parallax',
				'default'     => 'off',
				'options'     => array(
					'on'  => __( 'Enable', 'posterity' ),
					'off' => __( 'Disable', 'posterity' ),
				),
				'type'        => 'radio',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Parallax', 'posterity' ). ' : ' . __( 'Type', 'posterity' ),
				'description' => __( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'id'          => 'title_bar_parallax_type',
				'default'     => 'tb',
				'options'     => array(
					"tb"   => __( 'top to bottom', 'posterity' ),
					"bt"   => __( 'bottom to top', 'posterity' ),
					"lr"   => __( 'left to right', 'posterity' ),
					"rl"   => __( 'right to left', 'posterity' ),
					"tlbr" => __( 'top-left to bottom-right', 'posterity' ),
					"trbl" => __( 'top-right to bottom-left', 'posterity' ),
					"bltr" => __( 'bottom-left to top-right', 'posterity' ),
					"brtl" => __( 'bottom-right to top-left', 'posterity' ),
				),
				'type'        => 'select',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
					array( 'title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'name'        => __( 'Parallax', 'posterity' ). ' : ' . __( 'Speed', 'posterity' ),
				'description' => __( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'id'          => 'title_bar_parallax_speed',
				'default'     => '1.00',
				'type'        => 'text',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
					array( 'title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'name'        => __( 'Overlay color', 'posterity' ),
				'description' => __( 'Will be placed above the image(if used)', 'posterity' ),
				'id'          => 'title_bar_bg_color',
				'default'     => '',
				'type'        => 'color',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'     => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'id'       => 'title_bar_title_color',
				'default'  => '',
				'type'     => 'color',
				'required' => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Top/bottom padding', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_space_width',
				'default'     => '40px',
				'unit'        => 'px',
				'min'         => 0,
				'max'         => 600,
				'type'        => 'slider',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
		),

	);

	return apply_filters( 'posterity_meta_boxes_post', $meta );
}



function posterity_meta_boxes_page() {
	$sidebars = array_merge(
		array(
			'default' => __( 'Default for pages', 'posterity' ),
		),
		posterity_meta_get_user_sidebars()
	);

	$meta = array(
		/*
		 *
		 * Tab: Layout &amp; Sidebar
		 *
		 */
		'layout' => array(
			array(
				'name' => __('Layout &amp; Sidebar', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-wrench'
			),
			array(
				'name'          => __( 'Content Layout', 'posterity' ),
				'id'            => 'content_layout',
				'default'       => 'global',
				'global_value'  => 'global',
				'parent_option' => 'page_content_layout',
				'type'          => 'select',
				'options'       => array(
					'global'        => __( 'Global settings', 'posterity' ),
					'center'        => __( 'Center fixed width', 'posterity' ),
					'left'          => __( 'Left fixed width', 'posterity' ),
					'left_padding'  => __( 'Left fixed width + padding', 'posterity' ),
					'right'         => __( 'Right fixed width', 'posterity' ),
					'right_padding' => __( 'Right fixed width + padding', 'posterity' ),
					'full_fixed'    => __( 'Full width + fixed content', 'posterity' ),
					'full_padding'  => __( 'Full width + padding', 'posterity' ),
					'full'          => __( 'Full width', 'posterity' ),
				),
			),
			array(
				'name'        => esc_html__( 'Content', 'posterity' ). ' : ' .esc_html__( 'Top/bottom padding', 'posterity' ),
				'id'          => 'content_padding',
				'default'     => 'both',
				'type'        => 'select',
				'options'     => array(
					'both'   => __( 'Both on', 'posterity' ),
					'top'    => __( 'Only top', 'posterity' ),
					'bottom' => __( 'Only bottom', 'posterity' ),
					'off'    => __( 'Both off', 'posterity' ),
				),
			),
			array(
				'name'        => __( 'Content', 'posterity' ). ' : ' .esc_html__( 'Left/right padding', 'posterity' ),
				'id'          => 'content_side_padding',
				'default'     => 'both',
				'type'        => 'radio',
				'options'     => array(
					'both'   => __( 'Both on', 'posterity' ),
					'off'    => __( 'Both off', 'posterity' ),
				),
			),
			array(
				'name'          => __( 'Sidebar', 'posterity' ),
				'id'            => 'widget_area',
				'global_value'  => 'G',
				'default'       => 'G',
				'parent_option' => 'page_sidebar',
				'options'       => array(
					'G'                     => __( 'Global settings', 'posterity' ),
					'left-sidebar'          => __( 'Sidebar on the left', 'posterity' ),
					'left-sidebar_and_nav'  => __( 'Children Navigation', 'posterity' ) . ' + ' . __( 'Sidebar on the left', 'posterity' ),
					/* translators: %s: Children Navigation */
					'left-nav'             => sprintf( __( 'Only %s on the left', 'posterity' ), __( 'Children Navigation', 'posterity' ) ),
					'right-sidebar'         => __( 'Sidebar on the right', 'posterity' ),
					'right-sidebar_and_nav' => __( 'Children Navigation', 'posterity' ) . ' + ' . __( 'Sidebar on the right', 'posterity' ),
					/* translators: %s: Children Navigation */
					'right-nav'             => sprintf( __( 'Only %s on the right', 'posterity' ), __( 'Children Navigation', 'posterity' ) ),
					'off'                   => __( 'Off', 'posterity' ),
				),
				'type'          => 'select',
			),
			array(
				'name'     => __( 'Sidebar to show', 'posterity' ),
				'id'       => 'sidebar_to_show',
				'default'  => 'default',
				'options'  => $sidebars,
				'type'     => 'select',
				'required' => array( 'widget_area', '!=', 'off' ),
			),
		),

		/*
		 *
		 * Tab: Header
		 *
		 */
		'header' => array(
			array(
				'name' => __('Header', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-cogs'
			),
			array(
				'name'          => __( 'Hide content under the header', 'posterity' ),
				'description'   => __( 'Works only with the horizontal header.', 'posterity' ),
				'id'            => 'content_under_header',
				'global_value'  => 'G',
				'default'       => 'G',
				'parent_option' => 'page_content_under_header',
				'type'          => 'select',
				'options'       => array(
					'G'       => __( 'Global settings', 'posterity' ),
					'content' => __( 'Yes, hide the content', 'posterity' ),
					'title'   => __( 'Yes, hide the content and add top padding to the outside title bar.', 'posterity' ),
					'off'     => __( 'Turn it off', 'posterity' ),
				),
			),
			array(
				'name'          => __( 'Show header from the Nth row', 'posterity' ),
				'description'   => __( 'Works only with the horizontal header.', 'posterity' ). '<br />' . __( 'If you use Elementor or WPBakery Page Builder, then you can decide to show header after the content is scrolled to Nth row. Thanks to that you can have a clean welcome screen.', 'posterity' ),
				'id'            => 'horizontal_header_show_header_at',
				'default'       => '0',
				'type'          => 'select',
				'options'       => array(
					'0' => __( 'Show always', 'posterity' ),
					'1' => __( 'from 1st row', 'posterity' ),
					'2' => __( 'from 2nd row', 'posterity' ),
					'3' => __( 'from 3rd row', 'posterity' ),
					'4' => __( 'from 4th row', 'posterity' ),
					'5' => __( 'from 5th row', 'posterity' ),
				),
			),
		),

		/*
		 *
		 * Tab: Title bar
		 *
		 */
		'title_bar' => array(
			array(
				'name' => __('Title bar', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-text-width'
			),
			array(
				'name'        => __( 'Title bar', 'posterity' ),
				'description' => __( 'You can use global settings or override them here', 'posterity' ),
				'id'          => 'title_bar_settings',
				'default'     => 'global',
				'type'        => 'radio',
				'options'     => array(
					'global' => __( 'Global settings', 'posterity' ),
					'custom' => __( 'Use custom settings', 'posterity' ),
					'off'    => __( 'Turn it off', 'posterity' ),
				),
			),
			array(
				'name'        => __( 'Position', 'posterity' ),
				'id'          => 'title_bar_position',
				'default'     => 'outside',
				'type'        => 'radio',
				'options'     => array(
					'outside' => __( 'Before the content', 'posterity' ),
					'inside'  => __( 'Inside the content', 'posterity' ),
				),
				'description' => __( 'To set the background image for the "Before the content" option, use the <strong>featured image</strong>.', 'posterity' ),
				'required'    => array( 'title_bar_settings', '=', 'custom' ),
			),
			array(
				'name'        => __( 'Variant', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_variant',
				'default'     => 'classic',
				'options'     => array(
					'classic'  => __( 'Classic(to side)', 'posterity' ),
					'centered' => __( 'Centered', 'posterity' ),
				),
				'type'        => 'radio',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Width', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_width',
				'default'     => 'full',
				'options'     => array(
					'full'  => __( 'Full', 'posterity' ),
					'boxed' => __( 'Boxed', 'posterity' ),
				),
				'type'        => 'radio',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'     => __( 'How to fit the background image', 'posterity' ),
				'id'       => 'title_bar_image_fit',
				'default'  => 'repeat',
				'options'  => array(
					'cover'    => __( 'Cover', 'posterity' ),
					'contain'  => __( 'Contain', 'posterity' ),
					'fitV'     => __( 'Fit Vertically', 'posterity' ),
					'fitH'     => __( 'Fit Horizontally', 'posterity' ),
					'center'   => __( 'Just center', 'posterity' ),
					'repeat'   => __( 'Repeat', 'posterity' ),
					'repeat-x' => __( 'Repeat X', 'posterity' ),
					'repeat-y' => __( 'Repeat Y', 'posterity' ),
				),
				'type'     => 'select',
				'required' => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Parallax', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_parallax',
				'default'     => 'off',
				'options'     => array(
					'on'  => __( 'Enable', 'posterity' ),
					'off' => __( 'Disable', 'posterity' ),
				),
				'type'        => 'radio',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Parallax', 'posterity' ). ' : ' . __( 'Type', 'posterity' ),
				'description' => __( 'It defines how the image will scroll in the background while the page is scrolled down.', 'posterity' ),
				'id'          => 'title_bar_parallax_type',
				'default'     => 'tb',
				'options'     => array(
					"tb"   => __( 'top to bottom', 'posterity' ),
					"bt"   => __( 'bottom to top', 'posterity' ),
					"lr"   => __( 'left to right', 'posterity' ),
					"rl"   => __( 'right to left', 'posterity' ),
					"tlbr" => __( 'top-left to bottom-right', 'posterity' ),
					"trbl" => __( 'top-right to bottom-left', 'posterity' ),
					"bltr" => __( 'bottom-left to top-right', 'posterity' ),
					"brtl" => __( 'bottom-right to top-left', 'posterity' ),
				),
				'type'        => 'select',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
					array( 'title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'name'        => __( 'Parallax', 'posterity' ). ' : ' . __( 'Speed', 'posterity' ),
				'description' => __( 'It will be only used for the background that is repeated. If the background is set to not repeat this value will be ignored.', 'posterity' ),
				'id'          => 'title_bar_parallax_speed',
				'default'     => '1.00',
				'type'        => 'text',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
					array( 'title_bar_parallax', '=', 'on' ),
				)
			),
			array(
				'name'        => __( 'Overlay color', 'posterity' ),
				'description' => __( 'Will be placed above the image(if used)', 'posterity' ),
				'id'          => 'title_bar_bg_color',
				'default'     => '',
				'type'        => 'color',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'     => esc_html__( 'Titles', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'id'       => 'title_bar_title_color',
				'default'  => '',
				'type'     => 'color',
				'required' => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => esc_html__( 'Other elements', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
				'id'          => 'title_bar_color_1',
				'default'     => '',
				'type'        => 'color',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
			array(
				'name'        => __( 'Top/bottom padding', 'posterity' ),
				'description' => '',
				'id'          => 'title_bar_space_width',
				'default'     => '40px',
				'unit'        => 'px',
				'min'         => 0,
				'max'         => 600,
				'type'        => 'slider',
				'required'    => array(
					array( 'title_bar_settings', '=', 'custom' ),
					array( 'title_bar_position', '!=', 'inside' ),
				)
			),
		),

		/*
		 *
		 * Tab: Featured media
		 *
		 */
		'featured_media' => array(
			array(
				'name' => __('Featured media', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-star'
			),
			array(
				'name'        => __( 'Post media', 'posterity' ),
				'id'          => 'image_or_video',
				'default'     => 'post_image',
				'options'     => array(
					'post_image'  => __( 'Image', 'posterity' ),
				),
				'type'        => 'radio',
			),
			array(
				'name'        => __( 'Featured Image ', 'posterity' ). ' : ' . __( 'Parallax', 'posterity' ),
				'id'          => 'image_parallax',
				'default'     => 'off',
				'type'        => 'radio',
				'options'     => array(
					'on'  => __( 'Enable', 'posterity' ),
					'off' => __( 'Disable', 'posterity' ),
				),
				'required'    => array( 'image_or_video', '=', 'post_image' ),
			),
			array(
				'name'     => esc_html__( 'Parallax', 'posterity' ). ' : ' . esc_html__( 'Area height', 'posterity' ),
				'description' => __( 'This limits the height of the image so that the parallax can work.', 'posterity' ),
				'id'       => 'image_parallax_height',
				'default'  => '260',
				'unit'     => 'px',
				'min'      => 100,
				'max'      => 600,
				'type'     => 'slider',
				'required' => array(
					array( 'image_or_video', '=', 'post_image' ),
					array( 'image_parallax', '=', 'on' ),
				)
			),
		),

		/*
		 *
		 * Tab: Sticky one page mode
		 *
		 */
		'sticky_one_page' => array(
			array(
				'name' => __('Sticky One Page mode', 'posterity'),
				'type' => 'fieldset',
				'tab'   => true,
				'icon'  => 'fa fa-anchor'
			),
			array(
				'name'        => __( 'Sticky One Page mode', 'posterity' ),
				'description' => __( 'This works only when page is designed with WPBakery Page Builder. With this option enabled, the page will turn into a vertical slider to the full height of the browser window, and each row created in the WPBakery Page Builder is a single slide.', 'posterity' ),
				'id'          => 'content_sticky_one_page',
				'default'     => 'off',
				'type'        => 'radio',
				'options'     => array(
					'on'  => __( 'Enable', 'posterity' ),
					'off' => __( 'Disable', 'posterity' ),
				),
			),
			array(
				'name'     => __( 'Color of navigation bullets', 'posterity' ),
				'id'       => 'content_sticky_one_page_bullet_color',
				'default'  => 'rgba(0,0,0,1)',
				'type'     => 'color',
				'required' => array(
					array( 'content_sticky_one_page', '=', 'on' )
				)
			),
			array(
				'name'        => __( 'Default bullets icon', 'posterity' ),
				'id'          => 'content_sticky_one_page_bullet_icon',
				'default'     => '',
				'type'        => 'text',
				'input_class' => 'a13-fa-icon a13-full-class',
				'required'    => array(
					array( 'content_sticky_one_page', '=', 'on' )
				)
			),
		),
	);

	return apply_filters( 'posterity_meta_boxes_page', $meta );
}

function posterity_meta_boxes_images_manager() {
	return apply_filters( 'posterity_meta_boxes_images_manager', array('images_manager' => array()) );
}



function posterity_get_socials_array() {
	global $posterity_a13;

	$tmp_arr = array();
	$socials = $posterity_a13->posterity_get_social_icons_list();
	foreach ( $socials as $id => $social ) {
		array_push( $tmp_arr, array( 'name' => $social, 'id' => $id, 'type' => 'text' ) );
	}
	return $tmp_arr;
}



function posterity_meta_boxes_people() {
	$meta =
		array(
			/*
			 *
			 * Tab: General
			 *
			 */
			'general' => array(
				array(
					'name' => __('General', 'posterity'),
					'type' => 'fieldset',
					'tab'   => true,
					'icon'  => 'fa fa-wrench'
				),
				array(
						'name'        => __( 'Subtitle', 'posterity' ),
						'description' => __( 'You can use HTML here.', 'posterity' ),
						'id'          => 'subtitle',
						'default'     => '',
						'type'        => 'text'
				),
				array(
						'name'    => __( 'Testimonial', 'posterity' ),
						'desc'    => '',
						'id'      => 'testimonial',
						'default' => '',
						'type'    => 'textarea'
				),
				array(
						'name'        => __( 'Overlay color', 'posterity' ),
						'id'          => 'overlay_bg_color',
						'default'     => 'rgba(0,0,0,0.5)',
						'type'        => 'color'
				),
				array(
						'name'        => __( 'Overlay', 'posterity' ). ' : ' .esc_html__( 'Text color', 'posterity' ),
						'id'          => 'overlay_font_color',
						'default'     => 'rgba(255,255,255,1)',
						'type'        => 'color'
				),
			),

			/*
			 *
			 * Tab: Socials
			 *
			 */
			'socials' => array_merge(
				array(
					array(
						'name' => __('Social icons', 'posterity'),
						'type' => 'fieldset',
						'tab'   => true,
						'icon'  => 'fa fa-facebook-official'
					),
				),
				posterity_get_socials_array()
			),
		);

	return $meta;
}