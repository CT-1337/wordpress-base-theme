<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();

get_template_part( 'template-parts/layouts/article-default', null, array(
    'post_id' => $post_id,
));

get_footer();
