<?php
require_once "data.php";
//if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['fonction']));
if (count($_POST)>0){
	$prenom = $_POST['firstname'];
	$nom = $_POST['lastname'];
	$adresse = $_POST['adresse'];
	$fonction =$_POST['fonction'];
	$id=$_POST['id'];

	echo "prenom:".$prenom."<br/>";
	echo "nom:".$nom."<br/>";
	echo "adresse:".$adresse."<br/>";
	echo "fonction:".$fonction."<br/>";
       
    $query = "SELECT firstname FROM users WHERE firstname='".$prenom."'";
    $resultat =  mysqli_query( $connection, $query ) ;
    $row = mysqli_num_rows($resultat) ;
    if ( $row >0 )
    {
        echo "Ce pseudo est déjà utilisé" ;
    } 
    
    else {
        $sql = "INSERT INTO users(firstname,lastname,adresse,fonction) VALUES('".$prenom."','".$nom."','".$adresse."','".$fonction."')";
        
        if(mysqli_query($connection,$sql))
        {
            echo "vous avez ete ajouter";
        }
        else{
            echo "error vous navez pas ete ajouter";
        }   
    }
     mysqli_close($connection);
    
}
   
?>
