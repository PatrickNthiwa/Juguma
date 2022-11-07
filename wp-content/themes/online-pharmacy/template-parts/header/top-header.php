<?php 
/*
* Display Logo and contact details
*/
?>

<div class="top-header py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-6 align-self-center">
        <?php if( get_theme_mod( 'online_pharmacy_phone_number' ) != '') { ?>
          <span><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('online_pharmacy_phone_number','')); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'online_pharmacy_email_address' ) != '') { ?>
          <span class="ml-3"><i class="far fa-envelope mr-2"></i><?php echo esc_html( get_theme_mod('online_pharmacy_email_address','')); ?></span>
        <?php } ?>
      </div>
      <div class="col-lg-3 col-md-4 col-8 align-self-center">
        <div class="media-links text-md-right">
          <?php if( get_theme_mod( 'online_pharmacy_facebook_url' ) != '' || get_theme_mod( 'online_pharmacy_twitter_url' ) != '' || get_theme_mod( 'online_pharmacy_instagram_url' ) != '' || get_theme_mod( 'online_pharmacy_youtube_url' ) != '' || get_theme_mod( 'online_pharmacy_pint_url' ) != '') { ?>
            <?php if( get_theme_mod( 'online_pharmacy_facebook_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'online_pharmacy_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'online_pharmacy_twitter_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'online_pharmacy_twitter_url','' ) ); ?>"><i class="fab fa-twitter mr-3"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'online_pharmacy_instagram_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'online_pharmacy_instagram_url','' ) ); ?>"><i class="fab fa-instagram mr-3"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'online_pharmacy_youtube_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'online_pharmacy_youtube_url','' ) ); ?>"><i class="fab fa-youtube mr-3"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'online_pharmacy_pint_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'online_pharmacy_pint_url','' ) ); ?>"><i class="fab fa-pinterest"></i></a>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-1 col-md-2 col-4 align-self-center">
        <?php if( get_theme_mod( 'online_pharmacy_my_account_link' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod('online_pharmacy_my_account_link','')); ?>"><i class="far fa-user mr-3"></i></a>
        <?php } ?>
        <?php if(class_exists('woocommerce')){ ?>
          <span class="cart_no infotext">
            <?php global $woocommerce; ?>
            <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','online-pharmacy' ); ?>"><i class="fas fa-shopping-bag"></i></a>
            <span class="cart-value simplep"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()));?></span>
          </span>
        <?php }?>
      </div>
    </div>
  </div>
</div>