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
						<div class="footer-top panel">
							<div class="row">
								<div class="small-12 medium-6 columns">
									<p class="footer-title-location">Our Locations</p>
									<div class="row">
										<div class="small-6 columns">
											<div class="contact-location">
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
										<div class="small-6 columns">
											<div class="contact-location">
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
									</div>
								</div>

								<div class="small-12 medium-6 columns">
									<p class="footer-title-sitemap">Sitemap</p>
									<div class="row">
										<div class="small-6 columns">
											<div class="sitemap-column">
												<ul class="menu">
													<li>Home</li>
													<li>About Us</li>
													<li>Gallery</li>
													<li>Community</li>
												</ul>
											</div>
										</div>
										<div class="small-6 columns">
											<div class="sitemap-column">
												<ul class="menu">
													
													<li>
														What is SSAP?
														<ul class="submenu">
															<li>qualified school</li>
															<li>proven homestay</li>
															<li>systematic mangement</li>
															<li>education programs</li>
														</ul>
													</li>
													
													<li>My Page</li>
													<li>Contact Us</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer-bottom">
							<div class="row small-12 columns">
								<p>&#169; <?php echo date("Y"); ?> GLC. All Rights Reserved</p>
								<p class="credit">Website by DMW Team</p>
							</div>
						</div>
					</footer>
				</div>
			

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
