<?php get_header(); ?>

<?php get_template_part( 'template-parts/title-section'); ?>

<div id="page" role="main">

<?php while ( have_posts() ) : the_post(); ?>
    <div class="row">
        <div class="small-12 medium-8 columns">
            <div class="content-section clearfix">
                <?php the_content(); ?>
            </div>
        </div>
        <?php get_template_part( 'template-parts/notification-section'); ?>
    </div>
<?php endwhile;?>

 </div>

<?php get_footer();
