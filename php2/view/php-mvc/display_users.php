 <?php 
 	include '../../view/inc/header.php'; 
 	include '../../view/inc/navbar.php';	
 	include'../../conf/connection.php';
 	include'../../model/display_users_pdo.php';

 ?>	
 <table class="table-striped">
 <?php
 	display_users_pdo($connection);
 ?>
</table> 	
 	