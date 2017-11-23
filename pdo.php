<?php 
$pdo=new PDO('mysql:host=localhost;dbname=agenda;charset=utf8','root','');
if(!$pdo){
	die('<strong> Impossible de se connecter,veuillez revoir les accés</strong><br>');
}else{
	echo'<strong> Super! jai reussi à me connecter à ma base de donnée</strong> ';
}
?>