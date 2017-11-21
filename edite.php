<?php 
require_once "data.php";

$id = $_GET["id"];
$query4 = "SELECT * FROM users WHERE id = $id"; 
$resultat= mysqli_query($connection,$query4);


$user= mysqli_fetch_assoc($resultat);
	
?>

<form class="table" action="user.php" method="post">
	prenom: <input type="text" name="firstname" value="<?php echo $user['firstname']; ?>"><br>

	nom: <input type="text" name="lastname" value="<?php echo $user['lastname']; ?>"><br>

	adresse: <input type="text" name="adresse" value="<?php echo $user['adresse'];?>"><br>

	fonction: <input type="text" name="fonction" value="<?php echo $user['fonction']; ?>"><br>
	<input type="text" class="form-control" name="id"  value="<?php echo $user['id'];?>" style="visibility:hidden">

	<input type="Submit" value="modifier">
		
</form>

<?php
	mysqli_free_result($resultat);

	?>





