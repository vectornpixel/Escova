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

/* Template Name: Stylist */

get_header();
//$args = array('post_type' => 'stylist');
//$loop = new WP_Query( $args );

query_posts('post_type=stylist');

//$team_list = get_the_term_list($post->ID, 'taxonomy', '', ', ','');
//$post_type = 'stylist';
// Get all the taxonomies for this post type
//$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );


?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-unit">
				<div class="hero-unit__image">
					<img src="http://localhost:8888/Escova/wp-content/themes/escova/images/services-banner.jpg">
				</div>
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
								<?php
								$team_lists = get_terms( 'taxonomy', array(
									'orderby' => 'name',
									'parent'  => 0
								) );

								foreach ( $team_lists as $team_list ) {
									printf( '<li><a class="filter" data-filter=".%2$s">%2$s</a></li>',
										esc_url( get_category_link( $team_list->term_id ) ),
										esc_html( $team_list->name )
									);
								}
								?>
								<?php

								/*foreach( $taxonomies as $taxonomy ) :

									// Gets every "category" (term) in this taxonomy to get the respective posts
									$terms = get_terms( $taxonomy );

									foreach( $terms as $term ) :

										$posts = new WP_Query( "taxonomy=$taxonomy&term=$term->slug&posts_per_page=2" );

										if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post();
											the_title();

										endwhile; endif;

									endforeach;

								endforeach;*/
								?>
							</ul>
						</div>
					</div>
					<div class="row">
						<div id="Container" class="filter-container">
							<div class="row">

								<?php if ( have_posts() ) : ?>
									<?php while ( have_posts() ) : the_post(); ?>
										<?php
										$terms = get_the_terms( get_the_ID(), 'taxonomy' );

										if ( $terms && ! is_wp_error( $terms ) ) :

											$team_links= array();

											foreach ( $terms as $term ) {
												$team_links[] = $term->name;
											}

											$show_teams = join( ", ", $team_links );
											?>
										<?php endif; ?>
										<div class="mix col-xs-12 col-md-3 <?php printf( esc_html( $show_teams ) )?>">
											<div class="mix-title">
												<?php the_title(); ?>
											</div>

											<? the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
										</div>
										<? //get_template_part( 'template-parts/content', 'stylists' ); ?>

										<? // If comments are open or we have at least one comment, load up the comment template. ?>
										<? if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif; ?>

									<? endwhile; // End of the loop. ?>
								<? endif ?>
							</div>
							<div class="gap"></div>
							<div class="gap"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<script type="text/javascript">
	$(document).ready(function(){

		$(".mix-title").hide();
		$(".mix img").on('mouseover', function(){

			$(this).css("opacity", "0.5");
			$(".mix-title").show();

		});
		$(".mix img").on('mouseout', function(){
			$(this).css("opacity", "1");
			$(".mix-title").hide();

		});

	});
</script>
<?php
get_footer();
