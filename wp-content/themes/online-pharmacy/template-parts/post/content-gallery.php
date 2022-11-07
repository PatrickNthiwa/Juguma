<?php
/**
 * Template part for displaying posts
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-box row">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the gallery.
        if ( get_post_gallery() ) {
          echo '<div class="entry-gallery">';
            echo ( get_post_gallery() );
          echo '</div>';
        };
      };
    ?>
    <div class="box-content">
      <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
      <div class="box-info">
        <?php if(get_theme_mod('online_pharmacy_remove_date',true) != ''){ ?>
          <i class="far fa-calendar-alt"></i><span class="entry-date"><?php the_date(); ?></span>
        <?php }?>
        <?php if(get_theme_mod('online_pharmacy_remove_author',true) != ''){ ?>
          <i class="fas fa-user"></i><span class="entry-author"><?php the_author(); ?></span>
        <?php }?>
        <?php if(get_theme_mod('online_pharmacy_remove_comments',true) != ''){ ?>
          <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','online-pharmacy'), __('0 Comments','online-pharmacy'), __('% Comments','online-pharmacy') ); ?></span>
        <?php }?>
      </div>
      <p><?php $excerpt = get_the_excerpt(); echo esc_html( online_pharmacy_string_limit_words( $excerpt, esc_attr(get_theme_mod('online_pharmacy_excerpt_count','35')))); ?></p>
      <?php if(get_theme_mod('online_pharmacy_remove_read_button',true) != ''){ ?>
        <div class="readmore-btn">
          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'online-pharmacy' ); ?>"><?php echo esc_html(get_theme_mod('online_pharmacy_read_more_text',__('Read More','online-pharmacy')));?></a>
        </div>
      <?php }?>
    </div>
      <div class="clearfix"></div>
  </div>
</article>