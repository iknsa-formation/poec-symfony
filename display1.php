<?php
require_once 'db.php';
?>
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
<title>Details</title>
</head>
  <body>
    <div class="container">
    	<div class="rows">
            <div class="col-md-12">
               <div class="panel panel-default">
                  <div class="panel-body" id="title">
                    PHP Method
                  </div>
               </div>
            </div>
        </div>
        <div class="rows">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                    <thead style="text-align: center;"> 
                      <tr class="warning">
                      <th style="text-align:center">INDEX</th>  
                      <th style="text-align:center">FIRSTNAME</th>
                      <th style="text-align:center">LASTNAME</th>
                      <th style="text-align:center">ADDRESS</th>
                      <th style="text-align:center">PROFESSION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $index = 1;
                        if(count($_POST)>0)
                        {
                          $sql = "INSERT INTO personne (firstname, lastname, address, profession) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['address']."', '".$_POST['profession']."')";
                             if(mysqli_query($connection, $sql))
                             {
                                  echo "Record added successfully.";
                               } 
                               else
                               {
                                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                               }
                                echo '<tr>';
                                echo '<td>'.$index.'</td>';
                                echo '<td>'.$_POST['firstname'].'</td>';
                                echo '<td>'.$_POST['lastname'].'</td>';
                                echo '<td>'.$_POST['address'].'</td>';
                                echo '<td>'.$_POST['profession'].'</td>';
                             }
                                echo '<br><br>';
                         ?>
                     </tbody>
                    </table>
                 </div>
              </div>
            </div>
        <div class="rows">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                    <thead style="text-align: center;"> 
                      <tr class="warning">
                      <th style="text-align:center">INDEX</th>  
                      <th style="text-align:center">FIRSTNAME</th>
                      <th style="text-align:center">LASTNAME</th>
                      <th style="text-align:center">ADDRESS</th>
                      <th style="text-align:center">PROFESSION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $index1 = 1;
                          $sql1 = "SELECT * FROM personne";
                          $select = mysqli_query($connection, $sql1);
                          if (!$select) 
                          {
                            echo "Liste des personnes sont ajouté";
                          }
                          while ($_POST = mysqli_fetch_array($select))
                          {
                          echo '<tr>';
                          echo '<td>'.$index1.'</td>';
                          echo '<td>'.$_POST['firstname'].'</td>';
                          echo '<td>'.$_POST['lastname'].'</td>';
                          echo '<td>'.$_POST['address'].'</td>';
                          echo '<td>'.$_POST['profession'].'</td>';
                          $index1++;
                          }
                      ?>
                    </tbody>
                    </table>
                </div>
              </div>
            </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
