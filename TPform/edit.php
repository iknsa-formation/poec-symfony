<?php require_once 'db.php';?>
<hr/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">



<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tablio WHERE id= $id";
$resultat = mysqli_query($connection, $sql);
var_dump($resultat);

while ($row= mysqli_fetch_object ($resultat) ) {
?>

<form class="table" action="update.php" method="post">
    <div>
        <label for="id">Nom :</label>
        
        <?php echo $row->id;?>
        
        <input type="text" id="id" name="user_name_id" value="<?php echo $row->id;?>" style="visibility:hidden">
    </div>
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name" value="<?php echo $row->name;?>">
    </div>

    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email" value="<?php echo $row->email;?>">
    </div>

    <div>
        <label for="message">Message :</label>
        <input id="message" name="user_message" value="<?php echo $row->message;?>">
    </div>

    <div class="button">
        <button type="submit">UPDATE</button>
    </div>
</form>


<?php } 
mysqli_free_result($resultat);
?>