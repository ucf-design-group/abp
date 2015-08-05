<?php /* Template Name: Contact */

get_header(); ?>

	<div class="content-area">

			<h1>CONTACT</h1>

			<section class="contact-wrap">

				<div class="contact">
					<h2>Contact Us</h2>
					<p><span>Volunteer UCF Office:</span>(407) 823-3318</p>
					<p><span>Office of Student Involvement Office:</span> (407) 823-6471</p>
					<p><span>OSI Fax:</span> (407) 823-5899</p>
					<p>vucfabp@ucf.edu</p>
				</div>

				<div class="find-us">
					<h2>Find Us</h2>
					<p>The Volunteer UCF Cubicle is located in the Office of Student Involvement (SU 208).</p>
					<div class= "vucf-address">
						<p>
							University of Central Florida
							<br>
							Volunteer UCF
							<br>
							Attention: ABP
							<br>
							PO Box 160245
							<br>
							Orlando, FL 32816
						</p>
					</div>
				</div>

				<div class="follow-us">
					<div class="social-btns">
						<h2>Follow Us</h2>
						<div class="facebook-btn">
							<a href="#" target="_blank">
							<img></img>
							<p>Follow us on FACEBOOK</p>
							</a>
						</div>
						<div class="twitter-btn">
							<a href="#" target="_blank">
							<img></img>
							<p>Follow us on TWITTER</p>
							</a>
						</div>
						<div class="instagram-btn">
							<a href="#" target="_blank">
							<img></img>
							<p>Follow us on INSTAGRAM</p>
							</a>
						</div>
					</div>
				</div>

			</section>

			<div class="main">
<?php
				while (have_posts()) {
					the_post();
					get_template_part( 'content' );
				}
?>

			</div>

	</div>

<?php get_footer(); ?>