<?php
	require_once'..\model\db.php';
	if (count($_POST > 0)) 
		{
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$adresse = $_POST["adresse"];
			$fonction = $_POST["fonction"];
			$img_url  = $_POST["img_url"];
			$email  = $_POST["email"];
		}
		$sql = "UPDATE table_name 
				SET firstname = $firstname, lastname=$lastname,adresse=$adresse,
				fonction = $fonction, img_url = $img_url, email = $email
				WHERE email=$email ";		
		$insert = mysqli_query($connection, $query);
		$Exist = "select email from users where email='".$mail"'";
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