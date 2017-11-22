<?php
require_once "data.php";
require_once "menu.php";
?>
<link rel="stylesheet" type="text/css" href="connecter(list).css">
<div id="select"><?php
// requête SQL qui compte le nombre total d'enregistrement dans la table et qui
//récupère tous les enregistrements
$select = "SELECT id,firstname,pseudo,email FROM users";
$result = mysqli_query($connection,$select) OR DIE ('Erreur: '.mysqli_error($connection) );
$total = mysqli_num_rows($result);
// si on a récupéré un résultat on l'affiche.
if($total) {
    // debut du tableau
    
	echo '<table id="tableau" class="table">'."\n";
    // première ligne on affiche les titres prénom et nom dans 2 colonnes
    echo '<tr>';
    echo '<td><b><u>id</u></b></td>';
    echo '<td><b><u>prenom</u></b></td>';
    echo '<td><b><u>pseudo</u></b></td>';
    echo '<td><b><u>email</u></b></td>';
	echo '<td><b><u>supprimer</u></b></td>';
	echo '<td><b><u>Moddifier</u></b></td>';
    echo '</tr>'."\n";
    // lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row["firstname"].'</td>';
        echo '<td>'.$row["pseudo"].'</td>';
        echo '<td>'.$row["email"].'</td>';
		echo  '<td><input type="hidden" name="id" value="' .$row['id']. '"/><input class="btn btn-success" type="submit" value="Supprimer" ></td>';
		echo '<td><a href="edite.php?id='.$row['id'].'"<button class="btn btn-success"><i class="icon-white icon-ok"></i>Moddifier</button></a></td>';
        echo '</tr>'."\n";
    }
    echo '</table>';
    //fin du tableau
}
else echo 'Pas d\'enregistrements dans cette table...';
// on libère le résultat
mysqli_free_result($result);
	?></div>

