<?php 

//Create connection
 define('DBSERVER','localhost');
 define('DBNAME','agenda');
 define('DBUVER','root');
 define('DBPASS','');

 $connection = mysqli_connect(DBSERVER, DBUVER, DBPASS, DBNAME);
 if(!$connection){
 	die('<strong> Impossible de se connecter,veuillez revoir les accés</strong><br>'.mysqli_connect_error());
 }else{
 	echo'<strong> Super! jai reussi à me connecter à ma base de donnée';
}
//$pdo=new PDO('mysql:host=localhost;dbname=agenda;charset=utf8','root','');
//if(!$pdo){
//	die('<strong> Impossible de se connecter,veuillez revoir les accés</strong><br>');
//}else{
//	echo'<strong> Super! jai reussi à me connecter à ma base de donnée</strong> ';
//}

?>