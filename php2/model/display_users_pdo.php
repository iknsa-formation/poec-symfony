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
    display_users_pdo();
 	/*display_userspdo($connection);*/
 ?>
 	
 	