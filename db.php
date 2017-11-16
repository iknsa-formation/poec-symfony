<?php 
/*$servername="localhost";
$username="root";
$password="";
$dbname="poec-symfony" ;*/
//Create connection
/*define('DBSERVER','localhost');
define('DBNAME','poec-symfony');
define('DBUVER','root');
define('DBPASS','');*/
//$connection=new mysqli($servername,$username,$password,$dbname); 
//$connection = mysqli_connect(DBSERVER, DBUVER, DBPASS, DBNAME);
/*if(!$connection){
	die('<strong> Impossible de se connecter,veuillez revoir les accés</strong><br>'.mysqli_connect_error());
}else{
	echo'<strong> Super! jai reussi à me connecter à ma base de donnée';
}*/
$pdo=new PDO('mysql:host=localhost;dbname=poec-symfony;charset=utf8','root','');

	?>
