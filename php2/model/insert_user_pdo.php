<?php
        require_once'../conf/connection.php';
        function insert_user_pdo() 
        {
            global $connection;
            $query = null;
            try {
                $query = $connection->prepare('INSERT INTO users(firstname, lastname, adresse, fonction, img_url, mail, password) VALUES (:firstname, :lastname, :adresse, :fonction, :img_url, :mail, :password)');
                $query->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
                $query->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
                $query->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
                $query->bindParam(':fonction', $_POST['fonction'], PDO::PARAM_STR);
                $query->bindParam(':img_url', $_POST['img_url'], PDO::PARAM_STR);
                $query->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
                $query->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
                $query->execute();
            } catch (Exception $e) {
                var_dump($e);
                if ($query != null)
                {
                    $query->closeCursor();
                    return true;
                }
                else
                {
                    print_r($query->errorInfo());  
                    echo"ici";
                }    
            }
        } insert_user_pdo();
?>