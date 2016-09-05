<?php 
/**
 * Template Name: Gallery Archive
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>
<?php  
	$args = array(
		'post_type' => 'gallery',
		'posts_per_page' => -1,
		'order_by' => 'menu_order',
		'order' => 'ASC'
	); 
	$gallery_posts = new wp_query($args);
?>

<div class="gallery-section">
	<div class="row">
		<div class="small-12 columns" data-equalizer>

			<?php if($gallery_posts->have_posts()) : 
      			while($gallery_posts->have_posts()) : $gallery_posts->the_post(); ?>
					<div class="gallery">
						<div class="row">
							<div class="small-12 medium-5 columns">
					
								<a href="<?php the_permalink(); ?>" class="image-container" data-equalizer-watch style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')"></a>
							</div>
							<div class="small-12 medium-7 columns">
								<div class="gallery-info" data-equalizer-watch>
									<h3><?php the_title(); ?></h3>
									<p><?php the_field('page_intro'); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				<?php  endwhile;
			endif;?>

		</div>
	</div>
</div>

<?php get_footer(); ?>