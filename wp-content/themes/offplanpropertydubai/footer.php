<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="action-message">
						<h3>The best investment on earth is earth</h3>
						<p><a href="#" class="btn btn-primary btn-lg">Register your interest</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title text-center">Developers</h3>
				</div>
			</div>
			<div class="col-md-12">
				<div class="developers-carousel">
					<?php for ($i = 1; $i <= 12; $i++) { ?>
					<div class="carousel-cell">
						<img src="<?=get_bloginfo('stylesheet_directory');?>/images/developer.jpeg" alt="" title="" />
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<!-- <img src="https://findeo.realty/wp-content/uploads/2017/08/logo.png"alt="" title="" /> -->
					<h4>About us</h4>
					<p>
						Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.
					</p>
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-6">
							<h4>Helpful links</h4>
							<ul>
								<li><a href="#">Projects</a></li>
								<li><a href="#">Developers</a></li>
								<li><a href="#">Communities</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h4>Contact Us</h4>
							<address>
								Address: Dubai Off Plan<br />
								Mobile: +971 55 966 4000<br />
								eMail: info@offplanpropertydubai.com
							</address>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copyright">
						&copy; Offplan Property Dubai. All Rights Reserved.
					</p>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
