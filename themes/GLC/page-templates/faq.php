<?php 
/**
 * Template Name: FAQ
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<div class="row">
	<div class="small-12 medium-8 columns">
		<div class="questions-section">
			<div class="accordion" data-accordion data-allow-all-closed="true">
			  	<div class="question accordion-item" data-accordion-item>
			    	<a href="#" class="accordion-title">What does CLA stands for?</a>
			    	<div class="accordion-content" data-tab-content>
			      		CLA stands for Global Canlink Learning Centre.
			    	</div>
			  	</div>
			  	<div class="question accordion-item" data-accordion-item>
			    	<a href="#" class="accordion-title">What does CLA stands for?</a>
			    	<div class="accordion-content" data-tab-content>
			      		CLA stands for Global Canlink Learning Centre.
			    	</div>
			  	</div>
			</div>
		</div>
	</div>
	<?php get_template_part( 'template-parts/notification-section'); ?>
</div>
<?php get_footer(); ?>