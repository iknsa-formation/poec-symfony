<?php require_once 'db.php';

    if(count($_POST)>0){
    $id = $_GET["id"];
    
    $sql="UPDATE tablio set name='".$_POST["name"]."',email='".$_POST["email"]."',message='".$_POST["message"]."' WHERE id='".$id."'";

    $update = mysqli_query($connection, $sql);

    if($update){
    ?>
    <div>modification ok</div>

    <?php
        } else {
        ?>
        <div>Modif KO</div>
    <?php
    }
}

    $id = $_GET["id"];
    $sql = "SELECT * FROM tablio WHERE id= $id";
        $resultat = mysqli_query($connection, $sql);

            var_dump("eeeeeee");
        while ($row= mysqli_fetch_object ($resultat) ) {
    ?>
    
<form action="inputdisplay.php" method="post">
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
                <textarea id="message" name="user_message" value="<?php echo $row->message;?>"></textarea>
            </div>

            <div class="button">
                <button type="submit">Envoyer</button>
            </div>
        </form>


    <?php } 
mysqli_free_result($resultat);
?>