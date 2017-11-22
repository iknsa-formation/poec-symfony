 <?php 
 /*	include 'view/inc/navbar.php';*/	
 	include '../inc/header.php'; 
 	include '../inc/navbar.php'; 	
 ?>
	<div  class="form-control">
	 	<form action="../../model/connexion_pdo.php" method ="post"> 			 
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