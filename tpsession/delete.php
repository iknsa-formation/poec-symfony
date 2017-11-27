<?php

require_once "db.php";

$deleteId = $_GET["id"];
var_dump($deleteId);

$sql = "DELETE FROM cptable where id=".$deleteId."";

var_dump($sql);

$requete = mysqli_query($connection, $sql);
var_dump($requete);

?> 