<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP $_server</h1>
<?php 
$testing =array('PHP_SELF','GATEWAY_INTERFACE','SERVER_ADDR','SERVER_NAME','SERVER_SOFTWARE','SERVER_PROTOCOL','REQUEST_METHOD','REQUEST_TIME','QUERY_STRING',
				'HTTP_ACCEPT','HTTP_ACCEPT_CHARSET','HTTP_HOST','HTTP_REFERER','HTTPS','REMOTE_ADDR','REMOTE_HOST','REMOTE_PORT','SCRIPT_FILENAME','SERVER_ADMIN','SERVER_PORT',
				'SERVER_SIGNATURE','PATH_TRANSLATED','SCRIPT_NAME','SCRIPT_URI',);




$testlength = count($testing);
$x=0;
while ($x <= $testlength) {
	echo "<h2>".$testing[$x]."=".$_SERVER[$testing[$x]]."<h2><br/>";
	$x++;	
}


/*$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
	echo $cars[$x];
	echo "<br>";
*/?>
</body>
</html>