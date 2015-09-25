<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_intersect_uassoc() Function</h1>

<?php
function myfunction($a,$b)
{
if ($a===$b)
   {
   return 0;
   }
   return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_intersect_uassoc($a1,$a2,"myfunction");
print_r($result);
?>

<h1>PHP array_intersect_ukey() Function</h1>

<?php
function myfunction2($a,$b)
{
if ($a===$b)
   {
   return 0;
   }
   return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_intersect_ukey($a1,$a2,"myfunction2");
print_r($result);
?>

<h2>example2</h2>
<?php
function myfunction3($a,$b)
{
if ($a===$b)
   {
   return 0;
   }
   return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"black","b"=>"yellow","d"=>"brown");
$a3=array("e"=>"purple","f"=>"white","a"=>"gold");

$result=array_intersect_ukey($a1,$a2,$a3,"myfunction3");
print_r($result);
?>
</body>
</html>