<?php

    /**
     * template name: Contacts
     */

?>
<?php get_header(); ?>


<section class="contacts">
    <div class="container">
        <div class="contacts__title">
            <h1>Contact</h1>
        </div>
        <div class="contacts__wrapper">
            <div class="contacts__page__left">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi reprehenderit eum officiis dolorum modi enim.</p>
                <ul>
                    <li><i class="fa-solid fa-phone-flip"></i>
                        <h6>+63 987 654 3210</h6>
                    </li>
                    <li><i class="fa-solid fa-envelope"></i>
                        <h6>inquire@creativevisualdesign.com</h6>
                    </li>
                    <li><i class="fa-solid fa-map-pin"></i>
                        <h6>Baloc Road, Brgy. San Ignacio, San Pablo, Laguna, 4000</h6>
                    </li>
                </ul>
                <div class="contacts__page__itemL">
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

            <div class="contacts__page__right">
                <style> 

                    input[type=text] {
                        width: 100%;
                        padding: 2rem 2rem;
                        border-radius: 1rem; 
                        margin: .1px 0;
                        box-sizing: border-box;
                    }
                    input[type=email] {
                        width: 100%;
                        padding: 2rem 2rem;
                        border-radius: 1rem; 
                        margin: .1px 0;
                        box-sizing: border-box;
                    }
                    textarea {
                        width: 100%;
                        padding: 2rem 2rem;
                        border-radius: 1rem; 
                        margin: .1px 0;
                        box-sizing: border-box;
                    }
                    input[type=submit] {
                        padding: 1.2rem 1.5rem;
                        border-radius: 5rem;
                        display: inline-block;
                        border: 1px solid transparent;
                        background: #ffa700;
                        color: #ffffff;
                        transition: 300ms;
                        font-size: 1.5rem;
                    }
                    input[type=email], input[type=text], textarea {
                        margin-bottom: 1rem;
                    }
                </style>
                    <!-- <form>
                        <label for="fname">NAME</label>
                        <input type="text" id="fname" name="fname" placeholder="NAME..">

                        <label for="email">EMAIL</label>
                        <input type="text" id="email" name="email" placeholder="EMAIL..">

                        <label for="sms">MESSAGE</label>
                        <input type="text" id="sms" name="sms" style="height: 18rem;" placeholder="MESSAGE..">
                    </form> -->
                    <?php echo do_shortcode('[contact-form-7 id="153" title="Contact form 1"]'); ?>

                <!-- <div class="contacts__page__itemR">
                    <a href=""class="btn bg--yellow">SEND MESSAGE</a>
                </div> -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>