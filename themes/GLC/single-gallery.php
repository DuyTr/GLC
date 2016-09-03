<?php get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>
<?php $images = get_field('gallery'); 
	if( $images ): ?>
		<div class="gallery-content">
			<div class="row">
				<div class="small-12 medium-8 columns">
				    <div class="row">
				        <?php foreach( $images as $image ): ?>
				            <div class="small-12 medium-6 end columns">
				                <a class="gallery-image" href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				            </div>
				        <?php endforeach; ?>
				    </div>
				</div>
				<?php get_template_part( 'template-parts/notification-section'); ?>
			</div>
		</div>
	<?php endif; ?> 
<?php get_footer(); ?>