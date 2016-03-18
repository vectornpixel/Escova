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
	<?php //the_title( '<h1 class="mega header_title entry-title">', '</h1>' ); ?>
	<?php //the_content() ?>
	<?php
	/*wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'escova' ),
		'after'  => '</div>',
	) );*/
	?>
	<div class="entry-content">
		<div class="hero-unit">
			<div class="hero-unit__image">
				<? the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
			</div>
		</div>

		<div class="container">
			<section>

				<div class="row contact-us text-uppercase">
					<div class="col-md-6">
						<h1>CONTACT US</h1>
						<h4>Address</h4>
						<p class="address">387 S. Old Woodward<br>Birmingham MI 48009 US</p>
						<br>
						<h4>Phone</h4>
						<p class="beta">248.647.1111</p>
					</div>
					<div class="col-md-6">
						<h1>EMAIL US</h1>
						<form class="form-container" name="contact-form" method="post">
							<div class="form-group">
								<input class="form-control form-field" type="text" name="name" id="name" placeholder="Name" />
							</div>

							<div class="form-group">
								<input class="form-control form-field" type="text" name="phone" id="phone" placeholder="Phone" />
							</div>

							<div class="form-group">
                        <textarea class="form-control form-field" rows="1" name="message" id="message" placeholder="Message" >
                        </textarea>
							</div>
							<div class="form-group pull-right">
								<button class="btn btn-submit" type="submit">Send</button>
							</div>

						</form>
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
