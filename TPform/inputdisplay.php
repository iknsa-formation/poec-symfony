<?php
require_once "db.php";


if (count($_POST)>0){
    $nom=$_POST["user_name"];
    $email=$_POST["user_email"];
    $message=$_POST["user_message"];




    echo "Welcome: ". $_POST["user_name"]. "<br />";
    echo "Your email is: ". $_POST["user_email"]. "<br />";
    echo "Here is your message: ". $_POST["user_message"]."<br />";

    $isExist="select email from tablio where email='".$email."'";
    
    $exist = mysqli_query ($connection, $isExist);

    $var=mysqli_num_rows($exist);
    
    if ($var>0) {
        echo "Cet utilisateur existe deja";
    }
    else{

        $sql = "INSERT INTO tablio (name, email, message) VALUES('".$nom."','".$email."','".$message."')";

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

}


?>