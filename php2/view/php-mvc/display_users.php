 <?php 
 	include '../../view/inc/header.php'; 
 	include '../../view/inc/navbar.php';	
 	include'../../conf/connection.php';
 	include'../../model/display_users.php';

 	display_users($connection);
 ?>
 	
 	