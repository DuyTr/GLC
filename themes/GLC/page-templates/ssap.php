<?php 
/**
 * Template Name: SSAP 
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="row">
	    <div class="small-12 columns">
	        <div class="content-section">
	            <?php the_content(); ?>
	        </div>
	    </div>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>