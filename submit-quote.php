<?php
/**
 * The template for displaying submit form.
 * Template Name: Submit
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

            <div id="submit-area">
                <form action="" method="post">
                    <label for="quote-author">Author of Quote</label>
                    <input type="text" name="author-quote" id="author" required>
                    <label for="message">Quote</label>
                    <textarea name="message" id="your-quote"></textarea>
                    <input type="submit" value="Send My Message">
                    <label for="from-where">Where did you find this quote? (e.g. book name)</label>
                    <input type="text" name="email" id="email" required>

                 </form>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

