<section class="testimonial-section">
    <div class="testimonial-slider fade-in">
        <?php
        $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => -1,
        );
        $testimonial_query = new WP_Query($args);
        $first_slide = true; // Variable to set the active class for the first slide

        if ($testimonial_query->have_posts()) :
            while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                $author_name = get_field('author_name'); // ACF field for author name
                $author_position = get_field('author_position'); // ACF field for author position
                $testimonial_text = get_field('testimonial_text'); // ACF field for testimonial text
                $author_image = get_field('author_image'); // ACF field for author image
        ?>
                <div class="testimonial-slide <?php echo $first_slide ? 'active' : ''; ?>">
                    <div class="testimonial-content">
                        <?php if ($author_image) : ?>
                            <img src="<?php echo esc_url($author_image['url']); ?>" alt="<?php echo esc_attr($author_name); ?>" class="author-image">
                        <?php endif; ?>
                        <p class="testimonial-text"><?php echo esc_html($testimonial_text); ?></p>
                        <h4 class="author-name"><?php echo esc_html($author_name); ?></h4>
                        <p class="author-position"><?php echo esc_html($author_position); ?></p>
                    </div>
                </div>
        <?php
                $first_slide = false; // Set to false after the first iteration
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No testimonials found.</p>';
        endif;
        ?>
    </div>
    <!-- Slider Controls -->
    <div class="testimonial-controls">
        <button class="prev-slide">&laquo;</button>
        <button class="next-slide">&raquo;</button>
    </div>
</section>
