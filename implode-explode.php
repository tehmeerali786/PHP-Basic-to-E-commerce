<h2></h2>


<?php 

//explode() String - > to -> Array


$str = "My name is Tehmeer Ali";
$exp = explode(",", $str);
echo "<pre>";
print_r($exp);

$str = "My name is Tehmeer Ali";
$exp = explode(" ", $str);
echo "<pre>";
print_r($exp);

$str = "My name is Tehmeer Ali";
$exp = explode("i", $str);
echo "<pre>";
print_r($exp);

$str = "My name is Tehmeer Ali";
$exp = explode("a", $str);
echo "<pre>";
print_r($exp);


//explode() Array - > to -> String

$arr = array("my", "name", "is", "Tehmeer", "Ali");
$str = implode(",", $arr);
echo $str;

echo "<br />";

$arr = array("my", "name", "is", "Tehmeer", "Ali");
$str = implode(" ", $arr);
echo "<h2>" . $str . "</h2>" ;

echo "<br />";

$arr = array("my", "name", "is", "Tehmeer", "Ali");
$str = implode("-", $arr);
echo $str;


?>