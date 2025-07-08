<?php 
//Query Post
global $post;
$args = array(
    'post__not_in'         => array( $post->ID ),
    'posts_per_page'       => ( get_field( 'number_of_posts', 'options' ) )? get_field( 'number_of_posts', 'options' ) : '4',
    'ignore_sticky_posts'  => 1,
    'post_type'            => 'post'
);

// by category
$categories = wp_get_post_terms( $post->ID, 'category' );
if ( $categories ) {
    $category_ids = array();
    foreach( $categories as $individual_category )
        $category_ids[] = $individual_category->term_id;
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'     => $category_ids
            )
        );
}

$my_query = new wp_query( $args );

if( $my_query->have_posts()):
?>
<!-- Post Area Start -->
<section class="content-area pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
            <div class="text-md-start text-center section_heading">
                    <div class="row">
                        <div class="col-md-6">
                        <?php if( $heading = get_field( 'related_heading', 'options' ) ): ?>
                            <h3 class="h1"><?php echo $heading ?> </h3>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                <?php 
            
            echo '<div class="blog-slider">';
            
                while( $my_query->have_posts() ):
                    $my_query->the_post();	
                    ?>

                    <a href="<?php the_permalink(); ?>"  data-aos="fade-up"  class="post-item">
                    <div class="row align-items-lg-center">
                        <div class="col-md-5">
                        <?php 

                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  
                            //Feature Image
                            if( $featured_img_url ):
                                echo '<div class="post-image"><img src="'. $featured_img_url .'" alt="post 1" /></div>';
                            endif;
                        ?>
                        </div>
                        <div class="col-md-6 ms-auto">
                        <?php 
                                //Title
                                the_title( '<h4 class="h5 title">', '</h4>' );
                                
                                //Excerpt
                                the_excerpt();
                                
                                echo '<span class="entry-date  d-block">'. get_the_date('d M Y').'</span>';
                                //Button
                                echo '<div class="post-action cta-btn btn_default">READ MORE</div>';
                            ?>
                        </div>
                        
                    </div>
                    </a>

                    
                    <?php
                endwhile;
                
            //Wrapper End
            echo '</div>';
        ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;