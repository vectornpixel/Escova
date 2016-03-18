<?php
/**
 * Template part for displaying posts.
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
				<img src="<?php echo site_url(); ?>/wp-content/themes/escova/images/services-banner.jpg">
			</div>
		</div>

		<div class="container">
			<section>

				<div class="row">
					<div class="col-md-4">
						<? the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
					</div>
					<div class="col-md-8">
						<header class="entry-header">

								<?php
								if ( is_single() ) {
									the_title( '<h1 class="entry-title text-uppercase">', '</h1>' );
								} else {
									the_title( '<h2 class="entry-title text-uppercase"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								}

								if ( 'post' === get_post_type() ) : ?>
									<div class="entry-meta">
										<?php escova_posted_on(); ?>
									</div><!-- .entry-meta -->
									<?php
								endif; ?>
							</header><!-- .entry-header -->
						<hr>
						<p class="epsilon">
							<?php
							the_content( sprintf(
							/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'escova' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'escova' ),
								'after'  => '</div>',
							) );
							?>
						</p>
						<footer class="entry-footer">
							<?php escova_entry_footer(); ?>
						</footer><!-- .entry-footer -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-4 col-md-8">
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						/*if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/
						?>
					</div>

				</div>

				<div class="clearfix"></div>
			</section>
		</div>


	</div><!-- .entry-content -->


</article><!-- #post-## -->



