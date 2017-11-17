<?php
	require_once'..\model\db.php';
	
		$query = "SELECT * FROM `users`";
		
		$result = mysqli_query($connection, $query);
		if ($select){
			echo '<div class="alert alert-sucess">';
			echo "success";
		}
		else{
			echo "failled";
		}

		$result = $bdd->query($request);
		while ($row = msql_fetch_array($result)) 
		{
   			echo $row["user"];
		}

		$reponse->closeCursor();
		mysql_close($connection);

?>