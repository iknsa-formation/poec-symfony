 <?php 
 	include'conf/connection-pdo.php';
 	include '/view/inc/header.php'; 
 	include '/view/inc/navbar.php'; 	
 	include '/model/display_users.php';	
 	include'model/display_users_pdo.php';
 ?>
 <div class="list_users">
 	<p>Liste des users<p>
	<?php		
 	display_users_pdo($connection);
?>
</div>