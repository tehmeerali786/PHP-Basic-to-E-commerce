<h1>This is view.php</h1>
<h2>

<?php 


    session_start();
    echo $_SESSION['name'] . "<br />";
    echo $_SESSION['age'] . "<br />";
    echo $_SESSION['country'] . "<br />";



?>


</h2>