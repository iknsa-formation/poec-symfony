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
                    <?php    
                        define("SERVERBDD","localhost");
                        define("NAMEBDD","formation");
                        define("USERBDD","root");
                        define("PASSWORDBDD","");

                        $connexion = new mysqli(SERVERBDD,USERBDD,PASSWORDBDD,NAMEBDD);

                        if(session_start()){
                            echo "<li style='margin-top:15px;'><b>Bonjour ".$_SESSION['mail']." "."</b></li>";
                    ?>
                    <li><button type="button" class="btn btn-outline-danger btn-sm" style='margin-top:10px; margin-left:10px;'><a href="deconnexion.php" style="color:red;">Déconnexion</a></button></li>
                    <?php
                        }
                    ?>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7"> 
 
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
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
                                    echo "<td>".$valeur['telephone']."</td>";
                                    echo "<td>".$valeur['code_postal']."</td>";
                                    echo "<td>".$valeur['mail']."</td>";
                                    if($_SESSION['id'] == $valeur['id'])
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
