<?php
if( isset( $block['data']['preview_image'] )  ) :    /* rendering in inserter preview  */

	echo '<img src="'. $block['data']['preview_image'] .'" style="width:100%; height:auto;">';
	echo '<img src="'. $block['data']['preview_image2'] .'" style="width:100%; height:auto;">';

else : /* rendering in editor body */
    ?>


<?php 
    $shapeClass = array();
    if( $shape = get_field( 'background_shape' ) ):
        $shapeClass[] = 'bg_area';
    endif;
?>

<?php 
    $alignShape = array();
    if( 'v2' == get_field( 'shape_alignment' ) ):
        $alignShape[] = 'bg2';
    elseif ( 'v1' == get_field( 'shape_alignment' ) ):
        $alignShape[] = 'bg1';
    endif;
?>
<section class="content-area pt-0 <?php echo join( ' ', $shapeClass ); ?>">
    <div class="container">
    <?php $background_shape = get_field( 'background_shape' ); ?>
        <?php if ( $background_shape ) : ?>
            <img class="<?php echo join( ' ', $alignShape ); ?>" src="<?php echo esc_url( $background_shape['url'] ); ?>" alt="<?php echo esc_attr( $background_shape['alt'] ); ?>" />
        <?php endif; ?>
        <div class="row">
            <div class="col-xxl-11 mx-auto">
                <div class="text-md-start text-center section_heading">
                    <div class="row">
                        <div class="col-md-6">
                        <?php if( $sub_heading = get_field( 'sub_heading' ) ): ?>
                            <span class="d-block sub_heading"><?php echo $sub_heading ?> </span>
                        <?php endif; ?>

                        <?php if( $heading = get_field( 'heading' ) ): ?>
                            <h3 class="h1"><?php echo $heading ?> </h3>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-10 mx-auto">
                    <?php
                        if( 'Chosen' == get_field( 'blog_display_by' ) ):
                            
                            $post_objects = get_field( 'news' );
                            if ( $post_objects ):
                            
                                echo '<div class="blog-slider">';
                                
                                    foreach ( $post_objects as $post ): 
                                        /* grab the url for the full size featured image */
                                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full' ); 
                                        ?>
                                            <a  data-aos="fade-up" href="<?php echo get_the_permalink($post->ID); ?>" class="post-item">
                                            <div class="row align-items-lg-center">
                                                <div class="col-md-5 col-sm-6">
                                                    <?php 
                                                        //Feature Image
                                                        if( $featured_img_url ):
                                                            echo '<div class="post-image"><img src="'. $featured_img_url .'" alt="post 1" /></div>';
                                                        endif;
                                                    ?>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ms-auto">
                                                    <div class="post-desc">
                                                        <?php 
                                                            //Title
                                                            echo '<h4 class="h5 title">'.get_the_title($post->ID).'</h4>';
                                                            
                                                            //Excerpt
                                                            echo '<p>'.get_the_excerpt($post->ID).'</p>';
                                                            echo '<span class="entry-date d-block">'. get_the_date('d M Y').'</span>';
                                                            //Button
                                                            echo '<div class="post-action cta-btn btn_default">READ MORE</div>';
                                                        ?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </a>
                                        <?php
                                    endforeach;
                                    wp_reset_postdata();
                                
                                echo '</div>';
                                
                            endif;
                            
                        else:
                        
                            // the query
                            $category_ids = get_field( 'category' );
                            if( $category_ids ):
                                $args = array(
                                    'post_status' => 'publish',
                                    'posts_per_page' => ( get_field( 'number_of_posts' ) )? get_field( 'number_of_posts' ) : '-1',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'term_id',
                                            'terms'    => $category_ids
                                        ),
                                    ),
                                );
                            else:
                                $args = array(
                                    'post_status' => 'publish',
                                    'posts_per_page' => ( get_field( 'number_of_posts' ) )? get_field( 'number_of_posts' ) : '-1',
                                );
            
                            endif;
                            
                            $the_query = new WP_Query( $args ); 
                            
                            if( $the_query->have_posts() ):
                                echo '<div class="blog-slider">';
                                
                                while( $the_query->have_posts() ):
                                    $the_query->the_post();
                                    /* grab the url for the full size featured image */
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="post-item">
                                            <div class="row align-items-lg-center">
                                                <div class="col-md-5">
                                                <?php 
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
                                wp_reset_postdata();
                                
                                echo '</div>';
                            endif;
                    endif;
                    
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    

    <?php
endif;