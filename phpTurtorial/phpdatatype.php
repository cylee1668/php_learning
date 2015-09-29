<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP string</h1>
<?php 
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
?>

<h1>PHP Integer</h1>
<?php 
$x = 5985;
var_dump($x);
?> 

<h1>PHP Float</h1>
<?php 
$x = 10.365;
var_dump($x);
?>


<h1>PHP Boolean</h1>

<?php
$x = true;
$y = false;
echo "$x and $y"
?>

<h1>PHP Array</h1>


<?php 
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

<h1>PHP Object</h1>
<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>


<h1>PHP NULL Value</h1>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>


















</body>
</html>