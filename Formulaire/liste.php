<?php
	require_once "db.php";
?>
<DOCTYPE! html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="btn-group btn-group-lg" role="button" aria-label="...">
      <a href="index.html" target="_blank" type="html" class="btn btn-primary">
        Ajouter</a>.</div>
    <div class="container">
    <h1>Liste de étudiants</h1>
      <tbody>
        <table class="table maclasse">
          <thead>
            <tr>
              <th  scope ="col">#</th>
              <th  scope ="col">First Name</th>
              <th  scope ="col">Last Name</th>
              <th  scope ="col">Adresse</th>
              <th  scope ="col">Fonction</th>
            <tr>
          </thead>
       <tbody>
<?php
    $sql = "SELECT * FROM USER";
    $resultat = mysqli_query ($connection,$sql);
    /* mysqli_fetch_row()result ->fetch_row() récupère une ligne de résultat sous forme de tableau indexé
    while ($row = mysqli_fetch_row($resultat)) {
    mysqli_fetch_assoc()mysqli->fetch_assoc() récupère les résultats ss forme de tableau associatif
  }

    */
    while ($row = mysqli_fetch_assoc($resultat)) {
      ?>
      <tr>
      <td>
        <?php
          echo $row["id"];
          //echo $row[3];
        ?>
      </td>
      <td>
        <?php
          echo $row["firstname"];
          //echo $row[3];
        ?>
      </td>
      <td>
        <?php
          echo $row["lastname"];
          //echo $row[3];
        ?>
      </td>
      <td>
        <?php
          echo $row["adresse"];
          //echo $row[3];
        ?>
      </td>
      <td>
        <?php
          echo $row["fonction"];
          //echo $row[3];
        ?>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</div>
  </table>
</tbody>
</body>
  </html>
