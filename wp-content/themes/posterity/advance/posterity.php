<?php
class Posterity_Main_Framework{
	function __construct(){
		//get Posterity Universal first so it could fire its actions first
		/** @noinspection PhpIncludeInspection */
 		get_template_part('advance/posterity_uni');
		add_action( 'customize_register', array( $this, 'customizer_pro_section' ) );

		if(is_admin()){
			//check on what page we are
			$current_page = isset( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : '';
			$current_subpage = isset( $_GET['subpage'] ) ? sanitize_text_field( wp_unslash( $_GET['subpage'] ) ) : '';

			//always registered in admin
			add_filter( 'posterity_is_import_allowed', array( $this, 'is_import_allowed' ) );
			add_action( 'posterity_theme_notices', array( $this, 'rating_notice' ) );
			add_action( 'init', array( $this, 'import_notice_check' ), 9 );

			//only for import design page
			if( $current_page === 'posterityinfopage' && $current_subpage === 'import' ){
				add_action( 'admin_enqueue_scripts', array( $this, 'designs_import_inline_style' ), 28 );
			}
		}
	}

	function is_import_allowed(){
		return true;
	}


	function designs_import_inline_style(){
		$css = '
.demo_grid_item[data-categories~=pro] img{
    opacity: .2;
	transition: opacity 0.3s ease;
}
.demo_grid_item[data-categories~=pro]:hover img{
    opacity: 1;
}
.demo_grid_item.open img{
    opacity: 1;
	transition: none;
}
.top_bar_button.try-button {
    right: 20px;
}';
		wp_add_inline_style( 'posterity-admin-css', posterity_minify_css( $css ) );
	}
	
	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function customizer_pro_section( $manager ) {

		// Load custom section.
		get_template_part('advance/inc/customizer/sections/posterity-class-a13-customize-section-pro');

		// Register custom section types.
		$manager->register_section_type( 'Posterity_A13_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Posterity_A13_Customize_Section_Pro(
				$manager,
				'posterity-pro-theme',
				array(
					'title'    => esc_html__( 'Upgrade to Pro', 'posterity' ),
					'pro_text' => esc_html__( 'Upgrade',         'posterity' ),
					'pro_url'  => 'https://www.sktthemes.org/shop/flexible-wordpress-theme/',
					'priority' => 0
				)
			)
		);
	}	

	function rating_notice(){
		$display_rating_notice = true;
		$option_name = 'a13_'.POSTERITY_TPL_SLUG.'_rating';
		$rating_option = get_option( $option_name );

		if($rating_option !== false){
			//we have date saved
			if($rating_option !== 'disabled'){
				$now = time();
				//days that passed since last time we displayed rating notice
				$days = floor(($now - $rating_option) / (60 * 60 * 24));

				//less then 2 weeks?
				if($days < 14){
					$display_rating_notice = false;
				}
			}
			//message have been disabled
			else{
				$display_rating_notice = false;
			}
		}
		//they have just installed theme, lets give them a week before asking for rating
		else{
			update_option( $option_name, time() );
			$display_rating_notice = false;
		}

		if($display_rating_notice){
			echo '<div class="notice notice-info is-dismissible rating-notice">';

			//text
			echo '<p>'.esc_html__( 'Thank you for using Posterity theme, we hope everything is working good for you.', 'posterity' ).'</p>';
			echo '<p>'.esc_html__( 'If you have a spare 2 minutes please rate Posterity theme. If not, no big deal, just keep on rocking :-)', 'posterity' ).'</p>';
			echo '<p>'.esc_html__( 'SKT Themes', 'posterity' ).'</p>';

			//links
			echo '<p class="links">';
			/** @noinspection HtmlUnknownAnchorTarget */
			echo '<a href="#remind-later" target="_blank">'.esc_html__( 'Maybe later&#8230;(hide for 7 days)', 'posterity' ).'</a> | ';
			/** @noinspection HtmlUnknownAnchorTarget */
			echo '<a href="#disable-rating" target="_blank">'.esc_html__( 'Do not show this notification again', 'posterity' ).' <i class="fa fa-times" aria-hidden="true"></i></a>';

			echo '</p>';

			echo '</div>';
		}
	}

	function import_notice_check(){
		$plugin_path = 'skt-templates/skt-templates.php';
		include_once ABSPATH . 'wp-admin/includes/plugin.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		if ( is_plugin_active( $plugin_path ) ){
			return;
		}

		if( !posterity_is_admin_notice_active( 'fresh_import' ) ){
			return;
		}

		remove_action('tgmpa_register', 'posterity_register_required_plugins');
		add_action( 'posterity_theme_notices', array( $this, 'import_notice' ) );
 	}

	function import_notice(){
		echo '<div class="a13fe-admin-notice notice notice-warning is-dismissible" data-notice_id="fresh_import">';
		/* translators: %s: Theme name */
		echo '<h3>'.sprintf( esc_html__( 'Welcome to %s Theme', 'posterity' ), esc_html(POSTERITY_OPTIONS_NAME_PART )).'</h3>';
		echo '<p>'.esc_html__( 'Click on the button below to complete theme installation process..', 'posterity' ).'</p>';
		echo '<p><a class="button button-primary" href="'.esc_url( admin_url( 'themes.php?page=posterityinfopage&amp;subpage=info' ) ).'">'.esc_html__( 'Complete Installation', 'posterity').'</a></p>';
		echo '</div>';
	}
}

//run
new Posterity_Main_Framework();