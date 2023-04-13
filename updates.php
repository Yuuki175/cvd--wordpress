<?php

    /**
     * template name: Updates
     */

?>
<?php get_header(); ?>

<section class="updates">
    <div class="container">
        <div class="updates__title">
            <h1><?php echo get_field('latest_title') ?></h1>
            <p><?php echo get_field('latest_subtitle') ?></p>

        </div>
        <div class="updates__wrapper">
            <div class="updates__left">
            <?php
                $args = array(
                    'post_type' => 'latestPost',
                    'posts_per_page' => 2,
                );
                $newQuery = new WP_Query($args)
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <div class="left__item">
                    <?php
                        $image = get_field('latest_img');
                        if(!empty($image)):
                    ?>
                    <img src="<?php echo esc_url($image['url']) ?>" alt="">
                    <?php endif; ?>    
                    <div class="updates__author">
                        <ul>
                            <li>
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
                                
                            </li>
                        </ul>

                    </div>
                    <div class="updates__text">
                        <h3><?php the_title(); ?></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat distinctio reprehenderit nihil eos exercitationem suscipit voluptatibus necessitatibus, dolorem praesentium eius! Molestiae consectetur, explicabo animi ad accusamus debitis inventore quisquam ipsum possimus ipsam voluptates harum? Quisquam facilis voluptatum reiciendis aspernatur ducimus quo nobis, rerum ipsum vero, blanditiis, quos odio nostrum. Dolorum!</p>
                        <a href="<?php echo the_permalink(); ?>">Read more...</a>
                            
                    </div>
                </div>
                
            <?php 
                endwhile;
                else:
                    echo "no available content";
                endif;
                    wp_reset_postdAta();
            ?>

            </div>
            <div class="updates__right">
                <div class="updates__categ bb-1">
                    <h3>CATEGORIES</h3>
                    <table>
                        <tr>
                            <td>Web Design</td>
                            <td>(2)</td>
                        </tr>
                        <tr>
                            <td>Web Development</td>
                            <td>(3)</td>
                        </tr>
                        <tr>
                            <td>Wire Frame</td>
                            <td>(1)</td>
                        </tr>
                        <tr>
                            <td>Vector & Logo</td>
                            <td>(5)</td>
                        </tr>
                        <tr>
                            <td>Social Media</td>
                            <td>(2)</td>
                        </tr>
                    </table>
                </div>
                <div class="updates__rp bb-1">
                    <h3>RECENT POST</h3>
                        
                    <?php
                        $args = array(
                            'post_type' => 'recentPost',
                            'posts_per_page' => -1,
                        );
                        $newQuery = new WP_Query($args)
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                        <div class="rp__item">
                            <?php echo get_the_post_thumbnail(); ?>
                            <div class="rp__item__text">
                                <h4><?php the_excerpt(); ?></h4>
                                <p> <?php echo get_the_time('F j, Y');?></p>
                            </div>                          
                        </div>

                    <?php       
                        endwhile;
                        else:
                            echo "no available content";
                        endif;
                            wp_reset_postdAta();
                    ?>

                </div>
                <div class="updates__tags">
                    <h3>TAGS</h3>
                    <div class="tags__item">    
                        <a href="" class="btn bg-light">WEB DESIGN</a>             
                        <a href="" class="btn bg-light">WIRE FRAME</a>
                        <a href="" class="btn bg-light">WEB DEVELOPMENT</a>
                        <a href="" class="btn bg-light">LOGO</a>
                        <a href="" class="btn bg-light">VECTOR</a>
                        <a href="" class="btn bg-light">SOCIAL MEDIA</a>                                   
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>

<?php include 'contactUs.php'; ?>


<?php get_footer(); ?>