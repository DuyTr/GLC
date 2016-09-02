<?php 
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>


<div class="row">
	<div class="small-12 medium-8 columns">
		<div class="contact-section">
			<?php the_field('contact_form'); ?>
			<p class="social-media">Follow us on: <i class="fa fa-facebook-official" aria-hidden="true"></i></p>
			<p>Email Us: <a href="mailto:info@glcedu.ca">info@glcedu.ca</a></p>
		</div>
		<div class="medium-4 columns"></div>
	</div>
</div>

<?php get_footer(); ?>