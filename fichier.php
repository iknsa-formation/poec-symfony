<?php

    $Prenom = 'Moussa';
    $Nom = 'Camara';
    $Age    = '28 ans';
    $Profession = 'informaticien';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JavaScript Course - IKNSA</title>
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

     <div class="jumbotron">

        <?php

            function direBonjour(){
                echo "Bonjour tout le monde !";
            }

            direBonjour();

            function addition($nombre1, $nombre2){
                $resultat=$nombre1 + $nombre2;
                return $resultat;
            }

           echo addition(15,1);
        ?>
     </div>


 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>