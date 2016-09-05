<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<div class="gradient ltr"></div>
				<div class="footer-location panel">
					<div class="row">
						<div class="small-12 columns">
							<div class="row" data-equalizer data-equalize-by-row="true">
								<?php if( have_rows('location', 'option') ): 
									while ( have_rows('location', 'option') ) : the_row();?>
										<div class="small-6 large-3 end columns">
											<div class="contact-location" data-equalizer-watch>
												<p class="location"><?php the_sub_field('location_name');?></p>
												<p><?php the_sub_field('location_info'); ?></p>
											</div>
										</div>
									<?php  endwhile;
								endif; ?>\
							</div>
						</div>
					</div>
				</div>
				<div class="footer-sitemap panel">
					<div class="row" >
						<div class="small-12 large-6 columns">
							<div class="row">
								<div class="small-12 medium-6 columns txt-center">
									<div class="sitemap-col">
										<p class="title">Official IELTS Venues</p>
										<p>Canada College</p>
									</div>
								</div>
								<div class="small12 medium-6 columns txt-center">
									<div class="sitemap-col">
										<p class="title">SSAP</p>
										<p>Qualified Schools</p>
										<p>Proven Homestay</p>
										<p>Systematic Management System</p>
										<p>Education Programs</p>
									</div>
								</div>
							</div>
						</div>
						<div class="small-6 medium-push-6 large-push-0 large-3 columns txt-center">
							<div class="sitemap-col">
								<p class="title">Sitemap</p>
								<?php wp_nav_menu('primary'); ?>
							</div>
						</div>
						<div class="small-6 medium-pull-6 large-pull-0 large-3 columns txt-center">
							<h1>Global Canlink Learning Centre</h1>
						</div>
					</div>
				</div>
				<div class="gradient rtl"></div>
				<div class="footer-bottom">
					<div class="row small-12 columns">
						<p>&#169; <?php echo date("Y"); ?> GLC. All Rights Reserved</p>
						<p class="credit">Website by DMW Team</p>
					</div>
				</div>
			</footer>
		</div>
			

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
