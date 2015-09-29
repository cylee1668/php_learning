<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP 5 Sorting Arrays</h1>

<h2>Sort Array in Ascending Order - sort()</h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
	echo $cars[$x];
	echo "<br>";	
}
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
     echo $numbers[$x];
     echo "<br>";
}
?>

<h2>Sort Array in Descending Order - rsort()</h2>

<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x <  $clength; $x++) {
     echo $cars[$x];
     echo "<br>";
}
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
     echo $numbers[$x];
     echo "<br>";
}
?>

<h2>Sort Array (Ascending Order), According to Value - asort()</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}
?>

<h2>Sort Array (Ascending Order), According to Key - ksort()</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}
?>

<h2>Sort Array (Descending Order), According to Value - arsort()</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}
?>


<h2>Sort Array (Descending Order), According to Key - krsort()</h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}
?>

</body>
</html>