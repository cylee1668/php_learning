<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP 5 switch Statement</h1>
<?php
$favcolor = "red";

switch ($favcolor) {
	case "red":
		echo "Your favorite color is red!";
		break;
	case "blue";
		echo "your favorite color is blue!";
		break;
	case "green";
		echo "your favorite color is green!";
		break;
	default:
		echo "no answer";
}
?>
</body>
</html>