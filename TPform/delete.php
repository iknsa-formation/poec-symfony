<?php
require_once "db.php";

$deleteId = $_GET["id"];


$sql = "DELETE FROM tablio where id=".$deleteId;
var_dump($sql);
$requete = msqli_query($connection, $sql);

?> 
