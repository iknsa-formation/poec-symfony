<?php include 'index.html'?>
<?php require_once "db.php";?>
<hr/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">



<?php
$id = $_GET["id"];

$sql = "SELECT * FROM cptable WHERE id= $id";
$resultat = mysqli_query($connection, $sql);
var_dump($resultat);

while ($row= mysqli_fetch_object ($resultat) ) {
?>

<body class="text-center">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4  text-center">
                <img class="text-center" src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/update-128.png"  alt="Log In">
                <br/>
                <h1 class="text-center login-title">Edit your data:</h1>
                <div class="account-wall">
                    <br/>
                    <form class="form-sigin text-center" method="post" action="update.php">
                        <input name="id" type="hidden" class="form-control" value="<?php echo $row->id;?>" required autofocus>
                        <br/>

                        <input name="username" type="text" class="form-control" value="<?php echo $row->username;?>" required autofocus>
                        <br/>
                        <input name="email" type="text" class="form-control" value="<?php echo $row->email;?>" required autofocus>
                        <br/>

                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            UPDATE</button>
                        <br/>

                    </form>
                </div>

            </div>
        </div>
    </div>
</body>


<?php } 
mysqli_free_result($resultat);
?>