<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_intersect_assoc() Function</h1>

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_intersect_assoc($a1,$a2);
print_r($result);
?>

<h2>example</h2>

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","g"=>"blue");
$a3=array("a"=>"red","b"=>"green","g"=>"blue");

$result=array_intersect_assoc($a1,$a2,$a3);
print_r($result);
echo "<br/>";
$result2=array_flip($result);
print_r(array_flip($result));
?>

</body>
</html>