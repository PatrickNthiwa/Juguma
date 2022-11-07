<?php
/**
 * Template used for displaying content of post/page on archive page.
 * It is used only on page with posts list: blog, archive, search
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

global $posterity_a13, $post;

?>

<div class="formatter">
    <div class="real-content<?php echo 'post' === get_post_type()? ' hentry' : ''; ?>">

        <?php
        posterity_post_meta_data();

        the_title('<h2 class="post-title entry-title"'.posterity_get_schema_args('headline').'><a href="'. esc_url(get_permalink()) . '"'.posterity_get_schema_args('url').'>', '</a></h2>');
        ?>

        <div class="entry-summary"<?php posterity_schema_args('text'); ?>>
        <?php
        $add_read_more = $posterity_a13->get_option( 'blog_read_more', 'on' ) === 'on';

        if($posterity_a13->get_option( 'blog_excerpt_type') == 'auto'){
            if(strpos($post->post_content, '<!--more-->')){
                the_content( $add_read_more ? esc_html__( 'Read more', 'posterity' ) : '' );
            }
            else{
                the_excerpt();
            }
        }
        //manual post cutting
        else{
            the_content( $add_read_more ? esc_html__( 'Read more', 'posterity' ) : '' );
        }
        ?>
        </div>

        <div class="clear"></div>

        <?php posterity_under_post_content(); ?>
        
    </div>
</div>