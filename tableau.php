<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
    <meta charset="UTF-8">
       	<link rel="stylesheet" type="text/css" href="index.css">
    	<title>calculatrice</title>
        
    <link href="style.css" rel="stylesheet">
   
    </head>
    <body>
     
   
      
  

          
     	  
  <h1>Liste des etudiants</h1>
<div class="jumbotron">
<?php 
$etudiants=array(
    1=>array('id'=>'1','prenom'=>'moussa','nom'=>'camara','moyenne'=>15),
    2=>array('id'=>'2','prenom'=>'khalid','nom'=>'sookia','moyenne'=>19),
    3=>array('id'=>'3','prenom'=>'noemie','nom'=>'kifia','moyenne'=>9),
    4=>array('id'=>'4','prenom'=>'jean','nom'=>'dupant','moyenne'=>7),
    5=>array('id'=>'5','prenom'=>'alex','nom'=>'cool','moyenne'=>10),);

    foreach ($etudiants as $key => $value) {

echo "personne n°:".$key."<br>";

    foreach ($value as $key1 => $value1) {
      
       echo $key1."<strong>".$value1."</strong><br/>";
   }}
        ?></div>

<h1>Liste des admis</h1>
<div class="jumbotron">
<?php  
$etudiants=array(
    1=>array('id'=>'1','prenom'=>'moussa','nom'=>'camara','moyenne'=>15),
    2=>array('id'=>'2','prenom'=>'khalid','nom'=>'sookia','moyenne'=>19),
    3=>array('id'=>'3','prenom'=>'noemie','nom'=>'kifia','moyenne'=>9),
    4=>array('id'=>'4','prenom'=>'jean','nom'=>'dupant','moyenne'=>7),
    5=>array('id'=>'5','prenom'=>'alex','nom'=>'cool','moyenne'=>10),);

    foreach ($etudiants as $key => $value) {

     if($value['moyenne']>9){
        echo "personne n°:".$key."<br>" ;
            foreach ($value as $key1 => $value1) {
                 echo $key1.":<strong>".$value1."</strong><br>";
            }
            }
            }
    
      ?>
      </div>

<h1>Liste des non admis</h1> 
    <?php 
    $etudiants=array(
    1=>array('id'=>'1','prenom'=>'moussa','nom'=>'camara','moyenne'=>15),
    2=>array('id'=>'2','prenom'=>'khalid','nom'=>'sookia','moyenne'=>19),
    3=>array('id'=>'3','prenom'=>'noemie','nom'=>'kifia','moyenne'=>9),
    4=>array('id'=>'4','prenom'=>'jean','nom'=>'dupant','moyenne'=>7),
    5=>array('id'=>'5','prenom'=>'alex','nom'=>'cool','moyenne'=>10),);

    foreach ($etudiants as $key => $value) {

      if($value['moyenne']<10){
        //echo"<td>".$key1."</td>";
        echo "personne n°:".$key."<br>" ;
            foreach ($value as $key1 => $value1) {
                
                   echo $key1.":<strong>".$value1."</strong><br>";
            }
    
      }
  }


?>  </body>
</html>