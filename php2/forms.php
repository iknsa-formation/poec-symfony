<?php
	include 'composants\header.php';
	require_once'model\db.php';
	include 'composants\navbar.php';	
?> 
<body>
<!-- 	<form action="forms.php" method ="post"> 
	<label>firstname :</label>  
	<input type="text" name="firstname"> 
	<label>lastname:</label> 	
	<input type="text" name="Lastname"> 
	<label>adresse :</label> 				
	<input type="text" name="adresse">  
	<label>fonction :</label>  
	<input type="text" name="fonction">  
	<input type="text" name="img_url">  
	<label>img_url :</label>  
	<input type="submit" value="Envoyer le formulaire"> 
</form> -->
<?php
	if (count(($_POST) > 0 )) 
	{
/*		<div class="my-form">' .
*/		echo '		
				<form action="forms.php" method ="POST">' .'
					<label>firstname :</label>' . 
					'<input type="text" name="firstname">' .'
					<label>lastname:</label>' .'	
					<input type="text" name="lastname">' .'
					<label>adresse :</label>' .'				
					<input type="text" name="adresse">' . '
					<label>fonction :</label>' . '
					<input type="text" name="fonction">' . '
					<input type="text" name="img_url">' . '
					<label>img_url :</label>' . '
					<input type="submit" value="Envoyer le formulaire">' .'
				</form>';

		if (count($_POST > 0)) 
		{
			
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$adresse = $_POST["adresse"];
			$fonction = $_POST["fonction"];
			$img_url  = $_POST["img_url"];
		}
	}
	
	$query = "INSERT INTO users(firstname,lastname,adresse,function,img_url) VALUES('".$firstname."',' ".$lastname." ',' ".$adresse." ',' ".$fonction."','".$img_url.")";

	INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);

	var_dump($query);die;
	
	$insert = mysql_query($connection, $query);
	echo "string";
	if ($insert){
		echo '<div class="alert alert-sucess">';
		echo "success";
	}
	else{
		echo "failled";
	}

	mysql_close($connection);


?>
</body>