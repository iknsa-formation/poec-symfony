<?php
        require_once'../conf/connection-pdo.php';
        
function insert_user_pdo()
{
    global $connection;
    $hashed_password = sha1($_POST['password']);
;
    //var_dump($sql,$connection);die;
                /*if ($verification_query->fetchColumn() != 0) 
                {    */
                    $query = $connection->prepare("INSERT INTO users(`firstname`, `lastname`,`adresse`,`fonction`, `img_url`, `mail`, `password`)  VALUES (:firstname, :lastname, :adresse, :fonction, :img_url, :mail, :password)");
                    $query->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
                    $query->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
                    $query->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
                    $query->bindParam(':fonction', $_POST['fonction'], PDO::PARAM_STR);
                    $query->bindParam(':img_url', $_POST['img_url'], PDO::PARAM_STR);
                    $query->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
                    $query->bindParam(':password', $hashed_password, PDO::PARAM_STR);
/*                }
*/                //var_dump($query,$querys);die;   
                //$query->execute();
                $query->execute();
                if ($query != null)
                {
                    $query->closeCursor();
                    header('Location: ../index.php');
                    return true;  
                }
                else
                {
                    print_r($query->errorInfo());  
                    echo"ici";
                    return false;
                }    
 }          
     insert_user_pdo();
?>