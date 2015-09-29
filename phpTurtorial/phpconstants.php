<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP Constants</h1>
<h2>case-sensitive constant name</h2>
<?php
// case-sensitive constant name
define("GREET", "Welcome to W3Schools.com!");
echo GREET;
?>

<h2>case-insensitive constant name</h2>
<?php
// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?> 

</body>
</html>