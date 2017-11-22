<?php
	require_once 'db.php';

	if(!isset($_SESSION)){
		session_start();
	}

	if (count($_POST)) {
		
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
	}

$login = "select *from etudiants where email = '".$_SESSION['email']."' and '".$_SESSION['password']."';"

$isLogged = mysqli_query($connetion, $login);
	foreach ($isLogged as $key => $value) {
		if ($value['email'] === $_SESSION['email'] && password_verify($_SESSION[password], $['value'] ))) {
			$_SESSION['prenom'] = $value['prenom'];
			$_SESSION['nom'] = $value['nom'];
			header("location:list.php")
		} else {
			echo "<div class='alert alert-danger' role = 'alert'> Vous n'avez " 
		}
	}
?>