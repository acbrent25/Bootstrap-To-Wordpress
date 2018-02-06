<!-- Sidebar
============================================= -->
<div class="sidebar nobottommargin col_last clearfix">
  <div class="sidebar-widgets-wrap">
    <?php 
      if( is_active_sidebar( 'ac_sidebar_1' )) {
        dynamic_sidebar( 'ac_sidebar_1' );
      }
    ?>
  </div>
</div><!-- .sidebar end -->