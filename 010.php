<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP array_diff_key() Function</h1>

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("b"=>"red","c"=>"blue","a"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
?>

<h1>Compare the keys of three arrays, and return the differences:</h1>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("c"=>"yellow","d"=>"black","e"=>"brown");
$a3=array("a"=>"green","c"=>"purple","g"=>"red");

$result2=array_diff_key($a1,$a2,$a3);
print_r($result2);
?>
</body>
</html>