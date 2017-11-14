<?php

    // $input = $_POST["input"];
  
    if (isset($_POST["input"])) 
    {
      $input = (int)$_POST["input"];
      if (empty($input)) 
      {
        echo "Merci de tapez le numero!";
      }
      
    
    elseif($input == 17)
    {
      echo "c'est la numero police";
    }
    elseif($input == 06 || $input == 07)
    {
      echo "c'est la numero Mobile";
    }
    elseif($input == 01 || $input == 09)
    {
      echo "c'est la numero Fixe";
    }
    elseif($input == 18)
    {
      echo "c'est la numero pompier";
    }
     else
    {
     echo "Numero inconnu!";
    }
     } 
    
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Important : les 3 lignes suivantes doivent se trouver en premier -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>new</title>
</head>
  <body>
  	<form action="conditions.php" method="POST" name="formulaire">
 <input type="text" name="input" id="input" />
 
 <input type="submit" name="send" value="Check" />
</form>
  	
  	</body>
  </html>
