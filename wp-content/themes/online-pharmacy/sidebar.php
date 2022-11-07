<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */
?>

<aside id="theme-sidebar" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'online-pharmacy' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>