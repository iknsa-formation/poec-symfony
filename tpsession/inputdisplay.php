<?php include 'index.html'?>
<?php require_once "db.php";?>
<hr/><?php
var_dump($_POST);
if (count($_POST)>0){
    $name=$_POST["username"];
    $email=$_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
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

        if (mysqli_query($connection,$sql)) {
    
echo '<div>
        bien jouer<meta http-equiv="refresh" content="5; URL=http://localhost/poec/php/poec-symfony/tpsession/list.php"/><div/>';}
else { echo 'Pluton';}

        mysqli_close ($connection);

    }
}




?>
