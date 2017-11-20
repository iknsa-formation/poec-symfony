<?php require_once 'dp.php';

$id = $_POST["id"]    
    
    var_dump($sql);die;

    $sql="UPDATE tablio set name='".$_POST["name"]."',email='".$_POST["email"]."',message='".$_POST["message"]."' WHERE id='".$id."'";
    
var_dump($sql);die;

$update = mysqli_query($connection, $sql);
    if($update){
?>

<div>modification ok</div>

<?php
                
} else {
        
        ?>
<div>Modif KO</div>
    }

    $resultat = mysqli_query($connection, $sql);

            while ($row= mysqli_fetch_object ($resultat) ) {?>
            <td>
                <?php echo $row ['id']; ?>
            </td>
            <td>
                <?php echo $row ['name']; ?>
            </td> 
            <td>
                <?php echo $row ['email']; ?>
            </td> 
            <td>
                <?php echo $row ['message']; ?>
            </td>
            <td>
