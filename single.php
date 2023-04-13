<?php get_header(); ?>

<section class="theContent">
    <div class="container">
        <div class="lead">
            <h1><?php the_title();?></h1>
            <p><?php echo get_the_excerpt(); ?></p>
        </div>
        
        <div class="info">
            <div class="author">
                 <?php
                    $image = get_field('latest_img');
                    if(!empty($image)):
                ?>
                <img src="<?php echo esc_url($image['url']) ?>" alt="">
                <?php endif; ?>
                <ul>
                    <?php 
                        if( have_rows('latest_tags')):
                            while( have_rows('latest_tags')): the_row();
                        ?>
                    <?php 
                        $sub_value = get_sub_field('tag_icons');
                        $link = get_sub_field('tag_labels');
                    ?>
                    <i class="<?php echo $sub_value?>"></i><?php echo $link?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="details">
                <p><?php the_content(); ?></p>
            </div>
        </div>

        
</section>





<?php get_footer(); ?>