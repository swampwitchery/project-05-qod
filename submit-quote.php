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
					the_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

            <div id="submit-area">
                <form id="submit-form">
                    <label>Author of Quote</label>
                    <br>
                    <input type="text" name="author-quote" id="author-quote" required>
                    <br>
                    <label>Quote</label>
                    <br>
                    <textarea name="message" id="your-quote" required></textarea>
                    <br>
                    <label>Where did you find this quote? (e.g. book name)</label>
                    <br>
                    <input type="text" name="find-quote" id="find-quote"> 
                    <br>
                    <label>Provide the URL of the quote source, if available.</label>
                    <br>
                    <input type="url" name="quote-source" id="quote-source">
                    <br>

                    <input class="killme" type="submit" value="Submit Quote">
                 </form>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

