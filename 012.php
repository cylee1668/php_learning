<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_diff_ukey() Function</h1>
<p>Compare the keys of two arrays (using a user-defined key comparison function), and return the differences:</p>

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
$a2=array("a"=>"blue","b"=>"black","c"=>"blue");

$result=array_diff_ukey($a1,$a2,"myfunction");
print_r($result);
?>
</body>
</html>