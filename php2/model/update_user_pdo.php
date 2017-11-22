<?php
	require_once'../conf/connection-pdo.php';
	require_once'vérification-pdo.php';

	function update_user_pdo()
	{
		global $connection;
		if (($_POST['mail'])) 
			{
				$/*verification_query = "SELECT lastname FROM users WHERE lastname = '.$firstname'";
				
				$verification_query = $bdd->prepare('SELECT * FROM users WHERE mail = mail:');
				
				$verification_query->execute(array($_POST['pseudo']));
				if ($verification_query->fetchColumn() != 0) {*/

				$query = $connection->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname, adresse = :adresse, fonction = :fonction, img_url = :img_url, mail = :mail, password = :password WHERE mail = :mail");

				$query->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
                $query->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
                $query->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
                $query->bindParam(':fonction', $_POST['fonction'], PDO::PARAM_STR);
                $query->bindParam(':img_url', $_POST['img_url'], PDO::PARAM_STR);
                $query->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
                $query->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
    			$query->execute();

    			if ($query != null)
                {
                    $query->closeCursor();
                    return true;
                }
                else
                {
                    print_r($query->errorInfo());  
                    echo"ici";
                    return false;
                }    
		}		
	}
		update_user_pdo();			
?>