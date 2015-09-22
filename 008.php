<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_chunk() Function</h1>
<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
echo"<br/><br/><br/>"
?>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true));

?>

<h1>PHP array_column() Function</h1>
<?php
//An array that repersents a possible record set returned from a database

$a = array(
	array(
	'id' =>5698,
	'first_name' => 'Peter',
	'last_name' => 'Griffin',
	),
	array(
	'id' => 4767,
	'first_name' => 'Ben',
	'last_name' => 'Smith',
	),
	array(
	'id' => 3809,
	'first_name' => 'Joe',
	'last_name' => 'Doe',
	),
);
echo '$last_name = array_column($a, "last_name");<br/>';
$last_name = array_column($a, 'last_name');
print_r($last_name);
echo "<br/><br/>";
echo '$last_name = array_column($a, "last_name", "id");<br/>';
$last_name = array_column($a, "last_name", "first_name");
print_r($last_name);
?>


<?php
echo '<br/><br/>$fname=array("Peter","Ben","Joe");<br/>
$age=array("35","37","43");<br/>
$c=array_combine($fname,$age);<br/>
print_r($c);<br/><br/>';
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);
?>





















</body>
</html>