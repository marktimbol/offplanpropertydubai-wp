<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>			
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-project-carousel">
						<div class="carousel-cell">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
						</div>
						<div class="carousel-cell">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/slide.jpeg" alt="" title="" />
						</div>						
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php get_sidebar(); ?>
<?php get_footer();
