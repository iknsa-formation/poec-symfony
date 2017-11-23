
<?php
	require_once 'db.php';

	if(isset($_SESSION)){
		session_start();
	}

	if (count($_POST)) {
		
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
	//var_dump($_SESSION['email']);die;

$login = "select email, pass from etudiant where email = '".$_SESSION['email']."'";
//var_dump($login);
$isLogged = mysqli_query($connection, $login);
//var_dump($isLogged);die;
	foreach ($isLogged as $key => $value) {
		if ($_SESSION['email'] = $value['email'] && password_verify($_SESSION['password'] === $value['password'])) {
			$_SESSION['prenom'] = $value['prenom'];
			$_SESSION['nom'] = $value['nom'];
			header("location:index.php");
		} else {
			echo "<div class='alert alert-danger' role = 'alert'> Vous n'avez pas connecté </div>";
		}
	}
}
?>


