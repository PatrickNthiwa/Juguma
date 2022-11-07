<?php
function posterity_sktwb_info() {
	posterity_theme_pages_header();

	global $posterity_a13;
	echo '<h2>'.esc_html__( 'What\'s next?', 'posterity' ).'</h2>';
	//check for companion plugin
	if( posterity_is_companion_plugin_ready( esc_html__( 'This Theme requires an additional plugin before you will be able to use it. ', 'posterity' ) ) ){
		echo '<p class="import_text">'.esc_html__( 'Import your Posterity Template to complete the installation.', 'posterity' ).
		     ' <a class="button import_button" href="'.esc_url( admin_url( 'admin.php?page=skt_template_directory' ) ).'">'.esc_html__( 'Go to SKT Templates', 'posterity').'</a>'.
		     '</p>';

		echo '<p>'.esc_html__( 'Posterity theme options help you with making your site beautiful.', 'posterity' ).
		     ' <a class="button" href="'.esc_url( admin_url( 'customize.php') ).'">'.esc_html__( 'Go to Customizer', 'posterity').'</a>'.
		     '</p>';
	}

	posterity_theme_pages_footer();
}

function posterity_sktwb_help() {
	posterity_theme_pages_header();
	global $posterity_a13;
	?>

	<h2><?php echo esc_html__( 'Where to get help?', 'posterity' ); ?></h2>

	<h3 class="center"><a href="<?php echo esc_url('https://www.sktthemesdemo.net/documentation/posterity-doc');?>" target="_blank"><?php echo esc_html__( 'Online Documentation', 'posterity' ); ?></a></h3>
	<p><?php echo
		esc_html__( 'Online documentation is always most up to date if it comes to explaining how to work with the theme. It will come handy as the first source when you are trying to work out problematic topics.', 'posterity' );
		?></p>

	<h2><?php echo esc_html__( 'Theme requirements:', 'posterity' ); ?></h2>
	<div class="feature-section one-col">
		<div class="col">
			<?php posterity_theme_requirements_table(); ?>
		</div>
	</div>

	<?php
	posterity_theme_pages_footer();
}

function posterity_theme_pages_header(){
	if(!current_user_can('install_plugins')){
		wp_die(esc_html__('Sorry, you are not allowed to access this page.', 'posterity'));
	}
	$pages = array(
		'info' => esc_html__( 'Info', 'posterity' ),
		'help' => esc_html__( 'Get Help', 'posterity' ),
	);

	//check for current tab
	$current_subpage = isset( $_GET['subpage'] ) ? sanitize_text_field( wp_unslash( $_GET['subpage'] ) ) : 'info';
?>
<div class="wrap sktwb-page <?php echo esc_attr( $current_subpage ); ?> about-wrap">
	<h1><?php
		/* translators: %s: Theme name */
		echo sprintf( esc_html__( 'Welcome to %s Theme', 'posterity' ), esc_html( POSTERITY_OPTIONS_NAME_PART ) );
		?></h1>

	<div class="about-text">
		<?php echo esc_html__( 'Thanks for using Posterity! We are glad that you have decided to use posterity theme. We hope it will help you with making your site beautiful!', 'posterity' ); ?><br />
	</div>
	<h2 class="nav-tab-wrapper wp-clearfix">
		<?php
		foreach($pages as $subpage => $title){
			$query_args = array(
				'page' => 'posterityinfopage',
				'subpage' => $subpage
			);

			$is_current = $current_subpage === $subpage;

			echo '<a href="'.esc_url( add_query_arg( $query_args, admin_url( 'themes.php') ) ).'" class="nav-tab'.esc_attr( $is_current ? ' nav-tab-active' : '').'">'.esc_html( $title ).'</a>';
		}
		?>
	</h2>
	<?php
}

function posterity_theme_pages_footer(){
	echo '</div>';
}

function posterity_importer_grid_item($files_directory, $demo ){
	$current_item_categories = '';
	foreach ( $demo['categories'] as $category ) {
		$current_item_categories .= str_replace( ' ', '_', strtolower( $category ) ) . ' ';
	}

	echo '<div class="demo_grid_item" '.
	     'data-main_category="' . esc_attr( str_replace( ' ', '_', strtolower( implode( '|', $demo['categories'] ) ) ) ) . '" '.
	     'data-categories="' . esc_attr( $current_item_categories . ' ' . strtolower( $demo['name'] ) ) . '"'.
	     'data-full="' . esc_url( $files_directory . 'full.jpg' ) . '"'.
	     'data-id="' . esc_attr( $demo['id'] ) . '"'.
	     'data-name="' . esc_attr( $demo['name'] ) . '"'.
	     '>';
	echo '<div>';
	echo '<img class="thumb" src="' . esc_url( $files_directory . 'thumb.jpg' ).'">';
	echo '<div class="demo_grid_item_title" style="'. esc_attr( 'background-color:'.$demo['background'].';color:'.$demo['font_color'].';' ) .'">' . esc_html( implode( ' ', $demo['categories'] ) ) . '</div>';

	echo '<div class="action-bar">';
		echo '<a class="button demo-preview" href="' . esc_url( $demo['demo_url'] ) . '" target="_blank">' .
		     esc_html__( 'Live preview', 'posterity' ) . '</a>'.
		     '<span class="a13_demo_name">' . esc_html( $demo['name'] ) .'</span>';
	if( in_array( 'pro', array_map( 'strtolower', $demo['categories'] ) ) ){
		$query_args = array(
			'page' => 'posterityinfopage'
		);
	}
	else{
		echo '<button class="button button-primary demo-select" data-demo-id="' . esc_attr( $demo['id'] ) . '">' . esc_html__( 'Choose & move to next step', 'posterity' ) . '</button>';
	}
	echo '</div>';//end .action-bar

	echo '</div>';//end .demo_grid_item > div
	echo '</div>';//end .demo_grid_item
}
