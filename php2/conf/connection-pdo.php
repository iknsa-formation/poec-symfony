<?php  
try {
    $dns = 'mysql:host=localhost;dbname=poec-symfony';

    $username = 'root';
    $password = 'Capsule9Corp1';

    //option de connexion
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    $connection = new PDO($dns, $username, $password, $options);
} catch (Exception $e) {
    die("Connexion à MySQL impossible : " . $e->getMessage());
}
?>