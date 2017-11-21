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
				if ($select_user_by_mail != null) 
					{
						$delete_query = $connection->prepare("DELETE FROM users WHERE mail = :mail");	
						$delete_query->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);		
						$delete_query->execute();
						echo "string";
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