
<?php require_once "db.php";
require_once "form.php";
?>

<hr/>

<!DOCTYPE html>

<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    </head>


    <body>
       
        <div>
            <ul><?php include 'index.html'?></ul>
        </div>


        <hr>


        <b><?php $personne = array ('p1' => array('identite'=>'neant', 'pouvoir'=>'levitation', 'ame soeur'=>'Liya'),
                                    'p2' => array ('identite'=>'XXX', 'pouvoir'=>'teleportation', 'ame soeur'=>'Jane'),);
                // Lecture de chaque ligne du tableau
                foreach($personne as $p1=>$neant){
                    echo '<b>PERSONNE : </b>'.$p1.'<br/>';
                    // Lecture de chaque tableau de chaque ligne
                    foreach($neant as $identite=>$neant){
                        // Affichage
                        echo $identite.'->'.$neant.'<br>';
                    }} ?>
        </b>
        <hr/>



        <b>
            <?php 
            $etudiant = array (
                'et1' => array ('nom' => 'Ulysse', 'moyenne' => 18),
                'et2' => array ('nom' => 'Kleio', 'moyenne' => 15),
                'et3' => array ('nom' => 'Dupere', 'moyenne' => 3),);
            foreach ($etudiant as $et1 => $Ulysse)
            {
                echo $et1;

                foreach ($Ulysse as $nom => $value)
                {
                    echo ' '.$nom.'--'.$value.'<br/>';    
                }
            }
            ?>  
        </b>

    
       
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>