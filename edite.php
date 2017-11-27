<?php
session_start()
?>
<?php
require_once "data.php";
require_once "menu.php";

if (empty($_SESSION['pseudo']))
	{
		echo '<center><font color="red" size="4"><b>Vous devez vous connecter pour acceder à la page <i></i></center></font><br />';
	}
	else
	{
		echo $_SESSION['pseudo'];

$id = $_GET["id"];
$query4 = "SELECT * FROM users WHERE id = $id"; 
$resultat= mysqli_query($connection,$query4);


$user= mysqli_fetch_assoc($resultat);
	
?>
<link rel="stylesheet" type="text/css" href="edite.css">

<form class="form-group" action="user.php" method="post">
	prenom: <input type="text" class="form-control" name="firstname" value="<?php echo $user['firstname']; ?>"><br>

	pseudo: <input type="text" class="form-control" name="pseudo" value="<?php echo $user['pseudo']; ?>"><br>

	email: <input type="text"  class="form-control"name="email" value="<?php echo $user['email'];?>"><br>
	
	mot de passe: <input type="passwod" class="form-control" name="password" value="<?php echo $user['password'];?>"><br>

	<input type="text" class="form-control" name="id"  value="<?php echo $user['id'];?>" style="visibility:hidden">

	<input type="Submit" value="modifier">
		
</form>

<?php
	mysqli_free_result($resultat);
	}
	?>





