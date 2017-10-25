<?php get_header(); ?>

	<div class="main-carousel">
		<div class="carousel-cell">
			<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
			<div class="carousel-cell-content">
				<h3 class="main-carousel--title">Slide title</h3>
				<p class="main-carousel--description">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod
				</p>
				<div class="main-carousel--actions">
					<a href="#">View product</a>
				</div>
			</div>
		</div>
	</div>

	<div class="search-container">
		<form method="POST">
			<label>Search projects</label>
			<div class="form-group">
				<label for="location">Location</label>
				<select name="location">
					<option value="dubai">Dubai</option>
					<option value="abu-dhabi">Abu Dhabi</option>
				</select>
			</div>
			<div class="form-group">
				<label for="project-type">Project type</label>
				<select name="project-type">
					<option value="apartment">Apartment</option>
					<option value="villa">Villa</option>
				</select>
			</div>
			<div class="form-group">
				<label>&nbsp;</label>
				<button type="submit" class="btn btn-search">Search</button>
			</div>	
		</form>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
			</div>
			<div class="col-md-6">
				<h2>About Dubai Off Plan Projects</h2>
				<p>
					Property which is still in the process of construction or is yet to be constructed is called off plan property. Off plan properties play a major role in strengthening the real estate sector of Dubai. Almost all property developers of Dubai have off plan projects scattered across the Emirates.
				</p>
				<p>
					When buying real estate in Dubai off Plan property is a highly successful option. We offer the most comprehensive and latest information about project developments and our off plan specialists give free property consultation services.
				</p>
				<p>
					<a href="#" class="btn btn-register">Register your interest</a>
				</p>
			</div>
		</div>
	</div>

	<div class="latest-projects-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Latest projects</h2>

					<ul class="latest-projects">
						<li class="project-card">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
							<div class="project-card--content">
								<h3 class="project-card--title"><a href="#">Hartland Aflux</a></h3>
								<div class="project-card--developer">
									<img src="<?=get_bloginfo('stylesheet_directory');?>/images/developer.jpeg" alt="" title="" />
								</div>
							</div>
						</li>
					</ul>

					<p>
						<a href="#" class="btn btn-primary">See all projects</a>
					</p>					
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Explore communities</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
			</div>
			<div class="col-md-8">
				<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
			</div>
			<div class="col-md-4">
				<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
			</div>
		</div>		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="action-message">
					<h3>The best investment on earth is earth</h3>
					<p><a href="#" class="btn btn-register">Register your interest</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Developers</h2>
			</div>
		</div>
		<div class="col-md-12">
			<div class="developers-carousel">
				<div class="carousel-cell">
					<img src="<?=get_bloginfo('stylesheet_directory');?>/images/developer.jpeg" alt="" title="" />
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img src="https://findeo.realty/wp-content/uploads/2017/08/logo.png"alt="" title="" />
					<p>
						Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.
					</p>
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-6">
							<h4>Helpful links</h4>
							<ul>
								<li><a href="#">Developers</a></li>
								<li><a href="#">Projects</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h4>Contact Us</h4>
							<address>
								2345 Little Lonsdale St, Melbourne<br />
								Phone: (123) 123-456<br />
								E-Mail: office@example.com
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

<?php get_footer();
