<?php
global $posterity_a13;

$variant         = $posterity_a13->get_option( 'header_horizontal_variant' );

$header_content_width = $posterity_a13->get_option( 'header_content_width' );
$header_width = ' ' . $header_content_width;
if($header_content_width === 'narrow' && $posterity_a13->get_option( 'header_content_width_narrow_bg') === 'on' ){
	$header_width .= ' narrow-header';
}

$header_classes = 'to-move a13-horizontal header-type-one_line a13-'.posterity_horizontal_header_color_variant().'-variant header-variant-' . $variant . $header_width;

$menu_on        = $posterity_a13->get_option( 'header_main_menu' ) === 'on';
$socials        = $posterity_a13->get_option( 'header_socials' ) === 'on';

$icons_no     = 0;
$header_tools = posterity_get_header_toolbar( $icons_no );
if ( ! $icons_no ) {
	$header_classes .= ' no-tools';
} else {
	$header_classes .= ' tools-icons-' . $icons_no; //number of icons
}

//how sticky version will behave
$header_classes .= ' '.$posterity_a13->get_option( 'header_horizontal_sticky' );

//hide until it is scrolled to
$show_header_at = $posterity_a13->posterity_get_meta('_horizontal_header_show_header_at' );
if(strlen($show_header_at) && $show_header_at > 0){
	$header_classes .= ' hide-until-scrolled-to';
}

?>
<header id="header" class="<?php echo esc_attr( $header_classes ); ?>"<?php posterity_schema_args( 'header' ); ?>>
	<div class="head">
		<div class="logo-container"<?php posterity_schema_args('logo'); ?>><?php posterity_header_logo(); ?></div>
		<nav id="access" class="navigation-bar"<?php posterity_schema_args('navigation'); ?>><!-- this element is need in HTML even if menu is disabled -->
			<?php if ( $menu_on ): ?>
				<?php posterity_header_menu(); ?>
			<?php endif; ?>
		</nav>
		<!-- #access -->
		<?php echo wp_kses_post($header_tools );//escaped layout part ?>
		<?php if ( $socials ) {
			//check what color variant we use
			$color_variant = posterity_horizontal_header_color_variant();
			$color_variant = $color_variant === 'normal' ? '' : '_'.$color_variant;

			//escaped on creation
			echo posterity_social_icons( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				$posterity_a13->get_option( 'header'.$color_variant.'_socials_color' ),
				$posterity_a13->get_option( 'header'.$color_variant.'_socials_color_hover' ),
				'',
				$posterity_a13->get_option( 'header_socials_display_on_mobile' ) === 'off'
			);
		} ?>
	</div>
    <?php echo posterity_header_search(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
</header>