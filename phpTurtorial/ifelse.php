<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP - The if Statement</h1>
<?php
$t = date("H");


echo "the \$t is $t <br/>";
if ($t <  "20") {
     echo "Have a good day!";
}
?>

<h1>PHP - The if...else Statement</h1>
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<h1>PHP - The if...elseif....else Statement</h1>

<?php
if($t < "10") {
	echo "have a good morning!";
} elseif ($t < "20") {
	echo "Have a good day !";
} else {
	echo "Have a good night!";	
}

?>

</body>
</html>