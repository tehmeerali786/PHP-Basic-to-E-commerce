<?php


    include 'dbconnect.php';
    

    if(isset($_POST['btnsave'])){
        
        $pname = $_POST['txtname'];
        $price = $_POST['txtprice'];
        
        if (!empty($pname && $price)) {
            
            $insert = $pdo -> prepare("insert into tbl_product(productname, productprice) value(:name, :price)");
            $insert->bindParam(':name', $pname);
            $insert->bindParam(':price', $price);
            
            $insert -> execute();
            
            if ($insert->rowCount()) {
                
                echo "Insert Successful";
            } else
                
            {
                echo "Insert Fail";
            }
            
        } else {
            
            echo "Fields are empty";
            
            
        }
    }




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
        <p> <input type="text" name="txtname" id="" placeholder="ProductName" > </p>
        <p> <input type="text" name="txtprice" id="" placeholder="ProductPrice" > </p>
            <input type="submit" value="Save" name="btnsave">
    </form>
    
    <br />
    
    <table id="producttable">
        <thead>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </thead>
        <tbody>
            
        </tbody>
        
        
    </table>
    
    
</body>
</html>


<hr>


<?php 

    $select = $pdo -> prepare("select * from tbl_product");
    $select -> execute();

    /*
    echo "<pre>";

    while ($row = $select -> fetch()){
        
        print_r($row);
    }
    
    */
    
    /*
    echo "<pre>";

    while ($row = $select -> fetch(PDO::FETCH_BOTH)){
        
        print_r($row);
    }
    
    */

    /*

    echo "<pre>";

    while ($row = $select -> fetch(PDO::FETCH_NUM)){
        
        print_r($row);
    }
    
    */

    /*

    echo "<pre>";

    while ($row = $select -> fetch(PDO::FETCH_NUM)){
        
        echo $row[0];
    }
    
    */

    /*

    echo "<pre>";

    while ($row = $select -> fetch(PDO::FETCH_ASSOC)){
        
        print_r($row);
    }
    
    */

    /*

    echo "<pre>";

    while ($row = $select -> fetch(PDO::FETCH_ASSOC)){
        
        echo $row['productname']. "<br />";
    }
    
    */

    /*
    echo "<pre>";

    while ($row = $select -> fetch(PDO::FETCH_OBJ)){
        
        print_r($row);
        
        echo "<br />";
        echo $row -> productname . "<br />";
        echo "<br />";
    }
    
    */

    /*
    echo "<pre>";

    $row = $select -> fetchAll(PDO::FETCH_OBJ);

    print_r($row);
    
    */

    


?>