<?php
/**
 * Functions that operates in themes footer element
 */

if(!function_exists('posterity_theme_footer')){
	function posterity_theme_footer(){
		global $posterity_a13;

		//Header Footer Elementor Plugin support
		if ( function_exists( 'hfe_render_footer' ) ) {
			hfe_render_footer();
		}

		if( $posterity_a13->get_option( 'footer_switch', 'on' ) === 'off' ){
			//no theme footer
			return;
		}

		if ( function_exists( 'elementor_location_exits' ) && elementor_location_exits( 'footer', true ) ) {
			echo '<div class="container-elementor-footer">';
		}


		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {


			$html = '';

			ob_start();
			posterity_footer_widgets();
			posterity_footer_items();

			$output = ob_get_contents();
			ob_end_clean();

			if(strlen($output)){
				$header_type = $posterity_a13->get_option( 'header_type' );
				$to_move     = $header_type === 'vertical' ? '' : 'to-move';
				$width       = ' ' . $posterity_a13->get_option( 'footer_content_width' );
				$style       = ' ' . $posterity_a13->get_option( 'footer_content_style' );
				$separator   = $posterity_a13->get_option( 'footer_separator' ) === 'on' ? ' footer-separator' : '';

				$footer_class = $to_move.$width.$style.$separator;
				$html = '<footer id="footer" class="'.esc_attr($footer_class).'"'.posterity_get_schema_args('footer').'>'.$output.'</footer>';
			}

			//escaped on creation
			print $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}


		if ( function_exists( 'elementor_location_exits' ) && elementor_location_exits( 'footer', true ) ) {
			echo '</div>';//.container-elementor-footer
		}
	}
}


function posterity_footer_css() {
	global $posterity_a13;

	$css = '';

	if ( $posterity_a13->get_option( 'footer_switch' ) === 'on' ) {
		$footer_bg_color          = posterity_make_css_rule( 'background-color', $posterity_a13->get_option_color_rgba( 'footer_bg_color' ) );
		$footer_lower_bg_color    = posterity_make_css_rule( 'background-color', $posterity_a13->get_option_color_rgba( 'footer_lower_bg_color' ) );
		$footer_font_size         = posterity_make_css_rule( 'font-size', $posterity_a13->get_option( 'footer_font_size' ), '%spx' );
		$footer_widgets_font_size = posterity_make_css_rule( 'font-size', $posterity_a13->get_option( 'footer_widgets_font_size' ), '%spx' );
		$footer_font_color        = posterity_make_css_rule( 'color', $posterity_a13->get_option_color_rgba( 'footer_font_color' ) );
		$footer_link_color        = posterity_make_css_rule( 'color', $posterity_a13->get_option_color_rgba( 'footer_link_color' ) );
		$footer_hover_color       = posterity_make_css_rule( 'color', $posterity_a13->get_option_color_rgba( 'footer_hover_color' ) );
		$footer_separator_color   = posterity_make_css_rule( 'border-color', $posterity_a13->get_option_color_rgba( 'footer_separator_color' ) );

		$css .= "
/* ==================
   FOOTER
   ==================*/
#footer{
    $footer_bg_color
    $footer_font_size
}
#footer .widget,
#footer .widget .search-form input[type=\"search\"]{
    $footer_widgets_font_size
}
.foot-items{
    $footer_lower_bg_color
}
.footer-separator .foot-items .foot-content{
    $footer_separator_color
}
.foot-items{
    $footer_font_color
}
.foot-items .foot-text a{
    $footer_link_color
}
.foot-items .foot-text a:hover{
    $footer_hover_color
}";
	}

	return $css;
}

function posterity_footer_partial_css($response) {
	return posterity_prepare_partial_css($response, 'footer_switch', 'posterity_footer_css');
}
add_filter( 'customize_render_partials_response', 'posterity_footer_partial_css' );


