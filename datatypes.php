<!DOCTYPE html>
<html>
<head>
	<title>Data Types</title>
</head>
<body>

	<h2>Data Types</h2>

	<?php
		$x = "String";
		echo $x;
		echo "<br />";
		var_dump($x);
		echo "<br />";


		$y = 12345;
		echo $y;
		echo "<br />";
		var_dump($y);
		echo "<br />";

		$z = 1234.5;
		echo $z;
		echo "<br />";
		var_dump($z);
		echo "<br />";


		if ($x) {

			echo 'true';

		} else {

			echo "false";
		}

		echo "<br />";


		$laptops = array("DELL", "HP", "LENOVO", "MAC");
		print_r($laptops);

		echo "<br />";

		echo $laptops[0];

		echo "<br />";

		$a = null;
		echo $a;


		?>


</body>
</html>