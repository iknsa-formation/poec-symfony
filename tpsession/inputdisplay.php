<?php include 'index.html'?>
<?php require_once "db.php";?>
<hr/><?php

var_dump($_POST);

if (count($_POST)>0){
    $name=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $hash = password_hash ("password", PASSWORD_DEFAULT);
    
    
    echo "Welcome: ". $_POST["username"]. "<br />";
    echo "Your email is: ". $_POST["email"]. "<br />";
    echo "This is your password: ".password_hash("password", PASSWORD_DEFAULT)."\n"."<br/>";



 
    $requete="select email from cptable where email='".$email."'";
    $resultat = mysqli_query ($connection, $requete);

    $var=mysqli_num_rows($resultat);

    if ($var>0) {
        echo "Cet utilisateur existe deja";
    }
    else{

        $sql = "INSERT INTO cptable (username, email, password) VALUES('".$name."','".$email."','".$password."')";

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