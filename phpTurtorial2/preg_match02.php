<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>範例二、用 preg_match 找出完全符合的字母</h1>
<?php 
if (preg_match("/\bdef\b/i", "abcdefg")) {
	echo "條件符合";
} else {
	echo "條件不符合";
}
?>
</body>
</html>