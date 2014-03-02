<?
//M.IMPORTANTE: EL HEADER SE CARGA EN TODOS LOS ARCHIVOS A TRAVÉS DE
//get_header(); esto ahorra mucho tiempo y mantiene el código ordenadito.
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<?php wp_head();?>
</head>
<body>

<?php get_template_part("nav"); ?>