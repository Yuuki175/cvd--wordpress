<?php wp_footer(); ?>
 <section class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="social__media">

            <?php 
            if( have_rows('the_icons')):
                while( have_rows('the_icons')): the_row();
            ?>
                <?php 
                    $sub_value = get_sub_field('icons');
                    $link_value = get_sub_field('icon_link');
                ?>

                <a href="<?php echo $link_value ?>"><i class="<?php echo $sub_value?>"></i></a>

                <?php endwhile; ?>
                <?php endif; ?>

            
                <p><?php echo get_field("footer_address")?></p>
            </div>
            <p><?php echo get_field("footer_link")?></p>
        </div>
    </div>
 </section>

<script src="./script.js"></script>