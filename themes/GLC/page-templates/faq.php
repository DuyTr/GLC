<?php 
/**
 * Template Name: FAQ
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<div class="faq-page-content">
	<div class="row">
		<div class="small-12 medium-8 columns">
			<div class="questions-section">
				<div class="accordion" data-accordion data-allow-all-closed="true">
					<?php if( have_rows('qa_question') ):
 						while ( have_rows('qa_question') ) : the_row(); ?>

						  	<div class="question accordion-item" data-accordion-item>
						    	<a href="#" class="accordion-title"><?php the_sub_field('question'); ?></a>
						    	<div class="accordion-content" data-tab-content>
						      		<?php the_sub_field('answer'); ?>
						    	</div>
						  	</div>
						<?php endwhile; 
					endif;?>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/notification-section'); ?>
	</div>
</div>
<?php get_footer(); ?>