<?php
require_once 'db.php';

	$id = $_GET["id"];
	$sqldelete = "DELETE FROM etudiant WHERE id = ".$id;
	//var_dump($sqldelete);die;
	$resultat = mysqli_query($connection,$sqldelete);

	if($resultat){
		header("location:liste.php");
		echo ("La Suppresion a été correctement effecué");
	} else {

		echo ("La Suppresion a echoé");
	}
?>
