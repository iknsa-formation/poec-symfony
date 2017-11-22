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
                <form method="post" action="fichier_form.php">
                    <div class="form-group">
                        <label>Nom*:</label>
                            <input type="text" class="form-control" name="nom" id="nom" required>
                        <label>Prénom*:</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                        <label>Téléphone:</label>
                            <input type="text" class="form-control" name="tel" id="tel" maxlength="10" pattern="[0-9]{10}">
                        <label>Code Postal:</label>
                            <input type="text" class="form-control" name="adresse" id="adresse">
                        <label>Mail*:</label>
                            <input type="text" class="form-control" name="mail" id="mail" required>
                        <br/>
                        <button type="submit" class="btn btn-info">Valider</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>

</body>
</html>
