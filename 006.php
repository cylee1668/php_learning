<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like ". $cars[0]. "," .$cars[1] . "and". $cars[2] .".";
echo "<h1>I linke $cars[0] , $cars[1] and $cars[2] .</h1>";

?>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo"<br/>";
echo "Peter is ". $age['Joe'];
echo "<br/>"
?>

<?php
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++)
	{
	echo $cars[$x];
	echo "<br>";	
	}

?>

<?php
foreach($age as $x=>$x_value)
	{
		echo "Key=" . $x . ",Value=" .$x_value;
		echo "<br>";		
	}

?>
<?php
	foreach($cars as $x=>$x_value)
	{
		echo "Car=" . $x . ",value=" .$x_value;
		echo "<br>";	
	}
?>

<?php
// a two-dimensional array
$cars2=array
	(
	array("Volvo",100,96),
	array("BMW",60,59),
	array("Toyota",110,100)
	);
	
echo $cars2[0][0].": Ordered " .$cars2[0][1]. " Sold: ".$cars2[0][2]."<br>";
echo $cars2[1][0].": Ordered " .$cars2[1][1]. " Sold: ".$cars2[1][2]."<br>";
echo $cars2[2][0].": Ordered " .$cars2[2][1]. " Sold: ".$cars2[2][2]."<br>";
?>




</body>
</html>