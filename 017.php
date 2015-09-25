<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_key_exists() Function</h1>

<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
   {
   echo "Key exists!";
   }
else
   {
   echo "Key does not exist!";
   }
?>


<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Toyota",$a))
   {
   echo "Key exists!";
   }
else
   {
   echo "Key does not exist!";
   }
?> 


<h1>PHP array_keys() Function</h1>
<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
echo "<br/>";
print_r($a);
?>

</body>
</html>