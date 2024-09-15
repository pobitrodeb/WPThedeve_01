
<?php get_header(); ?>
      <div class="container">
        <div class="row">
      <div class="col-md-9">
        <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?> 

                        <!-- <?php the_title('<h1>', '</h1>'); ?>  -->
                        <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
                        <p> <?php the_content(); ?> </p>
                        <!-- <p> <?php the_excerpt(); ?> </p> -->
                        <?php
                        //
                        // Post Content here
                        //
                    } // end while
                } // end if
            ?>
      </div>
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
        </div>
      </div>
<?php get_footer(); ?>
