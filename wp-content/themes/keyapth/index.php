
<?php get_header(); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-9">    
                <?php while ( have_posts() ) : the_post(); 
                    get_template_part('template-parts/content'); 
                 endwhile; ?>
            </div>

            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
<?php get_footer(); ?>
