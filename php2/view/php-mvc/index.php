 <?php 
 	include'conf/connection-pdo.php';
 	include '/view/inc/header.php'; 
 	include '/view/inc/navbar.php'; 	
 	include '/model/display_users.php';	
 	include'model/display_users_pdo.php';
 ?>

 <div class="list_users">
 	<p>Liste des users<p>
		<table class="table">
			<thead>
      			<tr>
      				<th>id</th>
			        <th>Firstname</th>
			        <th>Lastname</th>
			        <th>Email</th> 
			        <th>adresse</th>
			        <th>fonction</th>
			        <th>img_url</th>
			        <th>mail</th>
      			</tr>
	<?php		
 		display_users_pdo($connection);
	?>
		</table>
</div>