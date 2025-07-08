<section class="post-details-area">
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="post-details-inn">
                    <div class="post-details-title text-center">
                        <?php the_title( '<h1>', '</h1>' ); ?>
                    </div>
                    
                    <div class="post-meta">
                        <div class="post-meta-first">
                            <div class="post-author-image">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 70 ); ?>
                            </div>
                            <?php
                                printf( '<div class="post-author-info"><div class="title"><span>%s </span><a href="%s">%s</a></div><p>%s</p></div>', __( 'By:', 'SITENAME' ), esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), get_the_author(), SITENAME_get_author_role() );
                            ?>
                        </div>
                        <div class="post-meta-middle">
                            <?php
                            $output = '';
                            printf( '<div class="title-inn">%s</div><p>', __( 'Posted in:', 'SITENAME' ) );
                            
                            foreach((get_the_category()) as $category) {
                                $category_id = get_cat_ID( $category->cat_name );
                                $category_link = get_category_link( $category_id );

                                if(!empty($output))
                                    $output .= ', ';
                                $output .= '<span class="cat"><a href="'.$category_link.'">'.$category->cat_name.'</a></span>';
                            }
                            echo $output;
                            printf( '</p>');
                            
                            ?>                        
                        </div>
                        <div class="post-meta-last">
                            <div class="title-inn">Share Now!</div>
                            <ul>
                        <li class="fb"><a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print(urlencode($page_url)); ?>" title="Share on Facebook"><span class="fab fa-facebook-f"></span></a></li>
                        <li class="twitter"><a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php print(urlencode($page_url)); ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><span class="fab fa-twitter"></span></a></li>
                        <li class="linkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print(urlencode($page_url)); ?>&title=<?php print(urlencode($title)); ?>&summary=<?php echo $description; ?>&source=<?php bloginfo('url'); ?>" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                        <li class="email"><a href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>%20%20%3A%20%20<?php echo get_the_excerpt(); ?>%20%20%2D%20%20%28%20<?php the_permalink(); ?>%20%29" title="Email to a friend/colleague" target="_blank"><span class="fa fa-envelope"></span></a></li>
                    </ul>
                        </div>
                    </div>
                    <div class="post-details-inner">
                        <?php 
                            global $post;
                            $page_url = get_permalink($post->ID );
                            $title = $post->post_title;
                            $description = $post->post_excerpt;
                        ?>
                        <?php 
                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                            
                            if( $featured_img_url ):
                                echo '<div class="post-details-image"><img src="'. $featured_img_url .'" alt="post 1" /></div>';
                            endif;
                        ?>

                        <div class="post-details">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="post-single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <?php the_title( '<h1>', '</h1>' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-features-image">
    <?php 
        global $post;
            $page_url = get_permalink($post->ID );
            $title = $post->post_title;
            $description = $post->post_excerpt;
        ?>
        <?php 
            /* grab the url for the full size featured image */
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
            
            //Feature Image
            if( $featured_img_url ):
                echo '<div class="post-details-image"><img src="'. $featured_img_url .'" alt="post 1" /></div>';
            endif;
        ?>
    </div>
    <div class="blog-inner-area-desktop container"> <?php the_content(); ?> </div>
</div>
</section>