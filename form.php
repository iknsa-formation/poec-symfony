<?php
require_once "db.php";


if (count($_POST)>0){
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$adresse=$_POST["adresse"];
$fonction=$_POST["fonction"];

    


    echo "Welcome: ". $_POST['firstname']. "<br />";
    echo "Your name is: ". $_POST["lastname"]. "<br />";
    echo "Your address is: ". $_POST["adresse"]."<br />";
    echo "Your function is: ". $_POST["fonction"]."<br />";



$sql = "INSERT INTO myfirstdb (firstname, lastname, adresse, fonction) VALUES('".$firstname."','".$lastname."','".$adresse."','".$fonction."')";

var_dump($sql);

$insert = mysqli_query($connection,$sql);

if ($insert) {
    echo"ca a marché";
}
else {
    echo "ca ne marche pas";
}

mysqli_close ($connection);
    
    var_dump($insert);
}


?>