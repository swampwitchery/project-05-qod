<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive Stuff
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<div class="quote-authors">
                <h2>Quote Authors</h2>
                <ul>
                    <?php $posts = get_posts( array('posts_per_page' => -1, 'post_type' => 'post') ); ?>
                    <?php foreach ( $posts as $post ) :  setup_postdata( $post ); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </div>

            <div class="categories-area">
                <h2>Categories</h2>
                <ul>
               <?php wp_list_categories(array(
                   'title_li'    => '',
               )); ?>
                </ul>
            </div>

            <div class="tags-area">
                <h2>Tags</h2>
                <ul>

                </ul>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
