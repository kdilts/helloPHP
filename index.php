<!DOCTYPE html>
<html>
	<head>
		<title>hello PHP</title>
	</head>
	<body>
		<?php

		echo "Hello PHP";
		echo "<h1>It is ". date("h:i:sa") ." on ".date("m/d/Y")."</h1>";

		$myVar = "this is my variable";
		echo "Double quotes: $myVar<br>";
		echo 'Single quotes: $myVar<br><br>';

		echo "This is line number " . __LINE__ . " of file " . __FILE__ . "<br><br>";

		echo "3 * 5 = " . mult(3,5) . "<br><br>";

		echo "2 < 9? " . (2 < 9) . "<br>";
		echo "2 == 3? " . (2==3) . "<br>";
		echo "2 == 2? " . (2==2) . "<br><br>";

		echo "2 < 9? " . trueFalse(2 < 9) . "<br>";
		echo "2 == 3? " . trueFalse(2==3) . "<br>";
		echo "2 == 2? " . trueFalse(2==2) . "<br><br>";

		function trueFalse($bool){
			if($bool){ return "true"; }else{ return "false"; }
		}

		function mult($x,$y){
			echo "multiply($x,$y) was called<br>";
			return $x * $y;
		};
		?>
	</body>
</html>