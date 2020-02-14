<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kokoro
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <h1 class="single-title"><span><?php the_title(); ?></span></h1>
            <div class="single-image">
                <?php
                    the_post_thumbnail();
                ?>
            </div>
           <div class="post-content">
               <?php
                    the_content();
               ?>
           </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
