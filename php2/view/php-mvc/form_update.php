 <?php 
 /*	include 'view/inc/navbar.php';*/	
 	include '../inc/header.php'; 
 	include '../inc/navbar.php'; 	
 ?>
	<div class="form">
	 	<form action="model/update_user.php" method ="post"> 
			<span>
				<label>firstname :</label>  
				<input type="text" name="firstname">
			</span> 
				
			<span>	
				<label>lastname:</label> 	
				<input type="text" name="lastname"> 
			</span>
			<span>
				<label>adresse :</label> 				
				<input type="text" name="adresse">  
			</span>
			<span>
				<label>fonction :</label>  
				<input type="text" name="fonction">  
			</span>
			<span>
				<input type="text" name="img_url">  
				<label>img_url :</label>  
			<span>
				<input type="submit" value="Envoyer le formulaire"> 
			</span>
		</form> 
	</div> 