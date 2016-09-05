<?php 
/**
 * Template Name: About Us
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<div class="principal-section">	
	<div class="row">
		<div class="small-12 columns">
			<h2><?php the_field('about_cta_text') ?></h2>
		</div>
		<?php
			if( have_rows('principal') ):
  				while ( have_rows('principal') ) : the_row(); ?>
					<div class="small-12 medium-6 columns">
						<div class="principal">
							<?php  
								$portrait  = get_sub_field('portrait');
								$portrait_url = $portrait['sizes'][ 'medium' ];
							?>
							<img class="portrait" src="<?php echo $portrait_url; ?>" alt="<?php echo $portrait['alt']; ?>"/>
							<p class="name"><?php the_sub_field('name'); ?></p>
							<p class="title"><?php the_sub_field('title'); ?></p>
						</div>
					</div>
				<?php endwhile; 
			endif;?>
	</div>
</div>
<?php get_footer(); ?>