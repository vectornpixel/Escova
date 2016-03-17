<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package escova
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<hr class="border">
		<div class="container">
			<section>
				<div class="row">

					<div class="owl-carousel">
						<div><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/client1.png"></div>
						<div><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/client2.png"></div>
						<div><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/client3.png"></div>
						<div><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/client4.png"></div>
						<div><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/client5.png"></div>
					</div>

				</div>
			</section>
		</div>
		<section class="alt-section">
			<div class="container">
				<footer>
					<div class="row">


						<div class="section_header text-center text-uppercase">
							<h2>Contact Us</h2>
							<hr>
						</div>
						<div class="col-md-offset-1 col-md-3 text-uppercase">
							<h4>Address</h4>
							<p class="address">387 S. Old Woodward<br>Birmingham MI 48009 US</p>
							<br>
							<h4>Phone</h4>
							<p class="beta white">248.647.1111</p>

						</div>
						<div class="col-md-2 text-uppercase">
							<h4>Hours:</h4>
							<ul class="days list-unstyled pull-left">
								<li>MON</li>
								<li>TUES</li>
								<li>WED</li>
								<li>THU</li>
								<li>FRI</li>
								<li>SAT</li>
								<li>SUN</li>
							</ul>
							<ul class="hours list-unstyled text-uppercase">
								<li>9 - 5</li>
								<li>8 - 6</li>
								<li>8 - 8</li>
								<li>8 - 8</li>
								<li>8 - 8</li>
								<li>8 - 6</li>
								<li>CLOSED</li>
							</ul>

						</div>
						<div class="col-md-3 text-uppercase">
							<h4>Email Us</h4>
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
						<div class="col-md-3 text-uppercase">
							<h4>Social</h4>
							<div class="social-icons">
								<ul class="list-unstyled list-inline">
									<li><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/facebook.png"></li>
									<li><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/instagram.png"></li>
								</ul>
								<ul class="list-unstyled list-inline">
									<li><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/pinterest.png"></li>
									<li><img src="http://localhost:8888/Escova/wp-content/themes/escova/images/google.png"></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</section>
		<div class="location_map">
			<img src="http://localhost:8888/Escova/wp-content/themes/escova/images/map.jpg">
		</div>
		<section class="alt-section">
			<div class="container">
				<div class="footer_copyright">
					<div class="row">
						<div class="col-md-6">
							<img src="http://localhost:8888/Escova/wp-content/themes/escova/images/logo2.png">
						</div>
						<div class="col-md-6">
							<p class="milli pull-right"><?php printf( esc_html__( '2016 © Escova. All rights reserved. Design by EandGDesign')); ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://localhost:8888/Escova/wp-content/themes/escova/assets/js/modernizr.custom.js"></script>
<script src="http://localhost:8888/Escova/wp-content/themes/escova/assets/js/owl.carousel.min.js"></script>
<script src="http://localhost:8888/Escova/wp-content/themes/escova/assets/js/jquery.mousewheel.min.js"></script>
<script src='http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js?v=2.1.9'></script>
<script type="text/javascript">
	$(function(){
		$('#Container').mixItUp({
			effects: 'fade'
		});
	});
	$(document).ready(function(){
		// var owl = $('.owl-carousel');
		$(".owl-carousel").owlCarousel({
			loop: true,
			nav: false,
			//center: true,
			margin:20,
			touchDrag: true,
			items:5,
			dots: false,
			responsive:{
				// breakpoint from 0 up
				0:{
					items:5,
					nav:false,
					loop:true
				},
				// breakpoint from 600 up
				600:{
					items:5,
					nav:false,
					loop:true
				},
				// breakpoint from 1000 up
				1000:{
					items:5,
					nav:false,
					loop:true
				}
			}
		});



		/*owl.on('mousewheel', '.owl-stage', function (e) {
		 if (e.deltaY>0) {
		 owl.trigger('next.owl');
		 } else {
		 owl.trigger('prev.owl');
		 }
		 e.preventDefault();
		 });*/
	});
</script>
</body>
</html>
