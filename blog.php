
<div class="blog-page-content">
  <section class="page-hero col-sm-12 halfQuarter_hero">
    <div class="video-overlay">
      <img src="https://SITENAME.com/wp-content/uploads/2024/08/SITENAME-Onsite-Reuse-content-image-4-scaled.webp" alt="Background Image">
    </div>
    <span class="dark-overlay"></span>
    <div class="hero-copy container">
      <span class="wrapper-left col-sm-12 col-md-6">
        <h1>Blog</h1>
      </span>
      <span class="wrapper-right col-sm-12 col-md-6">
        <a href="#scrollAnchor" class="btn">Explore</a>
        <i class="fa-solid fa-angle-down"></i>
      </span>
    </div>
  </section>
  
  <section class="container blog-content-wrapper">
    <span class="spacer"></span>

    <div id="scrollAnchor" class="sub-heading-wrapper col-lg-12">
      <!-- <div class="sub-heading-left col-lg-6">
        <h2>BLOG</h2>
      </div> -->
      <div class="sub-heading col-lg-12">
        <h3>The Latest Blogs Related Information.</h3>
      </div>
    </div>
    
    <?php if ( have_posts() ) : ?>
      <div class="blog-posts-wrapper col-lg-12">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" class="post-card col-lg-12">
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
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <div class="pagination">
        <?php the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __('« Previous', 'textdomain'),
            'next_text' => __('Next »', 'textdomain'),
            'screen_reader_text' => '' // Removes the extra "Post Pagination" text
        ) ); ?>
      </div>

    <?php else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </section>
</div>
