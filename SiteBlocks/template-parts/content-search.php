<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SITENAME
 */

?>

<li>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
	<?php the_title( sprintf( '<h2 class="entry-title h6"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<!-- <?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			SITENAME_posted_on();
			SITENAME_posted_by();
			?>
		</div>
		<?php endif; ?> -->
		</div><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
</li>
