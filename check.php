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