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
		<div class="container">
			<section>
				<div class="row">
					<div class="col-md-6 no-padding">
						<div class="service_header">
							<img class="img-responsive" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/services-header.png">
						</div>
					</div>
					<div class="col-md-6 no-padding">
						<ul class="filter-nav list-unstyled">
							<li><a class="filter" data-filter="all">All</a></li>
							<li><a class="filter" data-filter=".hair">Stylist</a></li>
							<li><a class="filter" data-filter=".makeup">Make up</a></li>
							<li><a class="filter" data-filter=".nails">Nails</a></li>
							<li><a class="filter" data-filter=".intraceuticals">Intraceuticals</a></li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div id="Container" class="filter-container">
						<div class="row">
							<h1 class="text-center">CUT & STYLE</h1>

							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli"><?php echo get_post_meta($post->ID, 'service', true); ?></p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha"><?php echo get_post_meta($post->ID, 'price', true); ?></p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Womens's</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">60+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Kids</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">35+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Blowdry</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">40+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Style</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">40+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Updo</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">75+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Conditioning Treatments</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">35+</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<h1 class="text-center">COLOR</h1>

							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Tint</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">60+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Highlights</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">85+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Gloss</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">35+</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Olaplex Ombre</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">Call</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Balyage</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">Call</p>
									</div>
								</div>
							</div>
							<div class="mix col-xs-6 col-md-2">
								<div class="service-wrapper">
									<div class="service-wrapper_title">
										<p class="milli">Color Correction</p>
									</div>
									<div class="service-wrapper_price">
										<p class="alpha">Call</p>
									</div>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="service_content text-center">
								<h1>Smoothing Treatments</h1>
								<hr>
								<p class="epsilon">Escova Salon offers numerous keratin smoothing treatments. Smoothing treatments improve the condition of the hair by creating a protective protein layer around the hair shaft to eliminate frizz,
									enhance manageability and smooth the cuticle for up to 3 months. Keratin is a protein naturally found in hair so this treatment not only tames frizz but can repair the hair up to 50%.
									We also offer Keratin express treatments for those with frizzy and/or curly hair looking for a quick smoothing solution.
									The different brands Escova Salon carries are Brazilian Blowout, GK Hair, Keratin Complex, and Keratin Express.
									<br><br>
									We also offer the Agave Smoothing Treatment. Call for details.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="service_content text-center">
								<h1>Extensions</h1>
								<hr>
								<p class="epsilon">Hairdreams Laserbeamer NANO- The Laserbeamer System allows for automatic application of multiple human hair strands in one simple step. Bonds are made from a crystal polymer blend which does not fuse to the hair,
									and makes removal a quick and easy process while maintaining the integrity of your own hair, unlike the commonly used keratin bonded extensions. Call for details.

								</p>
							</div>
						</div>
						<div class="row">
							<div class="service_content text-center">
								<h1>Hairdreams Quikkies</h1>
								<p class="epsilon">Hairdreams Quikkies are tiny, self-adhesive strips that are made from special ultra-light microfiber gauze with premium human hair strands attached to it.
									It allows for fast, gentle and long-lasting integration into your own hair.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="service_content text-center">
								<h1>Fusion Klix</h1>
								<p class="epsilon">The Klix application process is simple, fast and easy for both the experienced stylist, as well as, the first time user. Klix application requires no heat, no glue, no tape, and no removal chemicals leaving behind no breakage.
									Each strand is individually hand threaded onto a skin like weft, root to end, maintaining the hair’s natural cuticle direction, which allows Klix Hair Extensions to remain tangle free while looking undeniably natural and shiny.
								</p>
							</div>
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