if(!function_exists('posterity_footer_widgets')) {
	/**
	 * Prints out HTML for footer widgets in columns
	 */
	function posterity_footer_widgets() {
		global $posterity_a13;

		//is there any widgets
		if ( is_active_sidebar( 'footer-widget-area' ) ) {
			//class for widgets
			$_class = '';
			$columns = (int)$posterity_a13->get_option( 'footer_widgets_columns' );
			if ( $columns === 1 ) {
				$_class = ' one-col';
			} elseif ( $columns === 2 ) {
				$_class = ' two-col';
			} elseif ( $columns === 3 ) {
				$_class = ' three-col';
			} elseif ( $columns === 4 ) {
				$_class = ' four-col';
			} elseif ( $columns === 5 ) {
				$_class = ' five-col';
			}

			//color of sidebar
			$_class .= ' '.$posterity_a13->get_option( 'footer_widgets_color' );

			echo '<div class="foot-widgets' . esc_attr( $_class ) . '">';
                echo '<div class="foot-content clearfix">';

			dynamic_sidebar( 'footer-widget-area' );

			echo '</div>
                </div>';
		}
	}
}


if(!function_exists('posterity_footer_items')) {
	/**
	 * Prints out HTML for footer items
	 */
	function posterity_footer_items() {
		global $posterity_a13; ?>
			<div class="foot-items">
				<div class="foot-content clearfix">
	                <?php
	                footer_socials();
	                //footer text
	                $ft = do_shortcode( $posterity_a13->get_option( 'footer_text' ) );
	                $privacy = $posterity_a13->get_option( 'footer_privacy_link' ) === 'on';

					if(!empty($ft)){
		                echo '<div class="foot-text">';
		                echo nl2br( wp_kses_post( balanceTags( $ft, true ) ) );
		                if ( $privacy && function_exists( 'the_privacy_policy_link' ) ) {
			                the_privacy_policy_link( '<div class="test">', '</div>');
		                }
		                echo '</div>';
	                }

	                ?>
				</div>
			</div>
		<?php
	}
}


function footer_socials(){
	global $posterity_a13;
	if( $posterity_a13->get_option( 'footer_socials' ) === 'on' ){
		echo '<div class="f-links">';
		//posterity_social_icons() produces escaped content
		echo posterity_social_icons($posterity_a13->get_option( 'footer_socials_color' ), $posterity_a13->get_option( 'footer_socials_color_hover' )); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '</div>';
	}
}



if(!function_exists('posterity_footer_for_site_modules')) {
	/**
	 * Prints out HTML for elements needed to be printed after whole site
	 */
	function posterity_footer_for_site_modules() {
		global $posterity_a13;

		$to_top_off = $posterity_a13->get_option( 'to_top' ) === 'off';

		if( $to_top_off ){
			return;
		}

		$to_top_icon = $posterity_a13->get_option( 'to_top_icon' );
		$to_top_icon = 'fa-'.(strlen($to_top_icon)? $to_top_icon : 'chevron-up');

		//top top and overlay for various things ?>
		<a href="#top" id="to-top" class="to-top fa <?php echo esc_attr($to_top_icon); ?>"></a>
		<div id="content-overlay" class="to-move"></div>
		<?php
	}
}



if(!function_exists('posterity_footer_for_header_modules')) {
	/**
	 * Prints out HTML for elements used in header
	 */
	function posterity_footer_for_header_modules() {
		global $posterity_a13;

		//hidden sidebar
		if( is_active_sidebar( 'side-widget-area' ) ){
			$hidden_sb_classes = ' '.$posterity_a13->get_option( 'hidden_sidebar_widgets_color' );
			$hidden_sb_classes .= ' at-'.$posterity_a13->get_option( 'hidden_sidebar_side' );
		?>
		<nav id="side-menu" class="side-widget-menu<?php echo esc_attr($hidden_sb_classes) ?>">
			<div class="scroll-wrap">
				<?php dynamic_sidebar( 'side-widget-area' ); ?>
			</div>
			<span class="a13icon-cross close-sidebar"></span>
		</nav>
		<?php
		}


		//basket sidebar
		if( posterity_is_woocommerce_activated() && is_active_sidebar( 'basket-widget-area' ) ){
		?>
		<nav id="basket-menu" class="basket-sidebar">
			<?php dynamic_sidebar( 'basket-widget-area' ); ?>
			<span class="a13icon-cross close-sidebar"></span>
		</nav>
		<?php
		}
	}
}

