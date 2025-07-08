<?php
/**
 * Template Name: Home Page
 */

get_header(); 
	$url = "http://SITENAME.local/wp-content/uploads/2024/11/Website_Hero_V3.4-1.mp4";

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main site-home-page" role="main">
		<section class="page-content col-sm-12">
			<?php the_content(); ?>
		</section>
  </main><!-- #main -->
	<span class="opacity-ele d-none"></span> 
</div><!-- #primary -->

<?php get_footer(); ?>