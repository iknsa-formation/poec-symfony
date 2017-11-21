<?php
  require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
  <?php
    $deleteId = $_GET['id'] ;
    $sql = "DELETE FROM personne1 WHERE `index` = ".$deleteId ;
    // var_dump($sql);die;
    $result = mysqli_query($connection, $sql) ;
    if($result) 
    {
  ?>
  <div class="container">
    <div class="alert alert-success" role="alert">
      <?php
        echo "Row with Id " .$deleteId." has been removed from the table PERSONNE1";
      ?>
    </div>
  </div>
  <div class="container">
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
                $sql1 = "SELECT * FROM personne1";
                $select = mysqli_query($connection, $sql1);
                if (!$select) 
                {
                  echo "Liste des personnes sont ajouté".'<br>';
                }
                while ($row = mysqli_fetch_assoc($select))
                {
              ?>
              <tr>
              <td>
              <?php echo $row['index'];?>
              </td>
              <td> 
              <?php echo $row['firstname'];?>
              </td>
              <td>
              <?php echo $row['lastname'];?>
              </td>
              <td>
              <?php echo $row['address'];?>
              </td>
              <td>
              <?php echo $row['profession'];?>
              </td>
              <!-- <td><a href="display3.php? id=<?php echo $row['index'] ?>">Update</a></td>
              <td><a href="delete.php? id=<?php echo $row['index'] ?>">Delete</a></td> -->
              </tr>
            </tbody>
            <?php
                }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
    <?php
    } 
    else
    {
    ?>
    <div class="alert alert-danger" role="alert">
      Not Deleted.
    </div>
    <?php
    }
    ?>     
</body>
</html>