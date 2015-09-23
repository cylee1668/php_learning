<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_fill() Function</h1>
<?php
$a1=array_fill(3,4,"blue");
$b1=array_fill(0,1,"red");
print_r($a1);
echo "<br>";
print_r($b1);
?>



<h1>PHP array_fill_keys() Function</h1>
<?php
$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");
print_r($a1);
?>

</body>
</html>