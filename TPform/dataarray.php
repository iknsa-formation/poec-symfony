<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<?php
require_once 'db.php';
?>
<hr/>
<table class="table">
    <thead>
        <tr>
            <td>
                ID
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
                EDIT
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
                <a href="edit.php?id=<?php echo $row['id'] ?>">
                    <img src="https://cdn4.iconfinder.com/data/icons/pictype-free-vector-icons/16/write-32.png" > </a> 
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row['id'] ?>">
                    <img src="https://cdn2.iconfinder.com/data/icons/flat-ui-icons-24-px/24/cross-24-32.png" > </a> 
            </td>
        </tr>
        <?php }
        ?>
    </tbody>
</table>