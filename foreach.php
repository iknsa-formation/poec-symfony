<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="foreach.css">
        <title>Ma premiere foreach</title>
    </head>

    <body>
        <h1> Tableaux de moyennes des éleves du lycées Jack HOLMES</h1>
            <h2>Tableau de tous les éleves inscrit à la faculté de biologie</h2>
            <?php
        require('foreach1.php');
        echo "<table id='table'> <thead class='header'> <tr class='header'><th>Id</th><th>Prenom</th><th>nom</th><th>Moyenne</th></tr></thead><tbody><tr>";
        foreach ($eleve as $key => $value)
        {
          foreach ($value as $key2 => $value2)
           {
                        echo '<td>'.$value2.'</td>';
           }
                        echo"</tr>";
        }
                        echo"</tbody>";
                         echo "</table>";
            ?>

             <h2>Tableau des étudiants admis </h2>

             <?php
                require('foreach1.php');
            echo "<table id='table'> <thead class='header'> <tr><th>Id</th><th>Prenom</th><th>nom</th><th>Moyenne</th></tr></thead><tbody><tr>";
            foreach ($eleve as $key => $value)
        {
            foreach ($value as $key2 => $value2)
             {
                if($value["Moyenne"]>9){
                    echo '<td>'.$value2.'</td>';
                }
                }
                    echo"</tr>";
        }
                    echo"</tbody>";
                    echo "</table>";

             ?>

              <h2>Tableau des étudiants nom admis </h2>
            <?php
        require('foreach1.php');
        echo "<table id='table'> <thead class='header'> <tr><th>Id</th><th>Prenom</th><th>nom</th><th>Moyenne</th></tr></thead><tbody><tr>";
            foreach ($eleve as $key => $value)
        {
            foreach ($value as $key2 => $value2)
                 {
                        if($value["Moyenne"]<=9){
                        echo '<td>'.$value2.'</td>';
                }
                
            }
                echo"</tr>";
        }
                echo"</tbody>";
                    echo "</table>";

            ?>
        </body>
        </html>