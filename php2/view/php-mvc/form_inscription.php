 <?php 
 /*	include 'view/inc/navbar.php';*/	
 	include '../inc/header.php'; 
 	include '../inc/navbar.php'; 	
 ?>
	<div class="form">
	 	<form action="../../model/insert_user_pdo.php" method ="post"> 
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
				<label>img_url :</label>  
				<input type="text" name="img_url">  
			</span> 
			<span>
				<label>mail :</label>  
				<input type="text" name="mail">  
			</span>
			<span>
				<label>password :</label>  
				<input type="text" name="password">  
			</span>
			<span>
				<input type="submit" value="Envoyer le formulaire"> 
			</span>
		</form> 
	</div> 