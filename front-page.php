<?php get_header();?>

<?php get_template_part('includes/section','hero');?>


<section class="page-wrap">

    <div>

        <?php get_template_part('includes/section', 'services')?>

        <?php get_template_part('includes/section', 'testimonials')?>

        <?php get_template_part('includes/section', 'contact');?>

        <!-- <h1><?php the_title();?></h1>

        <?php get_template_part('includes/section','content');?> -->


    </div>
</section>

<?php get_footer();?>