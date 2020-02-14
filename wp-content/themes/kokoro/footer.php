<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kokoro
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		    <span>&copy; <?= date('Y')?> Kokoro Sushi, All Rights Reserved.</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<script>
    jQuery(document).ready(function($){
        $('#banner').flexslider({
            animation: "fade"
        });
        $('#burger-icon').click(function (e) {
            e.preventDefault();
            $(this).toggleClass('open');
            $('.main-navigation').toggleClass('active');
        });
        $('.menu .wrapper').click(function(){
            $(this).parents('.menu').find('.overlay').fadeIn();
        });
        $('.menu-close').click(function () {
            $('.overlay').fadeOut();
        });

        $('.menu-item-12').click(function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $('#about').offset().top - 50
            }, '2500');
        });
        $('.menu-item-13').click(function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $('#menus').offset().top - 50
            }, '2500');
        });
        $('.menu-item-14').click(function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $('#contact').offset().top - 50
            }, '2500');
        });
    });
</script>

