
<?php get_header(); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-9 py-3">    
                <?php
                $args = array(
                    'post_type'                 => 'post',
                    'posts_per_page'            => 8,
                    'meta_query'                => array(
                        'relation'              => 'AND', 
                        array(
                            'key'               => 'size', 
                            'value'             => 'big', 
                            'compare'           => '=', 

                        ), 
                         
                        array(
                            'key'               => 'price', 
                            'value'             => 460, 
                            'compare'           => '>', 
                        ), 
                     
                    )
              
                );
                    $query = new WP_Query($args); 
                    while($query -> have_posts()){
                        $query -> the_post();
                     ?>  
                     <h3 class="py-2 "><?php the_title(); ?></h3>  
                     <p class="py-2 ">Price: <?php the_field('price'); ?></p>  
                     <p class="py-2 ">Color: <?php the_field('color'); ?></p>  
                     <p class="py-2 ">Size: <?php the_field('size'); ?></p>  
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
