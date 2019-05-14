



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GetPost</title>
</head>
<body>
   
   <form action="" method="post">
       <input type="text" name="name" id="">
       <input type="submit" value="submit">
   </form>
    
</body>
</html>


<?php 

    if(isset($_POST['name'])) {
    echo $_POST['name'];
    echo "<br />";
        } else {
        
        die("Field is empty - please enter the password");
    }

?>