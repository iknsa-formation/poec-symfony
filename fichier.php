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
        
        $resultat = mysqli_query ($connection,$sql);

        if ($resultat) {
           echo "<script>alert(\"Les données ont été bienn enregistrées en base\")</script>"; 
         } else {
            die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
         }

        mysqli_close($connection);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Course - IKNSA</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
    <!-- Page Content -->
    <header>
        <div class="logo"><img src="img/logo.png" alt="Logo"></div>
        <nav>
            <ul>
                <li><a href="index.html">Home Page</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <div class="breadcrumb">
            <span>You are here</span>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="page.html">About Us</a></li>
            </ul>
        </div>
    </header>

     <main>
        <h1>Get in touch</h1>
        <form method="post" action="fichier.php">
            <div class="form-group zoneRadio">
                <label>Title</label>
                <input type="radio" name="title" tabindex="1"><span>Mr.</span>
                <input type="radio" name="title" tabindex="2"><span>Mrs.</span>
                <input type="radio" name="title" tabindex="3"><span>Miss.</span>
            </div>

            <div class="form-group">
                <label for="firstname">FirstName*:</label>
                <input type="text" name="firstname" id="firstname" tabindex="4">
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname">
            </div>

            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" name="adresse" id="adresse">
            </div>
                 <div class="form-group">
                    <label for="fonction">Fonction:</label>
                    <input type="text" name="fonction" id="fonction">
                </div>
            
            <div class="required-fields">
                *: Required fields
            </div>
            <div class="form-group">
                <input type="submit" value="SEND">
            </div>
        </form>
    </main>

 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>
