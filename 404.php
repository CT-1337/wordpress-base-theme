<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package
 */

get_header();

?>

	<div class="page-content page page-404" id="content">

        <div class="container">

	       <div class="entry-title-container">

                <h1 class="entry-title"><?php esc_html_e( 'Oops! We could not find that page.' ); ?></h1>
            </div>

            <h2>404 Error:</h2>

            <p><?php esc_html_e( 'Try using the search below to try again.', '{{theme-name}}' ); ?></p>
            <?php get_search_form();?>

    	</div>
    </div>


<?php
get_footer();

