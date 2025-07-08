<?php
/**
 * Template Name: News Archive
 */

get_header(); 
	$url = "http://SITENAME.local/wp-content/uploads/2024/11/Website_Hero_V3.4-1.mp4";

?>
<div class="blog-page-content col-sm-12">
  <section class="page-hero col-sm-12 halfQuarter_hero">
    <div class="video-overlay">
      <img src="https://SITENAME.com/wp-content/uploads/2024/08/SITENAME-Onsite-Reuse-content-image-4-scaled.webp" alt="Background Image">
    </div>
    <span class="dark-overlay"></span>
    <div class="hero-copy container">
      <span class="wrapper-left col-sm-12 col-md-6">
        <h1>News</h1>
      </span>
      <span class="wrapper-right col-sm-12 col-md-6">
        <a href="#scrollAnchor" class="btn">Explore</a>
        <i class="fa-solid fa-angle-down"></i>
      </span>
    </div>
  </section>

  <div class="container blog-content-wrapper">
    <span class="spacer"></span>

    <div id="scrollAnchor" class="sub-heading-wrapper col-lg-12">
      <div class="sub-heading col-lg-12">
        <h3>The Latest News, Press Releases, and Industry Related Information.</h3>
      </div>
    </div>
      
    <div class="blog-posts-wrapper col-lg-12">
      <?php
        $args = array(
          'post_type'      => 'news', // Replace with your CPT slug
          'posts_per_page' => 6,                      // -1 means show all posts
          'orderby'        => 'date',
          'order'          => 'DESC'
        );
        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    
            <article class="post-card col-lg-12">
              <div class="card-left-wrapper col-lg-6 ">
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('medium', ['class' => 'post-thumbnail']); ?>
                  <?php endif; ?>
                </a>
              </div>
              <div class="card-right-wrapper col-lg-6">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="post-excerpt">
                  <?php the_excerpt(); ?>
                </div>
                <div class="post-meta">
                  <span>Posted on <?php the_time('F j, Y'); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
              </div>
            </article>

        <?php 
          endwhile;
          wp_reset_postdata();
        else : ?>
          <p>No posts found.</p>
        <?php 
          endif; 
      ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>