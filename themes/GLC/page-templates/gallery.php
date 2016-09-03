<?php 
/**
 * Template Name: Gallery Archive
 */

get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<div class="gallery-section">
	<div class="row">
		<div class="small-12 columns" data-equalizer>
			<a href="http://localhost:8888/GLC/gallery/2016-spring-program-ielts-exam-preparation/" class="gallery">
				<div class="row">
					<div class="small-12 medium-5 columns">
						<div class="image-container" data-equalizer-watch style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/placeholder_images/english_prepare1.jpg')"></div>
					</div>
					<div class="small-12 medium-7 columns">
						<div class="gallery-info" data-equalizer-watch>
							<h3>2016 Spring Program - IELTS Exam preparation</h3>
							<p>GLC invites all of our students to our workshop that is held every month. Students will earn valuable assets through our workshop.</p>
							<div class="btn">Learn More</div>
						</div>
					</div>
				</div>
			</a>

			<div class="gallery">
				<div class="row">
					<div class="small-12 medium-5 columns">
						<div class="image-container" data-equalizer-watch style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/placeholder_images/esl2.jpg')"></div>
					</div>
					<div class="small-12 medium-7 columns">
						<div class="gallery-info" data-equalizer-watch>
							<h3>GLC Workshop Pictures - High school, College, University, ESL students</h3>
							<p>GLC invites all of our students to our workshop that is held every month. Students will earn valuable assets through our workshop.</p>
							<div class="btn">Learn More</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>