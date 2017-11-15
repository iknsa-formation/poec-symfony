<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body>
  <h3>Liste des étudiants</h3>

  <?php
  $personnes = array(
  1 => array('prenom' => 'moussa', 'nom' => 'camara', 'moyenne' => '15'),
  2 => array('prenom' => 'Khalid', 'nom' => 'Sookia', 'moyenne' => '19'),
  3 => array('prenom' => 'noemie', 'nom' => 'Kifia', 'moyenne' => '9'),
  4 => array('prenom' => 'jean', 'nom' => 'dupont', 'moyenne' => '7'),
  5 => array('prenom' => 'alex', 'nom' => 'cool', 'moyenne' => '10'),
  );
  ?>
  <table class="table table-inverse" >

           <thead>
                   <tr>
                   <th>id</th>
                   <th>prenom</th>
                   <th>nom</th>
                   <th>note</th>
                   </tr>
           </thead>
           <tbody>
             <?php
             foreach($personnes as $cle1 => $valeur1)
             {
             ?>

                   <tr>
                   <td>
              <?php
               echo  "etudiant ". $cle1 . "<br/>";
              foreach($valeur1 as $cle2 => $valeur2)
              {
              ?>
                  </td>
                   <td>
              <?php
                       echo  $valeur2 . "<br/>";
                         }
                      }
              ?>
                 </td>
          </tbody>
  </table>

<br/>
<br/>
  <h3>Reçus</h3>
      <table class="table table-inverse" >

               <thead>
                       <tr>
                       <th>id</th>
                       <th>prenom</th>
                       <th>nom</th>
                       <th>note</th>
                       </tr>
               </thead>
               <tbody>
                 <?php
                 foreach($personnes as $cle1 => $valeur1)
                 {
                   if ($valeur1['moyenne'] > 9)
                 {
                 ?>

                  <tr>
                       <td>
                  <?php
                  echo  "n°". $cle1 . ": recu"."<br/>";
                  foreach($valeur1 as $cle2 => $valeur2)
                  {
                  ?>
                      </td>
                       <td>
                  <?php
                   echo $valeur2 . "<br/>";
                  }
                }
              }
                  ?>
                     </td>
                   </tr>
              </tbody>
      </table>

  <!-- <?php
foreach($personnes as $cle1 => $valeur1)
{
  if ($valeur1['moyenne'] > 9) {
  echo  "<br/>"."OUI recu : n°". $cle1 . "<br/>";
  foreach($valeur1 as $cle2 => $valeur2)
  {
 echo $cle2 ." : " . $valeur2 . "<br/>";
   }
 }
}
?> -->
<br/>
<br/>

<h3>Recalés</h3>
<table class="table table-inverse" >

         <thead>
                 <tr>
                 <th>id</th>
                 <th>prenom</th>
                 <th>nom</th>
                 <th>note</th>
                 </tr>
         </thead>
         <tbody>
           <?php
           foreach($personnes as $cle1 => $valeur1)
           {
             if ($valeur1['moyenne'] <= 9)
           {
           ?>

            <tr>
                 <td>
            <?php
            echo  "n°". $cle1 . ": recalé "."<br/>";
            foreach($valeur1 as $cle2 => $valeur2)
            {
            ?>
                </td>
                 <td>
            <?php
             echo $valeur2 . "<br/>";
            }
          }
        }
            ?>
               </td>
             </tr>
        </tbody>
</table>

</body>
</html>
