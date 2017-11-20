 <?php 
 /*	include 'view/inc/navbar.php';*/	
 	include '../inc/header.php'; 
 	include '../inc/navbar.php'; 	
 ?>
 	<h1>form update</h1>
	<div class="form">
	 	<form action="model/update_user.php" method ="post"> 
			
			<span>
				<input type="text" name="email">  
				<label>email :</label>  
			<span>
				<input type="submit" value="Envoyer le formulaire"> 
			</span>
		</form> 
	</div> 