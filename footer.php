	<!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

<!-- Copyrights
    ============================================= -->
<div id="copyrights">

  <div class="container clearfix">
    
    <div class="col_half">
      <?php echo get_theme_mod('ac_footer_copyright_text'); ?><br>
      
      <div class="copyright-links">
        <?php if(get_theme_mod( 'ac_footer_tos_page' )){ ?>
          <a href="<?php the_permalink( get_theme_mod( 'ac_footer_tos_page' ) ); ?>">Terms of Use</a>
        <?php } ?> /
        
        <?php if(get_theme_mod( 'ac_footer_privacy_page' )){ ?>
          <a href="<?php the_permalink( get_theme_mod( 'ac_footer_privacy_page' ) ); ?>">Privacy Policy</a>
        <?php } ?>
      </div>
    </div>

   
   

    <div class="col_half col_last tright">
      <div class="fright clearfix">
        <?php if( get_theme_mod( 'ac_facebook_handle' )) { ?>
          <a href="https://www.facebook.com/<?php echo get_theme_mod( 'ac_facebook_handle' ); ?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
        <?php } ?>
          <i class="icon-facebook"></i>
          <i class="icon-facebook"></i>
        </a>

        <?php if( get_theme_mod( 'ac_facebook_handle' )) { ?>
          <a href="https://www.twitter.com/<?php echo get_theme_mod( 'ac_twitter_handle' ); ?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
        <?php } ?>
          <i class="icon-twitter"></i>
          <i class="icon-twitter"></i>
        </a>

      </div>

      <div class="clear"></div>

      <?php if( get_theme_mod( 'ac_email' )) { ?>
        <i class="icon-envelope2"></i> <a href="mailto:<?php echo get_theme_mod( 'ac_email' ) ?>" class="si-email3"></i></span><span class="ts-text">adamchampagne@gmail.com</span> <span class="middot">&middot;</span></a>
      <?php } ?>
      
      <?php if( get_theme_mod( 'ac_phone_number' )) { ?>
        <i class="icon-headphones"></i> <a href="tel:<?php echo get_theme_mod( 'ac_phone_number' ) ?>">732.407.7772</span></a>
      <?php } ?>
      
      
    </div>

  </div>

</div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>


<?php wp_footer(); ?>

</body>
</html>