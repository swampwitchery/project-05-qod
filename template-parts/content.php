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

	<?php
	$source=get_post_meta(get_the_ID(),'_qod_quote_source',TRUE);
	$source_url=get_post_meta(get_the_ID(),'_qod_quote_source_url',TRUE);
	?>

	<div class="entry-info	">
		<p class="author-title">
			&mdash; <?php the_title(); ?>
		</p>
		<?php if($source && $source_url): ?>
			
			<span class="entry-source">&comma; <a href=<?php echo $source_url ?>><?php echo $source ?></a></span>
		<?php elseif($source): ?>
		<span class="entry-source">&comma; <?php echo $source ?></span>
		<?php endif; ?>
		
	</div>



</article><!-- #post-## -->
