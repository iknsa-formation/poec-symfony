 <?php 
 /*	include 'view/inc/navbar.php';*/	
 	include '../inc/header.php'; 
 	include '../inc/navbar.php'; 	
 ?>
 	<h1>form_delete_user</h1>
	<div class="form">
	 	<form action="../../model/delete_user.php" method ="post"> 
			<span>
				<label>email :</label>  
				<input type="mail" name="mail">  
			</span>
			<span>
				<input type="submit" value="Envoyer le formulaire"> 
			</span> 
		</form> 
	</div> 
	