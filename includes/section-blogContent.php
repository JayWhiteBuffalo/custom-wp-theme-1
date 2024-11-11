<?php if( have_posts() ): while ( have_posts() ): the_post();?>

    <p><?php echo get_the_date('F jS, Y');?></p>



    <?php the_content();?>

    <!-- <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        echo $fname . ' ' . $lname;
    ?> -->

    <p>Posted by <?php the_author();?></p>

    <?php
        $tags = get_the_tags();
        foreach($tags as $tag):?>
            <a href="<?php echo get_tag_link($tag->term_id);?>" class="btn btn-info pt-0 px-2">
                <?php echo $tag->name;?>
            </a>
    <?php endforeach?>

    <?php
        $categories = get_the_category();
        foreach($categories as $category):?>
            <a href="<?php echo get_category_link($category->term_id);?>">
            <?php echo $category->name;?>
            </a>
    <?php endforeach?>

    <?php comments_template();?>


<?php endwhile; else: endif;?>