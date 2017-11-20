<?php
require_once 'db.php';
?>
<table>
<thead></thead>
    
    <tbody>
    <tr>
        <?php 
        
        $requete="select *from myfirstdb";
        $resultat = mysqli_query($connection, $requete);
        
        while ($row= mysqli_fetch_assoc ($resultat) ) {?>
      
        
        <td>
            <?php echo $row ['id']; ?>
        </td>
        <td>
            <?php echo $row ['firstname']; ?>
        </td> 
        <td>
            <?php echo $row ['lastname']; ?>
        </td> 
        <td>
            <?php echo $row ['adresse']; ?>
        </td>
        <td>
            <?php echo $row ['fonction']; ?>
        </td>
        
        <hr/>
        
        <?php }
        ?>
        </tr>
    </tbody>
</table>