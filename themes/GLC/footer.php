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
								<div class="small-6 large-3 columns">
									<div class="contact-location" data-equalizer-watch>
										<p class="location">Coquitlam Address</p>
										<p class="address">
											230-3030 Lincoln Ave,<br>
											Coquitlam, BC <br>
											Canada, V3B 6B4
										</p>
										<p class="phone">
											Office: 604-945-0809 <br>
											Korean: 778-873-6964 <br>
											Mandarin: 778-999-1689 
										</p>
									</div>
								</div>
								<div class="small-6 large-3 columns">
									<div class="contact-location" data-equalizer-watch>
										<p class="location">Maple Ridge Address</p>
										<p class="address">
											1075-20575 Thorne Ave, <br> 
											Maple Ridge, BC <br>
											Canada V2X 9A6
										</p>
										<p class="phone">
											Office:  604-465-9912 <br>
										</p>
									</div>
								</div>
								<div class="small-6 large-3 columns">
									<div class="contact-location" data-equalizer-watch>
										<p class="location">Seoul Office</p>
										<p class="address">
											7302 Hongtian Business Center, Xiangjunnanli, <br> 
											Dongsanhuan, Chaoyang, <br>
											Beijing, China
										</p>
										<p class="phone">
											Office: 8610-52853560/52853563 
										</p>
										<p class="phone">				
											Office Director Juliana Kim: 18515352529
										</p>
									</div>
								</div>
								<div class="small-6 large-3 columns">
									<div class="contact-location" data-equalizer-watch>
										<p class="location">Beijing Office</p>
										<p class="address">
											7302 Hongtian Business Center, Xiangjunnanli, <br> 
											Dongsanhuan, Chaoyang, <br>
											Beijing, China
										</p>
										<p class="phone">
											Office: 8610-52853560/52853563
										</p>
										<p class="phone">
											Office Director
											Li Zhelin (Jane): 18515352529
										</p>
									</div>
								</div>
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
