<?php 
/**
 * Template Name: FAQ
 */

get_header(); ?>

<div class="row">
	<div class="small-12 columns">
		<div class="title-section panel">
			<h1><?php the_title(); ?></h1>
			<div class="row">
				<div class="small-12 medium-10 large-8 end columns">
					<div class="intro-content">
						<p>General Question and Answer Section. Parents and students can find any the answer for any questions about school life, homestay life and daily activities. If you have any other question, feel free to <a href="">contact us</a>!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="small-12 columns">
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
</div>
<?php get_footer(); ?>