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
                    <h2>Exercices PHP</h2>
                </div>
            </div>
        </div>
        
        <br/>
        <br/>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">

                <?php 
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $adresse = $_POST['adresse'];
                    $tel = $_POST['tel'];
                    $email = $_POST['mail'];
                
                    if(count($_POST)>0){
                        echo "Nom: ".$nom."<br/>";
                        echo "Prénom: ".$prenom."<br/>";
                        echo "Téléphone: ".$tel."<br/>";
                        echo "Adresse: ".$adresse."<br/>";
                        echo "Mail: ".$email."<br/>";
                    }
                            $n = substr($tel, 0, 1);
                        
                            if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
                                echo ' ';
                            } else{
                                echo '<b>Cet email a un format non adapté.</b><br/>';
                            }
                        
                            if(preg_match('#^0[1-68][0-9]{10}$#', $tel) && ($n==0)){
                                echo ' ';
                            } else{
                                echo '<b>Ce numéro a un format non adapté.</b><br/>';
                            }
                ?>
                
                <script>
                    //regexMail = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
                    //if()
                </script>
                
            </div>
        </div>
    </div>

</body>
</html>
