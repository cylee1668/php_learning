<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP Global Variables - Superglobals</h1>
<?php 
$x = 75;
$y = 25; 

function addition() {
     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>



</body>
</html>