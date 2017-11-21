<?php
require_once "data.php";
 if(count($_POST)>0) {
        $sql = "UPDATE users set firstname='" . $_POST["firstname"] . "',lastname='" . $_POST["lastname"] . "', adresse='" . $_POST["adresse"] . "', fonction='" . $_POST["fonction"] . "' WHERE id=2";
        $update = mysqli_query($connection,$sql);
          if($update){
            ?>
            <div class="alert alert-success" role="alert">
              Modification ok
          </div>
          <?php 
            header("Location:index.php");
          } else{
          ?>
          <div class="alert alert-danger" role="alert">
            Modification KO
        </div>
        <?php
          }
      } 
    ?>


