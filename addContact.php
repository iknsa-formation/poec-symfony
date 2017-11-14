<?php
session_start();

$result = count($_SESSION['contact']) + 1;
echo $result;

if(isset($_POST['inputNom']) AND isset($_POST['inputPrenom']) AND isset($_POST['inputTel'])) {

	echo $_POST['inputNom'] ."</br>";
	echo $_POST['inputPrenom'] ."</br>";
	echo $_POST['inputTel'] ."</br>";

}