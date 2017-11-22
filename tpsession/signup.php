<?php include 'index.html'?>
<?php require_once "db.php";?>
<hr/>
<!doctype html>
<html lang="en">
    <head>
        <title>Hello, work!</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>





    <body class="text-center">


        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4  text-center">
                    <img class="text-center" src="https://cdn0.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/Upload-256.png"  alt="Log In">
                    <br/>
                    <h1 class="text-center login-title">Create your account on CP-TP badass!</h1>
                    <div class="account-wall">
                        <br/>

                        <form class="form-sigin text-center" method="post" action="inputdisplay.php">

                            <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
                            <br/>
                            <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
                            <br/>
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                            <br/>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                Sign Up</button>
                            <br/>

                        </form>
                    </div>
                    <a href="login.php" class="text-center new-account">Already have an account? Sign In!</a>
                </div>
            </div>
        </div>

    </body>
</html>