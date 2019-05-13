<h2>


<?php

//while loop
    
$x = 1;
    
while($x <= 10) {
    
    
    echo $x;
    $x++;
    
} 
    
echo "<br />";
    
$y = 5;
    
do {
    
    echo $y;
    $y++;
} while ($y<10);
    
echo "<br />";
    
// for loop
    
for ($x=0; $x <= 10; $x++) {
    
    echo "Number is : " .$x. "<br />";
    
}
    
echo "<br />";
    
// foreach
    
$products = array('Dell', 'Macbook', 'Google Pixel', 'Galaxy');
    
foreach ($products as $product) {
    
    echo "This is " . $product . "<br />";
}
    
echo "<br />";
    
$products1 = array('Dell' => 800, 'Macbook' => 600, 'Google Pixel' => 500, 'Galaxy' => 400);
    
foreach ($products1 as $product => $price) {
    
    
    echo $product . " price is " . $price . "<br />";
}
    
    
    


?>


</h2>