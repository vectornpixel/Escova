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

		<div class="container">
			<section>

				<div class="row">
					<div class="col-xs-12 col-md-4 hidden-xs">
						<? the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
					</div>
					<div class="col-xs-12 col-md-8">
						<h1 class="text-uppercase"><?php the_title(); ?></h1>
						<hr>
						<p class="epsilon">
							<?php the_content() ?>
						</p>
					</div>
				</div>

				<div class="clearfix"></div>
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
