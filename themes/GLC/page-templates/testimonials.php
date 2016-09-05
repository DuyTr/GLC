<?php 
/**
 * Template Name: Testimonials
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<div class="testimonial-page-content">	
	<div class="row">
		<div class="small-12 medium-8 columns">
			<div class="testimonials-section">
				<?php  
					if( have_rows('testimonial') ): 
						while( have_rows('testimonial') ): the_row(); ?>
							<div class="testimonial">
								<p class="date"><?php the_sub_field('date'); ?></p>
								<p><?php the_sub_field('testimonial_text'); ?></p>
								<?php  
									if( have_rows('videos') ): 
										while( have_rows('videos') ): the_row(); ?>
											<div class="embed-container">
												<?php the_sub_field('video'); ?>
											</div>
										<?php endwhile; 
									endif;?>
							</div>
						<?php endwhile; 
					endif;?>
			</div>
		</div>
		<?php get_template_part( 'template-parts/notification-section'); ?>
	</div>
</div>

<?php get_footer(); ?>