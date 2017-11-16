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
               <form method="post" action="index.php">
                    <div class="form-group">
                        <label for="numero">Entrer un numéro de téléphone:</label>
                        <input type="text" class="form-control" name="numero" id="numero" maxlength="10">
                        <button type="submit" class="btn btn-info">Valider</button>
                    </div>
                </form>

                <?php 
                    $num = $_POST['numero'];
                    $n = substr($num, 0, 2);

                    if(strlen($num)>2){
                        if($n == 06 || $n == 07)
                            echo "<i>C'est un numéro de portable</i>";
                        elseif(($n == 01) || ($n == 02) || ($n == 03) || ($n == 04) || ($n == 05) || ($n == 09))
                            echo "<i>C'est un numéro fixe</i>";
                        elseif($n == 08)
                            echo "<i>C'est un numéro spécial</i>";
                    }
                    else{
                        if($num == 17)
                            echo "<i>C'est la police</i>";
                        elseif($num == 18)
                            echo "<i>Ce sont les pompiers</i>";
                        elseif($num == 15)
                            echo "<i>C'est le SAMU</i>";
                    }
                ?>

            </div>
        </div>
    </div>

</body>
</html>
