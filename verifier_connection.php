<?php
require_once "data.php";
require_once "menu.php";
if (count($_POST)>0){
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

if (!empty($_POST['pseudo']) && !empty($_POST['password'])){
	$_POST['password'] = crypt("sha256", $_POST['password']);
	extract($_POST);
	$sql = "SELECT pseudo FROM users WHERE pseudo='".$pseudo."'";
	$req = mysqli_query($connection,$sql);
	$data = mysqli_fetch_assoc($req);
	
	if($data['pseudo'] != $pseudo) {
		echo '<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer ! <a href="http://localhost/poec-symphony/connection.php">Retour</a>
</div>';
	}
	else {
		session_start();
		$_SESSION['pseudo'] = $pseudo;
		echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Vous etes bien logué, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5; URL=http://localhost/poec-symphony/connecter(list).php">
</div>';

	}    
}
else {
	$champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}
}

?>
