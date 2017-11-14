<html>
<!DOCTYPE html>
<html>
    <head>
        <title>MES TABLEAU PHP</title>
    </head>
<body>
    <H1> mes tableau essaies  </h1>
   
    <div style="background-color: #66ff33;display=block">
    <?php 
    $prenom=array("François","laura","lina","lala");
for($nom=0;$nom<4;$nom++)
{
echo $prenom[$nom].'</br>';
}
?>
</div>
<div style="background: radial-gradient(#3366FF, #CC9900);;display=block">
<?php 
$coordonnees = array (
    'prenom' => 'lala',
    'nom' => 'lalit',
    'adresse' => '3 Rue de la maison',
    'ville' => 'marcachanatatae');

foreach($coordonnees as $elment)
{
    echo $elment . '<br />';
}
?>
</div>
 



</BODY>

</html>