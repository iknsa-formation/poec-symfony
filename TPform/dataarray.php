<?php
require_once 'db.php';
?>
<hr/>
<table class="table">
    <thead>
        <tr>
            <td>
                id
            </td>
            <td>
                NAME
            </td>
            <td>
                EMAIL
            </td>
            <td>
                MESSAGE
            </td>
            <td>
                DELETE
            </td>
        </tr>
    </thead>

    <tbody>
        <tr>
            <?php 

            $requete="select *from tablio";
            $resultat = mysqli_query($connection, $requete);

            while ($row= mysqli_fetch_assoc ($resultat) ) {?>
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
                <?$sql = "DELETE FROM tablio WHERE id=$id";
                ?> <input type="submit" value="DELETE ROW">    
            </td>
        </tr>
        <?php }
        ?>
    </tbody>
</table>