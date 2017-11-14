<?php



if(isset($_POST['inputNom']) AND isset($_POST['inputPrenom']) AND isset($_POST['inputTel'])) {
	echo $_POST['inputNom'] ."</br>";
	echo $_POST['inputPrenom'] ."</br>";
	echo $_POST['inputTel'] ."</br>";

}