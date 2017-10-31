<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>			
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-project-carousel">
						<?php for ($slide = 1; $slide <= 2; $slide += 1) { ?>
						<div class="carousel-cell">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide<?=$slide?>.jpeg" alt="" title="" />
						</div>
						<?php } ?>
					</div>
					<div class="single-project-carousel--nav">	
						<?php for ($slide = 1; $slide <= 2; $slide += 1) { ?>
						<div class="carousel-cell">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide<?=$slide?>.jpeg" alt="" title="" width="100" height="70" />
						</div>
						<?php } ?>				  					  	
					</div>				
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-md-9">
					<h1>Celestia - Where your happiness comes first <small>by Damac Properties</small></h1>
					<ul class="list-group">
						<li class="list-group-item">
							<i class="fa fa-home"></i> &nbsp; Project Type: 
							<span class="label label-success">Apartment</span>
							<span class="label label-success">Studio</span>
						</li>
						<li class="list-group-item">
							<i class="fa fa-money"></i> &nbsp; 
							Price starting from: AED 514,000
						</li>
						<li class="list-group-item">
							<i class="fa fa-calendar"></i> &nbsp; 
							Expected Completion Date: Mid of 2018
						</li>
						<li class="list-group-item">
							<i class="fa fa-external-link"></i> &nbsp; 
							<a href=" http://www.dubailand.gov.ae/English/pages/project-developer-viewer.aspx?projectNo=1487" target="_blank">
								DLD Project Completion %
							</a> 
						</li>
						<li class="list-group-item">
							<i class="fa fa-external-link"></i> &nbsp; 
							<a href=" http://www.dubailand.gov.ae/English/pages/project-developer-viewer.aspx?projectNo=1487" target="_blank">
								Escrow Account Details %
							</a>
						</li>
						<li class="list-group-item">
							<i class="fa fa-map-marker"></i> &nbsp; 
							Location: Dubai South, Dubai
						</li>
					</ul>

					<p>
						One of the first apartment developments in the area to be ready, Celestia furnished apartments are ideally situated in Dubai South, a master planned community conceptualised to bring its residents and visitors happiness, wellbeing and prosperity. In close proximity to the nerve centre of Expo 2020, the world’s largest aviation hub and a host of world-class facilities, it is set to become a progressive urban and economic centre offering an unrivalled quality of life.
					</p>

					<h3>Highlights</h3>
					<ul><li>30% guaranteed rental returns over 3 years – from 2018</li><li>Fully furnished apartments</li><li>Ideally situated in Dubai South</li><li>Ready mid 2018</li><li>Option to visit show apartments</li></ul>		
					
					<h3>Facilities</h3>
					<ul><li>Furnished studios and one and two-bedroom apartments</li><li>Separate living room and dining area</li><li>Fully fitted kitchen, washer, dryer, oven, refrigerator and microwave</li><li>Landscaped garden</li><li>Grand lobby with café</li><li>Temperature-controlled swimming pool</li><li>State-of-the-art gymnasium</li><li>Steam room and sauna</li><li>Luxury spa</li><li>Children’s play area</li><li>Ample parking</li></ul>

					<h3>Payment Terms</h3>
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td width="200">1st Installment</td>
								<td width="100">20% +4% RERA Registration fees</td>
								<td>Date of Purchase</td>
							</tr>
							<tr>
								<td width="200">2nd Installment</td>
								<td width="100">10%</td>
								<td>Within 120 Days of Sale Date</td>
							</tr>
							<tr>
								<td width="200">3rd Installment</td>
								<td width="100">10%</td>
								<td>Within 270 Days of Sale Date</td>
							</tr>
							<tr>
								<td width="200">4th Installment</td>
								<td width="100">10%</td>
								<td>Within 540 Days of Sale Date</td>
							</tr>
							<tr>
								<td width="200">5th Installment</td>
								<td width="100">10%</td>
								<td>Within 720 Days of Sale Date</td>
							</tr>
							<tr>
								<td width="200">6th Installment</td>
								<td width="100">40%</td>
								<td>Within 900 Days of Sale Date</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3">
					<?php get_sidebar('project'); ?>
				</div>
			</div>
		</div>

		<section class="developer-projects-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="text-center">Projects of Damac Properties</h3>
						<ul class="projects row">
							<?php for ($i = 1;$i <= 9; $i++) { ?>
							<li class="project-card col-md-4">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" class="img-responsive" />
								<div class="project-card--content">
									<h3 class="project-card--title"><a href="#">Golf Vita: Enhance your lifestyle and live lavishly</a></h3>
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
	<?php endwhile; ?>
<?php get_footer();
