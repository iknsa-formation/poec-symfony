<?php
	require_once'..\model\db.php';
	if (count($_POST > 0)) 
		{
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$adresse = $_POST["adresse"];
			$fonction = $_POST["fonction"];
			$img_url  = $_POST["img_url"];
		}	
		$query = "INSERT INTO users(firstname, lastname, adresse, fonction, img_url) VALUES ('".$firstname." ',' ".$lastname." ',' ".$adresse." ',' ".$fonction." ',' ".$img_url."')";
		$insert = mysqli_query($connection, $query);
		$Exist = "select lastname from users where lastname='".$nom"'";
		//test: 
		var = mysqli_num_rows($exist);
		/*var_dump(var);die;*/		
if ($var > 0){
			echo '<div class="alert alert-sucess">';
			echo "success" . "<br>";
		}
		else{
			echo "failled";
		}
		mysql_close($connection);
?>