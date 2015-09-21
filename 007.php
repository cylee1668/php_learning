<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Chun"=>"test");
print_r(array_change_key_case($age,CASE_UPPER));
?>

<?php
echo "<h2>If two or more keys will be equal after running array_change_key_case() (e.g. \"b\" and \"B\"), the latest array will override the other: </h2>";
echo 'orginal<br/>$pets=array("a"=>"car", "B"=>"Dog","c"=>"Horse","b"=>"Bird");<br/>output:<br/>';
$pets=array("a"=>"car", "B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));

?>

</body>
</html>