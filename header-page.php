<!doctype html>
<html lang="en" class="page"></html>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("title"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<?php wp_head(); ?>
</head>
<body>

<?php get_template_part("slider"); ?>