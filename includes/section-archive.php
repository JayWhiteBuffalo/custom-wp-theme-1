<?php if( have_posts() ): while ( have_posts() ): the_post();?>

    <div class="card mb-3">
        <div class="card-body d-flex justify-center align-center gap-4">
            <div class="">
                <h3><?php the_title();?></h3>
                <?php the_excerpt();?>
                <a class="btn btn-success" href="<?php the_permalink();?>">Read more</a>
            </div>
            <div class="">
                <!-- Code for thumbail Image -->
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="img-fluid blog-large">
                <?php endif;?>
                <!-- Code for thumbail Image -->
            </div>
        </div>
    </div>

<?php endwhile; else: endif;?>