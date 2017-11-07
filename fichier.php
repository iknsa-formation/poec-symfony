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
        /* Boucles - while*/
       /* echo '<h3> Boucle while </h3>';
          $INDEX = 0;
            while($INDEX < 3) {
            echo 'J\'AIME LE PHP - '.$INDEX.'<br>';
            $INDEX++; // INCRÉMENTATION
            }*/

        /* Boucles -  for */
       /* echo '<h3> Boucle for </h3>';
            for ($i=0; $i < 3; $i++) { 
               echo 'J\'AIME LE PHP - '.$i.'<br>';
            }*/

         echo '<h3> Boucle do while </h3>';
         // Déclaration et initialisation du compteur
        $i = 0;
        // Boucle générant la table de multiplication du 8
        do
        {
         echo 'J\'AIME LE PHP - '.$i.'<br>';
          // Incrémentation du compteur
          $i++;
        }
        while($i < 0);   
        ?>
     </div>


 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>