 <?php 
 	include 'composants\header.php'; 
 	include 'composants\navbar.php';	
/* 	include 'model\display_users.php'; 
*/
 ?>
 <div class="list_users">
 	<p>Liste des users<p>
	<?php
		require_once'model\db.php';
		
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
	   			echo $row["firstname" ] . $row["lastname"] . $row["adresse"] . $row["fonction"] . $row["img_url"] . '<br>';
			}
/*		$result->closeCursor();
*//*		mysql_close($connection);
*/
?>
</div>



