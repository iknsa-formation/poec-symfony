<?php
	require_once'../conf/connection.php';
	
	function Delete()
	{
		if (count($_POST > 0)) 
			{
				$mail  = $_POST["mail"];
			}

			$query = "DELETE FROM users WHERE mail = "$mail"";	
			
			$insert = mysqli_query($connection, $query);
			$exist = "select email from users where email = '. $mail'";
			//test: 
			$var = mysqli_num_rows($query);

			var_dump($var);die;		
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
