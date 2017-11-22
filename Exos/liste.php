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
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <h2>Exercice PHP</h2>
                </div>
            </div>
        </div>
        
        <br/>
        <br/>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <a href="index.php">Formulaire d'inscription</a>
                <br />
                <br />
            </div>
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
                
                    $requete = "SELECT * FROM users";
                    $r = mysqli_query($connexion,$requete);
                    
                ?>
                
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
                                foreach($r as $valeur){
                                    echo "<tr><td>".$valeur['id']."</td>";
                                    echo "<td>".$valeur['nom']."</td>";
                                    echo "<td>".$valeur['prenom']."</td>";
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
