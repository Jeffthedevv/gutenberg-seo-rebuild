<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SITENAME
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6'); ?>>
    
    <a href="<?php the_permalink(); ?>">
        <div class="blog-box" data-aos="fade-up" data-aos-delay="50">
        <?php 
            //Feature Image
            if( has_post_thumbnail() ):
                echo '<div class="blog-img">'. get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'img-fluid' ) ) .'<img src="'. get_template_directory_uri() .'/assets/img/blog-shape.png" alt="img" class="blog_shape" /></div>';
            endif;
            
            echo '<div class="blog-text">';
                echo '<div>';
                    
                    //Date
                    echo '<span class="post_date">'. human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' '. esc_html__( 'ago', 'injurytrialattorneys' ) .' </span>';
                    
                    //Title
                    the_title( '<h3 class="blog-box-title "><strong>', '</strong></h3>' );
                    
                    //Excerpt
                    the_excerpt();
                    
                echo '</div>';
            
                echo '<span class="box_action text-center"><strong>'. esc_html__( 'READ MORE', 'injurytrialattorneys' ) .'</strong></span>';
            
            echo '</div>';
        ?>
        </div>
    </a>

</article><!-- #post-## -->
