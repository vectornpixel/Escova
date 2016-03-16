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
/* Template Name: Services */

get_header();
query_posts('post_type=service', 'post_per_page=-1');
$category_list = get_the_category_list();

?>
<?php
$post_id = 74;
$queried_post = get_post($post_id);
$title = $queried_post->post_title;

?>
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
	<div class="container">
		<section>
			<div class="row">
				<div class="col-md-6 no-padding">
					<div class="service_header">
						<img class="img-responsive" src="http://localhost:8888/Escova/wp-content/themes/escova/images/services-header.png">
					</div>
				</div>

				<div class="col-md-6 no-padding">
					<ul class="filter-nav list-unstyled">
						<?php
						$categories = get_categories( array(
							'orderby' => 'name',
							'parent'  => 0
						) );

						foreach ( $categories as $category ) {
							printf( '<li><a class="filter" data-filter=".%2$s">%2$s</a></li>',
								esc_url( get_category_link( $category->term_id ) ),
								esc_html( $category->name )
							);
						}
						?>

					</ul>
				</div>
			</div>
		</section>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div id="Container" class="filter-container">
					<div class="row">
						<!--<h1 class="text-center">CUT & STYLE</h1>-->

						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post();?>

								<div class="mix col-xs-6 col-md-2 <?php foreach( get_the_category() as $cat ) { echo $cat->name . '  '; } ?>">
									<div class="service-wrapper">
										<div class="service-wrapper_title">

											<p class="milli"><?php echo get_post_meta($post->ID, 'service', true); ?></p>

										</div>
										<div class="service-wrapper_price">
											<p class="alpha"><?php echo get_post_meta($post->ID, 'price', true); ?></p>
										</div>
									</div>
								</div>
								<? //get_template_part( 'template-parts/content', 'services' ); ?>
								<? // If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif; ?>

							<? endwhile; // End of the loop. ?>
						<? endif; ?>

					</div>
					<div class="mix Intraceuticals text-center">
						<?php
						echo $queried_post->post_content;
						?>
					</div>
					<div class="mix Hair">
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
					</div>
				</div>
			</div>
			<div class="clearfix"></div>


		</main><!-- #main -->
	</div><!-- #primary -->



	<div class="gap"></div>
	<div class="gap"></div>
	</div>
<?php
get_footer();
