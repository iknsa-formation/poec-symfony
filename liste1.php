<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>new</title>
<style>
  table.table-bordered
    {
    border:2px solid black;
    margin-top:20px;
    }
  table.table-bordered > thead > tr > th
   {
    border:2px solid black;
   }
  table.table-bordered > tbody > tr > td
   {
    border:2px solid black;
   }
</style>
</head>
  <body>
    <div class="container">
      <div class="rows">
        <div class="col-md-12">
           <?php echo '<br>'."ARRAY ELEMENTS IN TABLE FORMAT".'<br>'.'<br>'; ?>
             <div class="table-responsive">
                <h3>Liste des etudiants</h3>
                  <table class="table table-bordered table-striped">
                    <thead style="text-align: center;"> 
                      <tr class="warning">
                      <th style="text-align:center">INDEX</th> 
                      <th style="text-align:center">NOM</th>
                      <th style="text-align:center">PRENOM</th>
                      <th style="text-align:center">AGE</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
    $etudiant = array(
    1=>array('Nom'=>'ALAND','Prenom'=>'Frederick','Age'=>'15'),
    2=>array('Nom'=>'JEAN','Prenom'=>'Stanley','Age'=>'18'),
    3=>array('Nom'=>'DUPONT','Prenom'=>'Louis','Age'=>'9'),
    4=>array('Nom'=>'CHARLE','Prenom'=>'Francois','Age'=>'10'),
    5=>array('Nom'=>'THOMAS','Prenom'=>'Fabrice','Age'=>'8')
    );
    foreach ($etudiant as $key => $value) 
    {
      echo '<tr class="info" align="center">';
      echo '<td>'.$key.'</td>';
      foreach ($value as $key2 => $value2) 
      {
        echo '<td>'.$value2.'</td>';
      }
    echo '</tr>';
    }
?>
                   </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      <div class="container">
        <div class="rows">
          <div class="col-md-12">
            <h3>Liste des etudiants Admis</h3>
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
               <thead> 
                  <tr class="warning">
                     <th style="text-align:center">INDEX</th> 
                     <th style="text-align:center">NOM</th>
                     <th style="text-align:center">PRENOM</th>
                     <th style="text-align:center">AGE</th>
                  </tr>
               </thead>
               <tbody>
<?php
    foreach ($etudiant as $key => $value) 
    {
      echo '<tr class="danger" align="center">';
      if ($value['Age']>=10) 
      {
        echo '<td>'.$key.'</td>';
        foreach ($value as $key2 => $value2) 
        {
          echo '<td>'.$value2.'</td>';
        }
      }
      echo '</tr>';
    }
      
?>
        <!-- foreach ($etudiant as $key => $value) 
        {
            echo '<tr align="center">';
          
       foreach ($value as $key2 => $value2) 
       {
            if ($value2>=10) 
            {
              echo '<td>'.$key.'</td>';
              foreach ($value as $key2 => $value2) 
              {

              echo '<td>'.$value2.'</td>';
            }
              
            }
            
          
          }
          
          echo '</tr>';

      } -->
                 </tbody>
               </table>
            </div>
          </div>
        </div>        
      </div>

      <div class="container">
        <div class="rows">
          <div class="col-md-12">
            <h3>Liste des etudiants Non-Admis</h3>
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
               <thead style="text-align: center;"> 
                      <tr class="warning">
                        <th style="text-align:center">INDEX</th> 
                        <th style="text-align:center">NOM</th>
                        <th style="text-align:center">PRENOM</th>
                        <th style="text-align:center">AGE</th>
                      </tr>
               </thead>
               <tbody>
<?php
    foreach ($etudiant as $key => $value) 
    {
      echo '<tr class="success" align="center">';
      // echo $value['Age'];
      if ($value['Age']<10) 
        {
          echo '<td>'.$key.'</td>';
            foreach ($value as $key2 => $value2) 
              {
                // echo $value2;
                  echo '<td>'.$value2.'</td>';
              }
        }
           echo '</tr>';
    }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>        
    </div>
  </body>
</html> 