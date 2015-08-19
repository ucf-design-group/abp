<?php /* Template Name: Home */

get_header(); ?>

	<div class="content-area">

		<div class="splash-wrap">
			<!-- Temporary Placeholder -->
			<div class="splash-image"/>
		</div>

		<section class="icons">
				<div class="plane-wrap">
				</div>
				<div class="footprints-wrap">
				</div>
				<div class="case-wrap">
			</div>
		</section>

		<div class="main">

		<h1>What is Alternative Break Program?</h1>
<?php
			while (have_posts()) {
				the_post();
				get_template_part( 'content' );
			} 
?>
		</div>

		<section class="video">
			<div class="video-wrap">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/RATme3wctPw" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="join-wrap">
			<h1 class="home-title"> Why Join? </h1>
				<ul>
					<li>You will be making a difference</li>
					<li>New long-lasting friendships</li>
					<li>Networking</li>
					<li>Direct contact with social issues</li>
					<li>Traveling to new and interesting locations</li>
					<li>Immerse yourself in a new culture and lifestyle</li>
					<li>Working together with other schools towards a common goal</li>
					<li>Build leadership skills for future involvement opportunities</li>
					<li>Have fun! Give Back!</li>
				</ul>
			</div>
		</section>

		<section class="contact-social">

			<div class="contact-wrap">
				<h1 class="home-title">Get In Touch With Us!</h1>
				<div>
					<span>Volunteer UCF Office:</span> (407) 823-3318
				</div>
				<div>
					<span>Office of Student Involvement Office:</span> (407) 823-6471
				</div>
				<div>
					<span>OSI Fax:</span> (407) 823-5899
				</div>
				<br>
				<div>The Volunteer UCF Cubicle is located in the Office of Student Involvement (SU 208).</div>
				<br>
				<div class="vucf-address"> 
					University of Central Florida
					<br>
					Volunteer UCF
					<br>
					Attention: ABP
					<br>
					PO Box 160245
					<br>
					Orlando, FL 32816
				</div>
			</div>

			<div class="social-wrap">
				<div class="social-btns">
					<h1 class="home-title">Socialize!</h1>
					<div class="facebook-btn">
						<div class="facebook-btn">
							<a href="#" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/resources/facebook-logo.png" />
							<p>Follow us on FACEBOOK</p>
							</a>
						</div>
					</div>
					<div class="twitter-btn">
						<a href="#" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/resources/twitter-logo.png" />
						<p>Follow us on TWITTER</p>
						</a>
					</div>
					<div class="instagram-btn">
						<a href="#" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/resources/instagram-logo.png" />
						<p>Follow us on INSTAGRAM</p>
						</a>
					</div>
				</div>
			</div>

		</section>


<?php get_footer(); ?>