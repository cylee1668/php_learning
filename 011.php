<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_diff_uassoc() Function</h1>

<?php
function myfunction($a,$b)
{
	if($a===$b)
	{
		return 0;
	}
	return($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","e"=>"green","f"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);
print_r($a1)
?>

<h2>example2</h2>

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
$a2=array("a"=>"red","b"=>"green","d"=>"blue");
$a3=array("e"=>"yellow","a"=>"red","d"=>"blue");

$result=array_diff_uassoc($a1,$a2,$a3,"myfunction2");
print_r($result);
?>


<?php

?>
</body>
</html>