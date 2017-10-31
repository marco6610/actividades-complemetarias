<?php 

	$con = 'mysql:dbname=complementarias;host=localhost';
	$user = 'valle';
	$password = '123valle';

	try {
		$pdo = new PDO($con,$user,$password);
	} catch (Exception $e) {
		echo 'Error al conectarnos' .$e->getMessage();
	}
	
 ?>
