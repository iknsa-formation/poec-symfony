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
        /* condition if else*/
            $age = 22;
            if($age >= 18){
                echo "Vous êtes majeur.<br>";
            }else{
                    echo "Vous êtes mineur.<br>";
                }

            /* condition if elseif else*/
           $nombre = -4;
            if($nombre == 0){    
                echo "le nombre est égal à zéro";
            }elseif($nombre > 0){
                echo "le nombre est positif";
                }else{
                echo "le nombre est négatif";
            }


            /* Switch case*/
            /*$nbClick = 2;
            switch($nbClick)
            {
                case 1:
                echo 'passera pas dedans';
                break;
                case 2:
                echo 'Enfin le bon nombre';
                break;
                case 3:
                echo 'Le numéro est dépassé. On est déjà sorti du switch';
                break;
                default:
                'Message par défaut si la condition n’est jamais satisfaite';
            }*/

            /*Les ternaires*/
            /*$age = 17;
            $majeur = ($age >= 18) ? 'OK' : 'KO';
            echo "<br>".$majeur;*/
        ?>
     </div>


 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>