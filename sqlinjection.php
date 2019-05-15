<h1>SQL Injection</h1>

<?php 

    
    include 'dbconnect.php';
    

    error_reporting(0);

    $email = $_POST['email'];
    
    /*

    if(isset($email)) {
        echo $email;
        
        $sql = $pdo -> query("select * from tbl_email where email= '$email'");
        if ($sql -> rowCount()) {
            
            echo "Email Matched" . " " .$email;
            
        } else { 
            
            echo "Wrong email";
            
        }
    }
    
    */

    $sql = $pdo -> prepare("select * from tbl_email where email=:e");
    $sql->bindParam(':e', $email);
    $sql -> execute();

    $row = $sql -> fetch(PDO::FETCH_ASSOC);

    if($row['email'] == $email) {
        
        echo "Email matched " . $email;
    } else {
        
        echo "Wrong email" ; 
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Injection</title>
</head>
<body>
   <form action="" method="post">
       
       <p> <input type="text" name="email" > </p>
       <input type="submit" value="Check Email" name="submit" >
       
   </form>
    
</body>
</html>