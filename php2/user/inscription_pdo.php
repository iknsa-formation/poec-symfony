<?php
	require_once'../conf/connection.php';
	if (count($_POST > 0)) 
		{
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$adresse = $_POST["adresse"];
			$fonction = $_POST["fonction"];
			$img_url  = $_POST["img_url"];
			$mail = $_POST["mail"];
			

		$query = "INSERT INTO users(firstname, lastname, adresse, fonction, img_url, mail) 
				  VALUES ('".$firstname."' ',' '".$lastname."' ',' '".$adresse."' ',' '".$fonction."' ',' '".$img_url."' ',' '".$mail."')";
/*		var_dump($query);die;
*/		$insert = mysqli_query($connection, $query);
		$exist = "SELECT lastname FROM users WHERE lastname = '.$firstname'";
/*		var_dump($query);die;		
*/		$var = mysqli_num_rows($query);
		// var_dump($var);die;		
if ($var > 0){
			echo '<div class="alert alert-sucess">';
			echo "success" . "<br>";
		}
		else{
			echo "failled";
		}
		
		mysql_close($connection);
		}
?>