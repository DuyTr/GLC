<?php get_header(); ?>

<!-- Slider Section -->
<div class="gradient ltr"></div>
<div class="slider-container">

	<?php if( have_rows('slider') ): ?>
		
		<div class="homepage-slider">
			<?php while ( have_rows('slider') ) : the_row();?>
				<div class="slider-content">
					<?php 
						$university_image = get_sub_field('school_image');
						$university_image_url = $university_image['sizes'][ 'large' ];
						$person_portrait  = get_sub_field('person_portrait');
						$person_portrait_url = $person_portrait['sizes'][ 'large' ];
						?>

					<div class="row medium-collapse slider-row">
						<div class="small-12 medium-7 columns">
							<div class="school image-container" style="background-image: url('<?php echo $university_image_url; ?>')">
								
							</div>
						</div>
						<div class="small-12 medium-5 columns">
							<div class="personal-quote-container">
								<div class="personal-quote">
									<img class="portrait" src="<?php echo $person_portrait_url; ?>" alt="<?php echo $person_portrait['alt']; ?>"/>
									<p class="quote"><?php the_sub_field('person_quote'); ?></p>
									<p class="name"><?php the_sub_field('person_name'); ?></p>
									<p class="titles"><?php the_sub_field('person_title'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			
		</div>

	<?php endif; ?>
</div>
<div class="gradient rtl"></div>

<div class="panel about">
	<div class="row">
		<div class="small-12 columns text-center">
			<h1 class="section-title"><a href="">About <span>GLC</span></a></h1>
			<p class="headline"><?php the_field('headlines_text'); ?></p>
		</div>
	</div>
	<?php if( have_rows('value_section') ): ?>
		<div class="row">
			<?php while ( have_rows('value_section') ) : the_row(); ?>
				<?php  
					$value_image = get_sub_field('section_image');
					$value_image_url = $value_image['sizes'][ 'large' ];
				?>
				<div class="smal-12 large-4 columns">
					<div class="value clearfix">
						<div class="image-container" style="background-image: url('<?php echo $value_image_url ?>')">
							<div class="overlay"></div>
							<h2><?php the_sub_field('section_name'); ?></h2>
						</div>
						<div class="text-container">
							<p><?php the_sub_field('section_text'); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>

		</div>
	<?php endif; ?>
</div>


<!--Latest News -->
<div class="panel latest">
	<div class="row">
		<h1 class="section-title">Featured <span>news</span></h1>
		<?php if( have_rows('feature_new') ): 
			while ( have_rows('feature_new') ) : the_row();	?>
				<div class="small-12 large-4 columns no-padding-medium-up" style="overflow:hidden">
					<div class="image-container-wrapper">	
						<?php  
							$new_image = get_sub_field('new_section_image');
							$new_image_url = $new_image['sizes'][ 'large' ];
						?>
						<div class="image-container" style="background-image: url('<?php echo $new_image_url ?>')">
							<div class="overlay text-center">
								<h2><?php the_sub_field('section_name'); ?></h2>
							</div>
						</div>
						<a href="">
							<div class="info-box-container">
								<div class="info-box">
									<h2><a href="<?php the_sub_field('section_link'); ?>"><?php the_sub_field('section_name'); ?></a></h2>
									<p><?php the_sub_field('section_intro'); ?></p>
									<div class="btn-container">
										<a href="<?php the_sub_field('section_link'); ?>" class="btn">Learn More</a>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php endwhile; 
		endif; ?>	
	</div>
</div>



<!-- Value Section -->



<?php get_footer();
