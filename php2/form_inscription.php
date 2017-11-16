 <?php 
 	include '..\composants\header.php'; 
 	include '..\composants\navbar.php';	
 ?>
 	<form action="model/insert_user.php" method ="post"> 
		<label>firstname :</label>  
		<input type="text" name="firstname"> 
		<label>lastname:</label> 	
		<input type="text" name="lastname"> 
		<label>adresse :</label> 				
		<input type="text" name="adresse">  
		<label>fonction :</label>  
		<input type="text" name="fonction">  
		<input type="text" name="img_url">  
		<label>img_url :</label>  
		<input type="submit" value="Envoyer le formulaire"> 
	</form> 