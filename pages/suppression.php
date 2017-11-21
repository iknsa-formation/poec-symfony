<?php 
	require_once "../bd.php"; 
	require_once "../fonction.php"; 
	include_once "../head.html";
	include_once "../header.html";
	
	if(isset($_GET["id"])){
		supprimerUser($connexion);
		header('Location: users.php'); 
	}
	else{
		 header('Location:users.php'); 
	}
?>