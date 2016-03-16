<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package escova
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="hero-unit">
			<div class="hero-unit__image">
				<img src="http://localhost:8888/Escova/wp-content/themes/escova/images/services-banner.jpg">
			</div>
		</div>

		<div class="container">
			<section>
				<div class="row">

					<div class="section_header text-center text-uppercase">
						<?php the_title( '<h1 class="mega header_title entry-title">', '</h1>' ); ?>
						<hr>
					</div>
					<div class="section_content col-md-8 col-md-offset-2 col-lg-offset-2 text-center">

						<?php the_content() ?>
						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'escova' ),
							'after'  => '</div>',
						) );
						?>

					</div>
					<div class="clearfix"></div>

				</div>
			</section>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'escova' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
