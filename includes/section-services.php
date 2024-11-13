<section class="services-section-wrap">
    <div class="container fade-in">
        <h2>Our Services</h2>

        <div class="services-list">
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1, // Display all services
            );
            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
                    get_template_part('includes/components/services', 'card');
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No services found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>
