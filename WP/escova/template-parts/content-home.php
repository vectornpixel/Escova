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
				<img src="<?php echo site_url(); ?>/wp-content/themes/escova/images/pic.jpg">
			</div>
		</div>
		<div class="container">
			<section>
				<div class="row">

					<div class="section_header text-center text-uppercase">
						<h1 class="mega header_title">Welcome</h1>
						<hr>
					</div>
					<div class="section_content col-md-8 col-md-offset-2 col-lg-offset-2 text-center">
						<p class="delta">Welcome to Escova Salon, where your hair is pampered and treated by professional stylists to maintain a healthy color and glow.
							We promise our services are worth the time and money, and once you experience what
							Escova Salon has to offer, you'll dump your box dye in the trash and keep coming back!</p>
					</div>
					<div class="clearfix"></div>

				</div>
			</section>

		</div>

		<section class="alt-section">
			<hr>
			<div class="container">
				<div class="section_header text-center text-uppercase">
					<img src="<?php echo site_url(); ?>/wp-content/themes/escova/images/icon-services.png">
					<h1>Our Services</h1>
				</div>
				<div class="section_content text-center">
					<ul class="list-inline list-unstyled text-uppercase">
						<li>Hair</li>
						<li>Make Up</li>
						<li>Oxygen / Facial</li>
						<li>Nails</li>
					</ul>
					<a class="button" >View</a>
				</div>
			</div>
			<hr>
		</section>

		<div class="second_section">

			<div class="second_background">
				<img src="<?php echo site_url(); ?>/wp-content/themes/escova/images/pic2.jpg">
			</div>
			<div class="second_section__copy Absolute-Center is-Responsive">
				<p class="giga thin">Think<br><span class="bold">Beyond</span><br><span class="thin">Beautiful</span>
				</p>

			</div>

		</div>


		<section>
			<div class="container">
				<div class="col-md-6">
					<img class="img-responsive" src="<?php echo site_url(); ?>/wp-content/themes/escova/images/hourmag.jpg">
				</div>
				<div class="col-md-6">
					<div class="section_content nominated text-center text-uppercase">
						<p class="beta">Nominated By <span>Hour Magazine</span><p>
						<p class="alpha subtitle">WE TAKE PRIDE IN<br>
							WHat we do,<br>
							we take time in<br>
							perfecting our craft</p>
						<hr>
					</div>
				</div>
			</div>

		</section>

		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'escova' ),
				'after'  => '</div>',
			) );
		?>
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
