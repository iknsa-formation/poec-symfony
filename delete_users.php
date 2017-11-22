<?php
require_once "data.php";
	

	$sql2 = "DELETE FROM users WHERE firstname='".$username."'";
	mysqli_query($connection, $sql2);
	if($sql2){
		echo "supprimer";
		
	}
	else{
		echo "na pas ete supprimer kooo";
	}


?>