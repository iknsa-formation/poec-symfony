 <?php 
    require_once'conf/connection-pdo.php';
        function display_users_pdo()
        {
            global $connection;
            //var_dump($sql,$connection);die;
            $query = $connection->prepare("SELECT * FROM users");
            $query->execute();
            if ($query != null)
            {   
                while ($data = $query->fetch())	
        		{
        		    //On affiche l'id et le nom du client en cours
        		    echo "</TR>";
        		    echo "<TH> ".$data['id']." </TH>";
        		    echo "<TH> ".$data['firstname']." </TH>";
        		    echo "<TH> ".$data['lastname']." </TH>";
        		    echo "<TH> ".$data['adresse']." </TH>";
        		    echo "<TH> ".$data['fonction']." </TH>";
        		    echo "<TH> ".$data['img_url']." </TH>";
        		    echo "<TH> ".$data['mail']." </TH>";
        		    echo "<TH> ".$data['password']." </TH>";
                    if (isset($_SESSION["status"])) 
                    {
                        if ($_SESSION["status"] == "admin" ) 
                        {
                            echo "<button type='button' class='btn btn-default' aria-label='Left Align>" . "<span class='glyphicon glyphicon-edit'" . "aria-hidden='true'></span>".
                            "</button>";
                            echo "<button type='button' class='btn btn-default' aria-label='Left Align>" . "<span class='glyphicon glyphicon-plus'" . "aria-hidden='true'></span>".
                            "</button>";
                            echo "<button type='button' class='btn btn-default' aria-label='Left Align>" . "<span class='glyphicon glyphicon-remove'" . "aria-hidden='true'></span>".
                            "</button>";
                        }   
                        /*elseif ($_SESSION["status"] == "user") 
                        {
                        }*/
                    }
                    else    
        		    echo "</TR>";     
        		}
        		$query->closeCursor();
                return true;
        /*		header('Location: /view/display_users_pdo.php');
        */    }
            else
            {
                print_r($query->errorInfo());  
                echo"ici";
                return false;
            }    
         }           
?>
 	
 	