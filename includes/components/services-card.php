<section class="service-card">
    <div class="card-content">
        <?php if (has_post_thumbnail()) : ?>
            <div class="service-image">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        
        <div class="service-info">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="service-link">Learn More</a>
        </div>
    </div>
</section>
