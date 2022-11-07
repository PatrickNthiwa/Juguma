<?php
if ( ! function_exists( 'posterity_add_sidebars' ) ) {
	/**
	 * Functions that register all theme sidebars
	 *
	 */
	function posterity_add_sidebars() {
		//defined sidebars
		$widget_areas = array(
			// Shown on blog
			'blog-widget-area'   => array(
				'name'        => esc_html__( 'Blog sidebar', 'posterity' ),
				'description' => esc_html__( 'Widgets from this sidebar will appear on blog, search results, archive page, and 404 error page.', 'posterity' ),
			),
			// Shown in post
			'post-widget-area'   => array(
				'name'        => esc_html__( 'Post sidebar', 'posterity' ),
				'description' => esc_html__( 'Widgets from this sidebar will appear in single posts.', 'posterity' ),
			),
			// Shown in pages
			'page-widget-area'   => array(
				'name'        => esc_html__( 'Page sidebar', 'posterity' ),
				'description' => esc_html__( 'Widgets from this sidebar will appear in static pages.', 'posterity' ),
			),
			// Shown in shop pages
			'shop-widget-area'   => array(
				'name'        => esc_html__( 'Shop sidebar', 'posterity' ),
				'description' => esc_html__( 'Widgets from this sidebar will appear only in shop pages. WooCommerce have to be installed and activated.', 'posterity' ),
			),
			// Shown everywhere
			'side-widget-area'   => array(
				'name'        => esc_html__( 'Hidden sidebar', 'posterity' ),
				'description' => esc_html__( 'It is always available sidebar, that is activated by clicking on the icon in the header. Good for some special menus or other tips/information for the user.', 'posterity' ),
			),
			// Shown everywhere
			'basket-widget-area' => array(
				'name'        => esc_html__( 'Basket sidebar', 'posterity' ),
				'description' => esc_html__( 'It is always available sidebar (but only active if WooCommerce is installed and activated), that is activated by clicking on the icon in the header. You should put a shopping cart widget there, as well as, for example, several special widgets.', 'posterity' ),
			),
			// Shown in footer
			'footer-widget-area' => array(
				'name'          => esc_html__( 'Footer widget area', 'posterity' ),
				'description'   => esc_html__( 'Widgets from this area will appear in footer, only if horizontal header is used.', 'posterity' ),
			),
		);

		//custom sidebars
		global $posterity_a13;

		//in some rare cases this is null
		if(is_null($posterity_a13)){
			$custom_sidebars = false;
		}
		else{
			$custom_sidebars = $posterity_a13->get_option( 'custom_sidebars' );
		}

		if($custom_sidebars === false ){
			$custom_sidebars = array();
		}
		else{
			$custom_sidebars = is_array($custom_sidebars)? $custom_sidebars : array($custom_sidebars);
		}
		$sidebars_count  = count( $custom_sidebars );
		if ( is_array( $custom_sidebars ) && $sidebars_count > 0 ) {
			foreach ( $custom_sidebars as $sidebar ) {
				$widget_areas[ $sidebar['id'] ] = array(
					'name'        => $sidebar['name'],
					'description' => esc_html__( 'Widgets from this sidebar will appear in static pages.', 'posterity' ),
				);
			}
		}

		/**
		 * Register widgets areas
		 */
		foreach ( $widget_areas as $id => $sidebar ) {
			register_sidebar( array(
				'name'          => $sidebar['name'],
				'id'            => $id,
				'description'   => $sidebar['description'],
				'before_widget' => ( isset( $sidebar['before_widget'] ) ? $sidebar['before_widget'] : '<div id="%1$s" class="widget %2$s">' ),
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="title"><span>',
				'after_title'   => '</span></h3>',
			) );
		}
	}
}

add_action( 'widgets_init', 'posterity_add_sidebars' );
