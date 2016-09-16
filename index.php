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
			echo "Double quotes: $myVar";
			echo 'Single quotes: $myVar';
		?>
	</body>
</html>