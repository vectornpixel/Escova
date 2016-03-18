<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package escova
 */
/* Template Name: Products */
query_posts('post_type=products', 'post_per_page=-1');
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-unit">
				<div class="hero-unit__image">
					<img src="<?php echo site_url(); ?>/wp-content/themes/escova/images/services-banner.jpg">
				</div>
			</div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'products' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
