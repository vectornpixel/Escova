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
				<img src="<?php echo site_url(); ?>/wp-content/themes/escova/images/services-banner.jpg">
			</div>
		</div>

		<div class="container">
			<section>
				<div class="row">

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
		<div class="container">
			<section>
				<div class="row">
					<div class="col-md-6">
						<div class="team_header text-uppercase">
							<?php the_title( '<h1 class="mega header_title entry-title">', '</h1>' ); ?>
							<hr>
							<div class="clearfix"></div>
							<p>Our professional staff are trained to provide you with the utmost creative experience to give you a <span>fresher you!</span></p>
						</div>
					</div>
					<div class="col-md-6">
						<ul class="filter-nav list-unstyled">
							<li><a class="filter" data-filter="all">All</a></li>
							<li><a class="filter" data-filter=".management">Management</a></li>
							<li><a class="filter" data-filter=".stylist">Stylist</a></li>
							<li><a class="filter" data-filter=".makeup">Make up</a></li>
							<li><a class="filter" data-filter=".nails">Nails</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div id="Container" class="filter-container">
						<div class="mix col-xs-12 col-md-3 stylist">
							<? the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Ana.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Andrie.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Bianca.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Bill.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Bobby.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Edie.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Gabrialla.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 management">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Hailey.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Hoffet.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Holly.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Jackie.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 makeup">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Jeff.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Julia.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Kim.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Lissa.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Lora.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Loretta.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Marco.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 nails">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Mea.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Mira.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Molly.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 stylist">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Stephanie.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 management">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Taylor.jpg">
						</div>
						<div class="mix col-xs-12 col-md-3 management">
							<img class="full-width" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/staff/Victoria.jpg">
						</div>
						<div class="gap"></div>
						<div class="gap"></div>
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
