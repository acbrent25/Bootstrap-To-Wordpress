<div class="entry clearfix">
   <div class="entry-image">
      <?php 
         if( has_post_thumbnail() ) {
           ?>
      <a href="<?php the_permalink() ?>" data-lightbox="image">
      <?php the_post_thumbnail( 'full', array( 'class' => 'image_fade' ) ); ?>
      </a>
      <?php
         }
         ?>
   </div>
   <div class="entry-title">
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
   </div>
   <ul class="entry-meta clearfix">
      <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
      <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><i class="icon-user"></i> <?php the_author() ?></a></li>
      <li><i class="icon-folder-open"></i> <?php the_category( ' ' ); ?></li>
      <li><a href="<?php the_permalink() ?>#comments"><i class="icon-comments"></i> <?php comments_number( '0' ) ?></a></li>
   </ul>
   <div class="entry-content">
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink() ?>" class="more-link">Read More</a>
   </div>
</div>