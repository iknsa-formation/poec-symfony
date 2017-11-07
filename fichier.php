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

        // Tableau numérique
       $etudiant = array("Moussa", "Khalid", "Moustakime", "Noémie");
       // Affichage tableaux 
       /*echo $etudiant[0].'<br>';
        echo $etudiant[1].'<br>';
        echo $etudiant[2].'<br>';
        echo $etudiant[3].'<br>';*/

        // Affichage du tableaux avec boucle
      /* for($i = 0;$i < 4; $i++){
        echo $etudiant[$i] . "<br />";
        }*/

        //Tableaux associatif

        $infos = array (
            'prenom' => 'Moussa',
            'nom' => 'Camara',
            'age' => '28',
            'adresse' => 'Quelque part',
        );

        //affichage de l'élément nom
       // echo $infos['nom'];

       /* foreach($infos as $key => $value)
        {
            echo $key.':   ' . $value.'<br />';
        }*/

        $personnes = array(
            1 => array('prenom' => 'Moussa', 'nom' => 'Camara', 'telephone' => '0123456789'),
            2 => array('prenom' => 'Khalid', 'nom' => 'Sookia', 'telephone' => '06147895544'),
            3 => array('prenom' => 'Moustakime', 'nom' => 'Kifia', 'telephone' => '071454565454')
        );
        echo $personnes[1]['prenom']; //Moussa 

        foreach($personnes as $key1 => $value)
        {
          echo "personne n°:" . $key1 . "<br />";

            foreach ($value as $key2=>$value2)

            {
              echo $key2 .": <strong>" . $value2 . "</strong><br />\n";
            }
        }
    ?>
     </div>


 <footer>
        copyright @iknsa.com
    </footer>
  </body>
</html>