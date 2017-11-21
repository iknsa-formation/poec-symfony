<?php
require_once "db.php";
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>recup de données dans base</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<tbody>
<table class="table">
  <thead>
<tr style="border: 1px black solid">
  <th scope="col">Id</th>
  <th scope="col">first name</th>
  <th scope="col">last name</th>
  <th scope="col">adresse</th>
  <th scope="col">fonction</th>
  </tr>
<?php
$requete = 'select * from user';
$result = mysqli_query($connection,$requete);
while ($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['ID'] ?></td>
<td><?php echo $row['firstname'] ?></td>
<td><?php echo $row['lastname'] ?></td>
<td><?php echo $row['adresse'] ?></td>
<td><?php echo $row['fonction'] ?></td>
<td><a href="edit.php?id=<?php echo $row['ID']?>"> <img src='img/edit.png'></a></td>
<td><a href="delete.php?id=<?php echo $row['ID']?>">
  <img src='img/delete.png' OnClick= return confirm('Voulez-vous vraiment supprimer ?');></a></td>
  <?php
}
?>

</tr>
</thead>
</tbody>
</table>
