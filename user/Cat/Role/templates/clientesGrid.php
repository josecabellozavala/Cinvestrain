



 

<center>
<table>
    <thead>
        <tr>
            <th>Role_ID</th>
            <th>Type</th>
           
            <th>Edit</th>
            <th>Delete</th>
        </tr> 
    </thead>  
    <tbody> 
        <?php foreach ($view->clientes as $cliente):  // uso la otra sintaxis de php para templates ?>
            <tr>
                <td><?php echo $cliente['Role_ID'];?></td>
                <td><?php echo $cliente['Type'];?></td>
                
                <td><a class="edit" href="javascript:void(0);" data-id="<?php echo $cliente['Role_ID'];?>">Edit</a></td>
                <td><a href="borra.php?codigo_clase_delete=<?php echo $cliente['Role_ID'];?>" onclick="return confirm('Do you want to delete the record?')">Delete</a></td> 
            </tr>
            
           
        <?php endforeach; ?>
            
            
    </tbody>
</table>




﻿<div class="bar">
    <a id="new" class="button" href="javascript:void(0);">New Role</a>
</div>
</center>