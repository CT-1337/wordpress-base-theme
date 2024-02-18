<!doctype html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/WebSite">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://use.typekit.net/vss1hhw.css">
	<script src="https://kit.fontawesome.com/aecf2144d0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

	<?php wp_head();?>

</head>

<body <?php body_class(); ?> >

    <?php echo render_{{theme_name}}_theme_tag_manager()['body'];?>
	<a class="skip-link visually-hidden" href="#content"><?php esc_html_e( 'Skip to content', '{{theme-name}}' ); ?></a>