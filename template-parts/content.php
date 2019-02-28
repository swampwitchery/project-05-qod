<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<div class="author-title">
		- <?php the_title(); ?>
	</div>

	<div class="entry-title">
		
	</div>

	<header class="entry-header">

	</header><!-- .entry-header -->
</article><!-- #post-## -->
