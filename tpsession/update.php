<?php
require_once "db.php";?>

<?php


if (count($_POST)>0){
    $name=$_POST["username"];
    $email=$_POST["email"];
    $id=$_POST["id"];


    $isExist="SELECT * FROM cptable WHERE0 id='".$id."'";

    $exist = mysqli_query ($connection, $isExist);

    $var=mysqli_num_rows($exist);

    $sql = "UPDATE cptable SET username='".$name."', email='".$email."', where id='".$id."'";


        $update = mysqli_query($connection,$sql);

        if ($update) {
            echo 'ca a marché';
        }
        else {
            echo 'ca ne marche pas';
        }

        mysqli_close ($connection);

        var_dump($update);

}
?>