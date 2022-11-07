<?php
/**
 * TGMPA plugin installer config
 */
function posterity_register_required_plugins() {
	/**
	 * Array of configuration settings. Amend each line as needed.
	 */

	tgmpa(
		array(
			array(
				'name'               => esc_html__( 'SKT Templates – Elementor & Gutenberg templates', 'posterity' ),
				'slug'               => 'skt-templates',
				'required'           => false,
				'version'            => POSTERITY_MIN_COMPANION_VERSION,
				'force_activation'   => false,
				'force_deactivation' => false,
			)
		)
	);
}


add_action('tgmpa_register', 'posterity_register_required_plugins');