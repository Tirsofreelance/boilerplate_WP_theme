<?
//En este archivo se cargan los posts.
?>

<?
//Cargamos un header específico "single" será diferente al header de Index
?>
<?php get_header("single"); ?>

<?
//Cargamos un loop específico para single.

?>
	

<?php get_template_part("the_loop_single"); ?>

<?
//Cargamos el footer, no hay footer especial, será el footer común.

?>

<?php get_footer(); ?>

