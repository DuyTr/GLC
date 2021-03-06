<?php 
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<div class="contact-page-content">	
	<div class="row">
		<div class="small-12 medium-8 columns">
			<div class="contact-section">
				<?php the_field('contact_form'); ?>
				<p class="social-media">Follow us on: <a href="<?php the_field('facebook_link'); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></p>
				<p>Email Us: <a href="mailto:<?php the_field('email_link'); ?>"><?php the_field('email_link'); ?></a></p>
			</div>
		</div>
		<?php get_template_part( 'template-parts/notification-section'); ?>
	</div>
</div>

<?php get_footer(); ?>