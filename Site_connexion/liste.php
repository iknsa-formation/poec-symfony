<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7"> 
                <?php    
                    define("SERVERBDD","localhost");
                    define("NAMEBDD","formation");
                    define("USERBDD","root");
                    define("PASSWORDBDD","");
                
                    $connexion = new mysqli(SERVERBDD,USERBDD,PASSWORDBDD,NAMEBDD);
                
                    session_start();
                
                    $req_nom = "SELECT prenom, nom FROM users WHERE nom='".$_SESSION['nom']."' AND mdp='".$_SESSION['mdp']."'";
                    $result = mysqli_query($connexion,$req_nom);
                
                    foreach($result as $value){
                        echo "<div class='alert alert-info' role='alert'>Bonjour ".$value['prenom']." ".$value['nom']."</div>";
                    }  
                ?> 
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Mot de passe</th>
                            <th>Téléphone</th>
                            <th>Code Postal</th>
                            <th>Mail</th>
                            <th>Modifications</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $requete = "SELECT * FROM users";
                                $r = mysqli_query($connexion,$requete);
                        
                                foreach($r as $valeur){
                                    echo "<tr><td>".$valeur['id']."</td>";
                                    echo "<td>".$valeur['nom']."</td>";
                                    echo "<td>".$valeur['prenom']."</td>";
                                    echo "<td>********</td>";
                                    echo "<td>".$valeur['telephone']."</td>";
                                    echo "<td>".$valeur['code_postal']."</td>";
                                    echo "<td>".$valeur['mail']."</td>";
                                    echo "<td><a href='modifier.php?id=".$valeur['id']."'>Modifier</a></td></tr>";
                                }
                            ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

</body>
</html>
