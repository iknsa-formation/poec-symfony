<?php require_once 'dp.php';

if(isset($_POST ))
    
    
    
    
    
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
                <a href="edit.php?id= <?php echo $row[$id]"    
            </td>
        </tr>
        <?php }
        ?>
    </tbody>
</table>