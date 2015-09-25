<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_map() Function</h1>

<?php
function myfunction($num)
{
   return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
?>


<h2>example2</h2>
<?php
function myfunction2($v)
{
if ($v==="Dog")
   {
   return "Fido";
   }
return $v;
}

$a=array("Horse","Dog","Cat");
print_r(array_map("myfunction2",$a));
?>
<h2>example3</h2>
<?php
function myfunction3($v1,$v2)
{
if ($v1===$v2)
   {
   return "same";
   }
return "different";
}

$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Rat");
print_r(array_map("myfunction3",$a1,$a2));
?>
<h2>example4</h2>
<?php
function myfunction4($v) 
{
$v=strtoupper($v);
   return $v;
}

$a=array("Animal" => "horse", "Type" => "mammal");
print_r(array_map("myfunction4",$a));
?>

</body>
</html>