<?php
	require_once'../conf/connection-pdo.php';
	
	function delete_users_pdo()
	{
		global $connection;
		if (($_POST['mail'])) 
			{
				$select_user_by_mail = $connection->prepare("SELECT * FROM users where `mail` = :mail");
/*				var_dump($select_user_by_mail);die;
*/				$select_user_by_mail->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
				$select_user_by_mail->execute();
/*				echo "string";
*/				if ($select_user_by_mail)
				{
					
				/*
				$delete_query = $connection->prepare("DELETE FROM users WHERE :mail");	
				$delete_query->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);		
				$delete_query->execute();
*/
				if ($select_user_by_mail != null) 
					{
/*						var_dump($content);
*/			
/*			echo "string1";		
*/							if (false === ($data = $select_user_by_mail->fetch()))
    							{
        							echo 'Pas de résultat';
    							}
    						else
    							{
    								/*echo "string2";*/
    								do 
    									{
		    								echo "this have been deleted" . "<br>";
										    //On affiche l'id et le nom du client en cours
										    echo "</TR>";
										    echo "<TH> ".$data['id']." </TH>"."<br>";
										    echo "<TH> ".$data['firstname']." </TH>"."<br>";
										    echo "<TH> ".$data['lastname']." </TH>"."<br>";
										    echo "<TH> ".$data['adresse']." </TH>"."<br>";
										    echo "<TH> ".$data['fonction']." </TH>"."<br>";
										    echo "<TH> ".$data['img_url']." </TH>"."<br>";
										    echo "<TH> ".$data['mail']." </TH>"."<br>";
										    echo "<TH> ".$data['password']." </TH>"."<br>";
										    echo "</TR>"."<br>";		
    									}
    								   while ($data	 = $select_user_by_mail->fetch());	   
    							}

							     
						
/*						mysql_close($connection);	
*/					}
				else
				{
					echo "failled";
				}


				
/*			
$verification = $select_user_by_mail->execute();
*/			
			//test: 
			/*$var = mysqli_num_rows($query);*/
/*			var_dump($var);die;		
*/			
		
		}		
	}
		delete_users_pdo();
			
?>