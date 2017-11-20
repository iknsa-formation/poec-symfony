<?php
require_once 'db.php';
?>
<hr/>
<table>
<thead></thead>
    
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
        
        
        <?php }
        ?>
        </tr>
    </tbody>
</table>