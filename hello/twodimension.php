<!DOCTYPE html>
<html lang="fr">

<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>new</title>
</head>
  <body>
  	<?php echo '<br>'."ARRAY ELEMENTS IN TABLE FORMAT".'<br>'.'<br>'; ?>
  	<table border = 1 style="width: 35%;">
  		<thead>
  			<tr>
  				<th>INDEX</th>
  				<th>TITLE</th>
          <th>DESCRIPTION</th>
          
  			</tr>
  		</thead>
  		<tbody>	
  	<?php  
  	$etudiant = array(
    1=>array('Nom'=>'ALAND','Prenom'=>'Frederick','Age'=>'32','Profession'=> 'Informaticien'),
    2=>array('Nom'=>'JEAN','Prenom'=>'Stanley','Age'=>'35','Profession'=> 'Mechanicien'),
    3=>array('Nom'=>'DUPONT','Prenom'=>'Louis','Age'=>'52','Profession'=> 'Medecin'));

  	foreach ($etudiant as $key => $values) 
  	{
  			foreach ($values as $key2 => $value2) 
        {
        echo '<tr align="center">';
  				echo '<td>'.$key.'</td>';
          echo '<td>'.$key2.'</td>';
  				echo '<td>'.$value2.'</td>';
  			echo '</tr>';
        }
  	}
  	?>
  		</tbody>
  </body>
</html>  

  