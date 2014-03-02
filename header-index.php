<?
//M.IMPORTANTE: EL HEADER SE CARGA EN TODOS LOS ARCHIVOS A TRAVÉS DE
//get_header(); esto ahorra mucho tiempo y mantiene el código ordenadito.
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WP Tir</title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>
<body>

<?php get_template_part("nav"); ?>