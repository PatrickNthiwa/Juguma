<?php
/**
 * Template part for displaying slider section
 *
 * @package Online Pharmacy
 * @subpackage online_pharmacy
 */

?>

<?php if( get_theme_mod( 'online_pharmacy_slider_arrows') != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
    <?php $online_pharmacy_slide_pages = array();
      for ( $count = 1; $count <= 4; $count++ ) {
        $mod = intval( get_theme_mod( 'online_pharmacy_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $online_pharmacy_slide_pages[] = $mod;
        }
      }
      if( !empty($online_pharmacy_slide_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $online_pharmacy_slide_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2><?php the_title(); ?></h2>
              <p class="mb-0"><?php $excerpt = get_the_excerpt(); echo esc_html( online_pharmacy_string_limit_words( $excerpt,20 ) ); ?></p>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','online-pharmacy'); ?></a>
              </div>
              <?php if( get_theme_mod( 'online_pharmacy_phone_number' ) != '') { ?>
                <div class="call-info mt-5">
                  <span><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('online_pharmacy_phone_number','')); ?></span>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section> 

<?php } ?>