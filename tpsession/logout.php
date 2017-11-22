<?php include 'index.html'?>
<?php require_once "db.php";?>
<hr/>
<?php 
session_start();
unset($_SESSION["email"]);  
// where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Location: home.php");
?>