<?php 
/** 
 * $loop
 * $class_column
 *
 */

$_count =1;

$colums = '3';
$bscol = 12;
?>

<?php 
	
	$i = 0;
	while($loop->have_posts()){ 
	$loop->the_post();
 ?>	
 	<?php get_template_part( 'templates/post/_single' ) ?>
<?php  } ?>