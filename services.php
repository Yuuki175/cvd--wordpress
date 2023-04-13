<?php

    /**
     * template name: Services
     */

?>
<?php get_header(); ?>

<?php
    $args = array(
        'post_type' => 'servicesPost',
        'posts_per_page' => -1,
    );
    $newQuery = new WP_Query($args)
?>
<?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

<section class="<?php echo get_field("class_name")?>">
    <div class="container">
        <div class="service__wrapper">
            <div class="web">
                <div class="service__text">
                    <h1><?php the_title(); ?></h1>
                    <p> <?php the_content(); ?></p>
                    <div class="price">
                        <h4>Price starts at</h4>
                        <h2><?php echo get_field("price"); ?></h2>
                        <h5><i>Price may vary depending on<br>the design and development</i></h5>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>./img/services/unsplash_v9FQR4tbIq8.png" alt="">
            </div>
            
        </div>
    </div>
    <div class="down">
        <a href=""><i class="fa-solid fa-angle-down"></i></a>
        </div>
</section>

<?php 
    endwhile;
    else:
        echo "no available content";
    endif;
        wp_reset_postdAta();
?>

<?php include 'contactUs.php'; ?>

<?php get_footer(); ?>