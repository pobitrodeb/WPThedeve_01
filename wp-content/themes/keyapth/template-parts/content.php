<article class="<?php post_class(); ?>" id="<?php the_ID(); ?>">

  <?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php the_post_thumbnail('medium'); ?>
	</a>
    <?php endif; ?>
   <h3>  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
   <p>Posted: <?php the_date('F j, Y') ?> at <?php the_time('g:i a') ?> | Cagetory: <?php the_category(',  '); ?> | Author: <?php the_author(); ?>  </p>
    <!-- <?php the_content(); ?> -->
    <?php
        if( is_single()){
            the_content(); 
        }else {
            the_excerpt(); 
        }
    ?>
   
</article>