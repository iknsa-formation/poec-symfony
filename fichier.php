<?php
define('DBSERVER', 'localhost');
define('DBNAME', 'poec-symfony');
define('DBUSER', 'root');
define('DBPASS', '');

$connection = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);

     if (!$connection) {
        die('<strong> Impossible de se possible, veuillez revoir les accés</strong><br>');
    } else {

        echo '<strong> Super ! j\'ai réussi à me connecter à ma base de donnée </strong><br>';
    }

    if (isset($_POST['firstname']) &&  isset($_POST['lastname']) &&  isset($_POST['adresse']) &&  isset($_POST['fonction'])){

        $prenom = $_POST['firstname'];
        $nom = $_POST['lastname'];
        $adresse = $_POST['adresse'];
        $fonction = $_POST['fonction'];

        echo "Prénom: " .$prenom . "<br>";
        echo "Nom: " .$nom;
        echo "Adresse: " .$adresse;
        echo "Fonction: " .$fonction;

        /*
        * Instertion dans la base de donnée
        */
        
        $sql = "INSERT INTO users(firstname,lastname,adresse,fonction) VALUES('".$prenom."','".$nom."','".$adresse."','".$fonction."')";
        
        mysqli_query ($connection,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

        mysqli_close($connection);
    }
?>