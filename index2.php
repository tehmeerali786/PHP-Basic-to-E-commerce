<?php

    include 'dbconnect.php';


?>




<h1>PHP PDO CRUD OPERATIONS</h1>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
</head>
<body>
    
    <form action="" method="post">
       
       <?php 
        
        
            if(isset($_POST['btnedit'])) {
                
                
                
                
                    
                
                $select = $pdo -> prepare("select * from tbl_product where id=" . $_POST['btnedit']);
                $select -> execute();
                
                
                if ($select) {
                
            
                    $row = $select -> fetch(PDO::FETCH_OBJ);
                                                 
                    // print_r($row);
                    
                    echo '
                     
                        <p> <input type="text" name="txtname" value = " ' . $row -> productname . '  "> </p>
                        <p> <input type="text" name="txtid" value = " '  . $row -> productprice .  ' " > </p>
                        <p> <input type="hidden" name="txtid" value = " ' . $row -> id . ' " > </p>
                        <button type="submit" name="btnupdate">Update</button>
                        <button type="submit"  name="btncancel">Cancel</button>
                    
                    ';
                
                
                    
                    } 
                        
                        
                    } else {
                
                ?>
                
                
                <p> <input type="text" name="txtname" id="" placeholder="ProductName" > </p>
                <p> <input type="text" name="txtprice" id="" placeholder="ProductPrice" > </p>
                <input type="submit" value="Save" name="btnsave">
                
                <?php
                
            }
        
        
        
        
        ?>
       
       
       
       
        
            
    
           
           <br />
            <br />
           
            
            
            
            <table id="producttable" border="1">
        <thead>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </thead>
        <tbody>
           
           <?php 
            
            $select = $pdo -> prepare("select * from tbl_product");
            $select -> execute();
            
            while($row = $select -> fetch(PDO::FETCH_OBJ)){
                
                ?>
                
                    <tr>
                    
                        <td> <?php echo $row -> id ?></td>
                        <td>  <?php echo $row -> productname ?> </td>
                        <td>  <?php echo $row -> productprice ?> </td>
                        <td> <button type="submit" value="<?php echo $row->id ?>" name="btnedit"><?php echo $row -> id ?></button> </td>
                        <td> <button type="submit" value="<?php $row->id ?>" name="btndelete">DELETE</button></td>
                        
                        
                    
                    
                    
                    
                    
                    
                    </tr>
                <?php
                    
                
            }
            
            
            
            
            ?>
            
        </tbody>
        
        
    </table>
    </form>
    
    <br />
    
    
    
    
</body>
</html>


