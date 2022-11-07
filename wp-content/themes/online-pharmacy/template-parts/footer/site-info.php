<?php
/**
 * Displays footer site info
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

?>
<div class="site-info">
	<div class="container">
		<p><?php online_pharmacy_credit(); ?> <?php echo esc_html(get_theme_mod('online_pharmacy_footer_text',__('By ThemesPride','online-pharmacy'))); ?></p>
	</div>
</div>