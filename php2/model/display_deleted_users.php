<?php
/*	var_dump($connection);die;
*/
		function display_deleted_
		users($connection)
 		{	
 	    	$query = "SELECT * FROM `users`";
			
			$result = mysqli_query($connection, $query);
			if ($result){
				echo '<div class="alert alert-sucess">';
				echo "success" . "<br>";
			}
			else{
				echo "failled";
			}

			$result = $connection->query($query);
			while ($row = mysqli_fetch_array($result)) 
			{
	   			echo $row["firstname" ] . $row["lastname"] . $row["adresse"] . $row["fonction"] . $row["img_url"] . $row['email'] . '<br>';
			}
 		}

?>