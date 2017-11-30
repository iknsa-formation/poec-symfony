<!--<?php
/*try{
    $dbConnection = new PDO('mysql:host=localhost;dbname=pdo','root','');
    $dbConnection->exec("SET CHARACTER SET utf8");
    echo "connection reussi";
}

catch(PDOException $e){
    echo "probleme de connection a la base de donnée";
}
if((isset($_POST['nom'])&&isset($_POST['auteur'])&&isset($_POST['titre'])))
{
    header ('Location: index.php');
}

$query = "SELECT * FROM article";
$data = $dbConnection->query($query);

echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
                <tr>
                    <th>nom</th>
                    <th>titre</th>
                    <th>auteur</th>
                </tr>';

foreach($data as $row){
    echo '<tr>
                    <th>'.$row["nom"].'</th>
                    <th>'.$row["titre"].'</th>
                    <th>'.$row["auteur"].'</th>
                </tr>'
                
}
   echo '</table>';*/

/*$stmt=$dbConnection->prepare("INSERT INTO article(auteur, nom, titre) VALUES (:auteur, :nom, :titre)");
$stmt->bindParam(':auteur', $auteur);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':titre', $titre);	

$auteur = 'fee';
$nom = "abed";
$titre = "le bleue";
$stmt->execute();*/

?>-->
   <!-- <form name="form" action="#" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend><em>Ajout d'un Article</em></legend>
            <table align="center">
                <tr>
                    <td>
                        <label for="ChampNum">Nom:</label>
                    </td>
                    <td>
                        <input type="text" id="nom" name="nom" require/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ChampNom">titre:</label>
                    </td>
                    <td>
                        <input type="text" id="titre" name="titre" require/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ChampMail">auteur:</label>
                    </td>
                    <td>
                        <input type="text" id="auteur" name="auteur" require/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Ajouter" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
-->