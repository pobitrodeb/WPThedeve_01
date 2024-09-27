
<?php get_header(); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-9 py-3">    
                <?php
                $args = array(
                    'post_type'             => 'post',
                    'posts_per_page'        => 5, 
                    'meta_compare'          => '=', 
                    'meta_value'            => '3', 
                    'meta_key'              => 'order'
                );
                $query = new WP_Query($args); 

                    while($query -> have_posts()){
                        $query -> the_post();
                     ?>  
                     <li class="py-2 "><?php the_title(); ?></li>  
                     <?php
                     } 
                ?>
            </div>

            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
<?php get_footer(); ?>
