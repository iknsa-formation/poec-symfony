<?php
require_once "db.php";


if (count($_POST)>0){
    $name=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];




    echo "Welcome: ". $_POST["username"]. "<br />";
    echo "Your email is: ". $_POST["email"]. "<br />";
    echo "This is your password: ". $_POST["password"]."<br />";

  
    
    
    
    
    
    
    
    $isExist="select email from cptable where email='".$email."'";

    $exist = mysqli_query ($connection, $isExist);

    $var=mysqli_num_rows($exist);

    if ($var>0) {
        echo "Cet utilisateur existe deja";
    }
    else{

        $sql = "INSERT INTO cptable (name, email, password) VALUES('".$name."','".$email."','".$password."')";

        var_dump($sql);

        $insert = mysqli_query($connection,$sql);

        if ($insert) {
            echo"ca a marché";
        }
        else {
            echo "ca ne marche pas";
        }

        mysqli_close ($connection);

        
    }
}


?>