<?php
	require_once'../conf/connection-pdo.php';
	
	function connexion()
	{	
		global $connection;
    	$hashed_password = sha1($_POST['password']);
		if (count($_POST > 0)) 
			{
				$mail_pass_checking_query = $connection->prepare('SELECT id, firstname, lastname, adresse, fonction, img_url, mail, password FROM users WHERE mail = :mail AND password = :password');
					/*var_dump($mail_pass_checking_query);*/

					$mail_pass_checking_query->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
                    $mail_pass_checking_query->bindParam(':password', $hashed_password, PDO::PARAM_STR);
                    $mail_pass_checking_query->execute();
				
				echo "string";
				if ($mail_pass_checking_query->rowCount() > 0)
				{
					while ($data = $mail_pass_checking_query->fetch())	
        			{
	        		    //On affiche l'id et le nom du client en cours
	        		    session_start();
	        		    $data["id"] == $_SESSION["id"]; 
	        		    $data["firstname"] == $_SESSION["firstname"];
	        		    $data["lastname"] == $_SESSION["lastname"];
	        		    $data["adresse"] == $_SESSION["adresse"]; 
	        		    $data["fonction"] == $_SESSION["fonction"];
	        		    $data["img_url"]== $_SESSION["img_url"];
	        		    $data["mail"] == $_SESSION["mail"];
	        		    $data["password"]== $_SESSION["password"];
						header('Location: ../index.php?connexion=ok');	
					}
				}
				else
				{
					echo "failled";
				}
				echo "string";
/*				mysql_close($connection);
*/			}				
	}connexion();

?>