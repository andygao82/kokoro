<?php
/* Template Name: Home Page */
get_header();

?>
<?php
$_slide_img_1 = get_field('slider_image_1');
$_slide_img_2 = get_field('slider_image_2');
$_slide_img_3 = get_field('slider_image_3');
$_slide_img_4 = get_field('slider_image_4');
$_slide_img_5 = get_field('slider_image_5');
$_slide_img_6 = get_field('slider_image_6');

$_slide_title_1 = get_field('slider_title_1');
$_slide_title_2 = get_field('slider_title_2');
$_slide_title_3 = get_field('slider_title_3');
$_slide_title_4 = get_field('slider_title_4');
$_slide_title_5 = get_field('slider_title_5');
$_slide_title_6 = get_field('slider_title_6');

$_slide_food_name_1 =get_field('slider_food_name_1');
$_slide_food_name_2 =get_field('slider_food_name_2');
$_slide_food_name_3 =get_field('slider_food_name_3');
$_slide_food_name_4 =get_field('slider_food_name_4');
$_slide_food_name_5 =get_field('slider_food_name_5');
$_slide_food_name_6 =get_field('slider_food_name_6');

?>
<section class="banner">
    <div class="flexslider" id="banner">
        <ul class="slides">
            <li>
                <img src="<?= $_slide_img_1?>" alt="<?= $_slide_food_name_1?>" />
                <h2><?php echo $_slide_title_1; ?></h2>
                <h4><?php echo $_slide_food_name_1; ?></h4>
            </li>
            <li>
                <img src="<?= $_slide_img_2?>" alt="<?= $_slide_food_name_2?>" />
                <h2><?php echo $_slide_title_2; ?></h2>
                <h4><?php echo $_slide_food_name_2; ?></h4>
            </li>
            <li>
                <img src="<?= $_slide_img_3?>" alt="<?= $_slide_food_name_3?>" />
                <h2><?php echo $_slide_title_3; ?></h2>
                <h4><?php echo $_slide_food_name_3; ?></h4>
            </li>
            <li>
                <img src="<?= $_slide_img_4?>" alt="<?= $_slide_food_name_4?>" />
                <h2><?php echo $_slide_title_4; ?></h2>
                <h4><?php echo $_slide_food_name_4; ?></h4>
            </li>
            <li>
                <img src="<?= $_slide_img_5?>" alt="<?= $_slide_food_name_5?>" />
                <h2><?php echo $_slide_title_5; ?></h2>
                <h4><?php echo $_slide_food_name_5; ?></h4>
            </li>
            <li>
                <img src="<?= $_slide_img_6?>" alt="<?= $_slide_food_name_6?>" />
                <h2><?php echo $_slide_title_6; ?></h2>
                <h4><?php echo $_slide_food_name_6; ?></h4>
            </li>
        </ul>
    </div>
</section>
<?php $img_path = get_template_directory_uri('/'); ?>

<section class="about" id="about">
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="left">
                <img src="<?php echo get_template_directory_uri('/'); ?>/images/chopstick.svg" alt="Kokoro Sushi">
                <img src="<?php echo get_template_directory_uri('/'); ?>/images/Vertical-logo.svg" alt="Kokoro Sushi">
            </div>
            <div class="right">
                <div class="wrapper">
                    <h1><span>About Kokoro Sushi</span></h1>
                    <div class="about-content">
                        <?= get_field('about_us_content')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menus" id="menus">
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="menu">
                <div class="overlay">
                    <div class="overlay-inner">
                        <span class="menu-close">
                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/menu-close.svg" alt="Kokoro Sushi">
                        </span>
                        <img src="<?= get_field('menu_pop_1')?>" alt="<?= get_field('menu_title_1') ?>" />
                    </div>
                </div>
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <img src="<?= get_field('menu_image_1')?>" alt="<?= get_field('menu_title_1') ?>" />
                        <div class="info">
                            <div class="info-wrapper">
                                <h2><?= get_field('menu_title_1') ?></h2>
                                <div class="info-content">
                                    <?= get_field('menu_description_1') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-wrapper">
            <div class="menu">
                <div class="overlay">
                    <div class="overlay-inner">
                        <span class="menu-close">
                                    <img src="<?php echo get_template_directory_uri('/'); ?>/images/menu-close.svg" alt="Kokoro Sushi">
                                </span>
                        <img src="<?= get_field('menu_pop_2')?>" alt="<?= get_field('menu_title_2') ?>" />
                    </div>
                </div>
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <img src="<?= get_field('menu_image_2')?>" alt="<?= get_field('menu_title_2') ?>" />
                        <div class="info">
                            <div class="info-wrapper">
                                <h2><?= get_field('menu_title_2') ?></h2>
                                <div class="info-content">
                                    <?= get_field('menu_description_2') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-wrapper">
            <div class="menu">
                <div class="overlay">
                    <div class="overlay-inner">
                                <span class="menu-close">
                                    <img src="<?php echo get_template_directory_uri('/'); ?>/images/menu-close.svg" alt="Kokoro Sushi">
                                </span>
                        <img src="<?= get_field('menu_pop_2')?>" alt="<?= get_field('menu_title_2') ?>" />
                    </div>
                </div>
                <div class="wrapper">
                    <div class="inner-wrapper">

                        <img src="<?= get_field('menu_image_3')?>" alt="<?= get_field('menu_title_3') ?>" />
                        <div class="info">
                            <div class="info-wrapper">
                                <h2><?= get_field('menu_title_3') ?></h2>
                                <div class="info-content">
                                    <?= get_field('menu_description_3') ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
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

            <div class="contact-info" style="display: none">
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

