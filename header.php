<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/WebSite">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head();?>

</head>

<body <?php body_class(); ?> >
	<?php echo render_{{theme_name}}_theme_tag_manager()['body'];?>
	<a class="skip-link visually-hidden" href="#content"><?php esc_html_e( 'Skip to content', '{{theme-name}}' ); ?></a>

	<header>
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/main-nav' );?>
		</div>

	</header>


