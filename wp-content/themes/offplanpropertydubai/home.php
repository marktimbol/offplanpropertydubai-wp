<?php
	/**
	 * Template Name: Home
	 */
?>

<?php get_header(); ?>

	<div class="main-carousel">
		<?php for ($i = 1; $i <= 3; $i++) { ?>
		<div class="carousel-cell flex flex--center">
			<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
			<div class="carousel-cell-content">
				<img src="<?=get_bloginfo('stylesheet_directory');?>/images/logo.png" alt="" title="" class="img-responsive" />
				<p class="main-carousel--developer">MAG Property Development</p>
				<h3 class="main-carousel--project">MAG Eye - A dream home well within your reach</h3>
				<div class="main-carousel--action">
					<a href="#">View project</a>
				</div>
			</div>
			<div class="overlay"></div>
		</div>
		<?php } ?>
	</div>

	<section class="search-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><i class="fa fa-search"></i> Search Projects</h3>
					<form method="POST">
						<div class="form-group flex-02">
							<label for="location">Location</label>
							<select name="location">
								<option value="">All</option>
								<option value="dubai">Dubai</option>
								<option value="abu-dhabi">Abu Dhabi</option>
							</select>
						</div>
						<div class="form-group flex-02">
							<label for="project-type">Project type</label>
							<select name="project-type">
								<option value="">All</option>
								<option value="apartment">Apartment</option>
								<option value="villa">Villa</option>
							</select>
						</div>
						<div class="form-group flex-05">
							<label for="keyword">Enter project name</label>
							<input type="text" name="keyword" placeholder="Search for a project, developer, or communities" />
						</div>						
						<div class="form-group flex-01">
							<label>&nbsp;</label>
							<button type="submit" class="btn btn-primary">Search</button>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
				</div>
				<div class="col-md-6">
					<h2 class="section-title">About Dubai Off Plan Projects</h2>
					<p>
						Property which is still in the process of construction or is yet to be constructed is called off plan property. Off plan properties play a major role in strengthening the real estate sector of Dubai. Almost all property developers of Dubai have off plan projects scattered across the Emirates.
					</p>
					<p class="mt-30">
						<a href="#" class="btn btn-primary btn-lg">Register your interest</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="latest-projects-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title text-center">Latest projects</h2>
				</div>
				<div class="col-md-12">
					<ul class="projects">
						<?php for ($i = 1;$i <= 9; $i++) { ?>
						<li class="project-card col-md-4">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
							<div class="project-card--content">
								<h3 class="project-card--title"><a href="#">Hartland Aflux</a></h3>
								<div class="project-card--developer">
									<img src="<?=get_bloginfo('stylesheet_directory');?>/images/developer.jpeg" alt="" title="" class="img-responsive" />
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>

					<p class="text-center">
						<a href="#" class="btn btn-primary btn-lg">See all projects</a>
					</p>					
				</div>
			</div>
		</div>
	</section>

	<section class="explore-communities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title text-center">Explore communities</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
				</div>
				<div class="col-md-7">
					<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
				</div>
				<div class="col-md-5">
					<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
				</div>
			</div>		
		</div>
	</section>

<?php get_footer();
