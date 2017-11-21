<?php 
	require_once "bd.php";
	require_once "fonction.php";

	if(verifConnexion($connexion)){
		// connextion OK
		echo 'OK';
		session_start();
	}else{
		echo messageVerifNonConnexion();
		// Saisie incorecte

	}

?>