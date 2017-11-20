 <?php 
 	include'conf/connection.php';
 	include '/view/inc/header.php'; 
 	include '/view/inc/navbar.php'; 	
 	include '/model/display_users.php';	
 ?>
 <div class="list_users">
 	<p>Liste des users<p>
	<?php		
			display_users($connection);
?>
</div>