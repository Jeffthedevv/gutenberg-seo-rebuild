<?php get_header(); ?>

  <div class="single-post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="page-hero col-sm-12 threeQuarter_hero">
      <div class="video-overlay">
        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="Background Image">
      </div>
      <span class="dark-overlay"></span>
      <div class="hero-copy container">
        <span class="wrapper-left col-sm-12 col-md-6">
          <h1><?php the_title(); ?></h1>
        </span>
        <!-- <span class="wrapper-right col-sm-12 col-md-6">
          <a href="#scrollAnchor" class="btn">Explore</a>
          <i class="fa-solid fa-angle-down"></i>
        </span> -->
      </div>
    </section>
    
    <div class="container">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        <div class="post-meta">
          <span>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></span>
        </div>
      </article>
      <div class="post-navigation">
        <?php previous_post_link('%link', '« Previous Post'); ?>
        <?php next_post_link('%link', 'Next Post »'); ?>
      </div>
    </div>
    
    <?php endwhile; else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
