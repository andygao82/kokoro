<?php
/* Template Name: Contact Page */
get_header();

?>
<?php

?>

<?php $img_path = get_template_directory_uri('/'); ?>
<section class="banner" id="contact-banner"></section>

<section class="title">
    <div class="wrapper">
        <h1 class="page-title"><span><?php the_title() ?></span></h1>
        <div class="page-brief">
            <p>We at Kokoro firmly believe in doing everything we can to ensure our customers' satisfaction.</p>
            <p>If you need to get in contact with us, then please don't hesitate to contact us. </p>
        </div>
    </div>
</section>
<section class="contact-form">
    <div class="wrapper">
        <div class="inner-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="86" title="Contact form 1"]')?>
        </div>
    </div>
</section>
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.7264576697403!2d144.99201531532157!3d-37.91345597973453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad668d27616ee21%3A0x4ecee6ad5f732097!2s39A+Church+St%2C+Brighton+VIC+3186!5e0!3m2!1sen!2sau!4v1566395148266!5m2!1sen!2sau" width="100%" frameborder="0" style="border:0; height: 60vh;" allowfullscreen></iframe>
</section>
<section class="contact" id="contact">
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="heading">Opening Hours</div>
            <h3>Sunday - Thursday / 9am - 9:30pm<br>
                Friday - Saturday / 9am - 10:00pm</h3>
            <div class="contact-info">
                <span>39A Church Street, Brighton VIC 3186</span>
            </div>

            <div class="contact-info">
                <a href="tel:0395910338">03 9591 0338</a>
            </div>

            <div class="contact-info">
                <a href="mailto:eat@kokorosushi.com.au">eat@kokorosushi.com.au</a>
            </div>

            <div class="social-media">
                <div class="sm">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri('/'); ?>/images/FB-icon.svg" alt="Kokoro Sushi">
                    </a>
                </div>
                <div class="sm">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri('/'); ?>/images/INS-icon.svg" alt="Kokoro Sushi">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>



