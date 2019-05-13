<?php 


 //strlen()

 $name = "Tehmeer Ali Paryani!";

 echo strlen($name);

 //str_word_count()

 echo "<br />";
 echo str_word_count($name);

 //strrev()

 echo "<br />";
 $name = "Tehmeer";
 echo strrev($name);

 //strpos()

 echo "<br />";
 $name = "Tehmeer Ali Paryani";
 echo strpos($name, "Ali Paryani");

 //str_replace('', '', variable)

 echo "<br />";
 $name = "Hello world";
 echo str_replace('world', 'User', $name);




?>