<?php
/**
 * 
 * The template for displaying all pages
 *
 */

get_header(); 

while ( have_posts() ) : the_post();

?>

    <div class="page-content page" id="content">

        <div class="container">

            <div class="entry-title-container">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>

             <?php the_content(); ?>

        </div>

    </div>

<?php

endwhile;

get_footer();

?>


