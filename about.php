<?php

    /**
     * template name: About
     */

?>
<?php get_header(); ?>

<section class="About-me">
    <div class="container">
        <div class="aboutme__wrapper">
            <div class="aboutme__TEXT">
                <div class="about--text">
                    <h3><?php echo get_field("about_pretitle") ?></h3>
                    <h1><?php echo get_field("about_title") ?></h1>
                    <p><?php echo get_field("about_paragraph") ?></p>
                </div>
                <div class="about--icon">
                    <ul>
                        <li>
                            <?php 
                                if( have_rows('about_banner_icons')):
                                    while( have_rows('about_banner_icons')): the_row();
                                ?>
                            <?php 
                                $sub_value = get_sub_field('about_icons');
                                $link = get_sub_field('about_icons_link');
                            ?>
                            <a href="<?php echo $link ?>"><i class="<?php echo $sub_value?>"></i></a>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
            
            <?php
                $image = get_field('about_image');
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']) ?>" alt="">
            <?php endif; ?>           
        </div>
    </div>
    <div class="down">
    <a href=""><i class="fa-solid fa-angle-down"></i></a>
    </div>
</section>

<section class="projects">
    <div class="container">
        <div class="project__text">
            <h2>My Recent Projects</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="project__wrapper">
            <div class="project__card">               
                    <img src="./img/about/unsplash_rN1y-_EV8kEproject1.png" alt="">
                    <div class="cards__text">
                        <h4>Frontline Business Solution, Inc.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sunt repudiandae modi natus magnam tempora in porro illum explicabo quis.</p>
                    </div>                
            </div>
            <div class="project__card">               
                <img src="./img/about/unsplash_mr4JG4SYOF8.png" alt="">
                <div class="cards__text">
                    <h4>Frontline Business Solution, Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sunt repudiandae modi natus magnam tempora in porro illum explicabo quis.</p>
                </div>                
            </div>
            <div class="project__card">               
                <img src="./img/about/unsplash_rN1y-_EV8kEproject1.png" alt="">
                <div class="cards__text">
                    <h4>Frontline Business Solution, Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sunt repudiandae modi natus magnam tempora in porro illum explicabo quis.</p>
                </div>                
            </div>
            <div class="project__card">               
                <img src="./img/about/unsplash_Cys3W7_MXDU.png" alt="">
                <div class="cards__text">
                    <h4>Frontline Business Solution, Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sunt repudiandae modi natus magnam tempora in porro illum explicabo quis.</p>
                </div>                
            </div>
            <div class="project__card">               
                <img src="./img/about/unsplash_Epw-SqZYeyw.png" alt="">
                <div class="cards__text">
                    <h4>Frontline Business Solution, Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sunt repudiandae modi natus magnam tempora in porro illum explicabo quis.</p>
                </div>                
            </div>
            <div class="project__card">               
                <img src="./img/about/unsplash_jukKJSr9FcA.png" alt="">
                <div class="cards__text">
                    <h4>Frontline Business Solution, Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sunt repudiandae modi natus magnam tempora in porro illum explicabo quis.</p>
                </div>                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
