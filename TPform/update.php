<?php
require_once "db.php";


if (count($_POST)>0){
    $nom=$_POST["user_name"];
    $email=$_POST["user_email"];
    $message=$_POST["user_message"];
    $id=$_POST["user_name_id"];
    


    $isExist="select * from tablio where id='".$id."'";

    $exist = mysqli_query ($connection, $isExist);

    $var=mysqli_num_rows($exist);

    $sql = "UPDATE tablio SET name='".$nom."', email='".$email."', message='".$message."' where id='".$id."'";


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
