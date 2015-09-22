<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_count_values() Function</h1>
<?php
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
?>

<h1>PHP array_diff() Function</h1>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","h"=>"pink");
$a2=array("e"=>"red","f"=>"green","g"=>"blue","h"=>"grey","i"=>"pink");

$result=array_diff($a1,$a2);
print_r($result);
echo '<br/>';
//$result=array_diff($a2,$a1);
//print_r($result);
//echo '<br/>';
//print_r($a1);
?>


<h1>$result=array_diff_assoc($a1,$a2);</h1>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"pink","c"=>"orange");
$a3=array("a"=>"red","b"=>"pink","c"=>"blue");
//$result=array_diff_assoc($a1,$a2);
//print_r($result);
echo '<br/>';
$result2=array_diff_assoc($a1,$a2,$a3);
print_r($result2);
?>
</body>
</html>