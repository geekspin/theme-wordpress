<!doctype html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head() ?>
</head>
<body>
<?php get_template_part( 'template-parts/header/site-header' ); ?>