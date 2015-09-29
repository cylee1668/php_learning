<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP $_server</h1>
<?php 
$testKey =array('PHP_SELF','GATEWAY_INTERFACE','SERVER_ADDR','SERVER_NAME','SERVER_SOFTWARE','SERVER_PROTOCOL','REQUEST_METHOD','REQUEST_TIME','QUERY_STRING',
				'HTTP_ACCEPT','HTTP_ACCEPT_CHARSET','HTTP_HOST','HTTP_REFERER','HTTPS','REMOTE_ADDR','REMOTE_HOST','REMOTE_PORT','SCRIPT_FILENAME','SERVER_ADMIN','SERVER_PORT',
				'SERVER_SIGNATURE','PATH_TRANSLATED','SCRIPT_NAME','SCRIPT_URI',);

$testValue = array('Returns the filename of the currently executing script','Returns the version of the Common Gateway Interface (CGI) the server is using','Returns the IP address of the host server',
				   'Returns the name of the host server (such as www.w3schools.com)','Returns the server identification string (such as Apache/2.2.24)',
				   'Returns the name and revision of the information protocol (such as HTTP/1.1)','Returns the request method used to access the page (such as POST)',
				   'Returns the timestamp of the start of the request (such as 1377687496)','Returns the query string if the page is accessed via a query string',
				   'Returns the Accept header from the current request','Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)','	Returns the Host header from the current request',
				   'Returns the complete URL of the current page (not reliable because not all user-agents support it)','Is the script queried through a secure HTTP protocol',
				   'Returns the IP address from where the user is viewing the current page','Returns the Host name from where the user is viewing the current page',
				   'Returns the port being used on the user\'s machine to communicate with the web server','Returns the absolute pathname of the currently executing script',
				   'Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)',
				   'Returns the port on the server machine being used by the web server for communication (such as 80)','Returns the server version and virtual host name which are added to server-generated pages',
				   'Returns the file system based path to the current script','Returns the path of the current script','Returns the URI of the current page',);

$testCombine = array_combine($testKey,$testValue);

$combineLength =count($testCombine);


for ($x=0; $x <= $combineLength; $x++) {
	echo"<h2>";
	print_r(array_keys($testCombine)[$x]);
	echo"=";
	echo $_SERVER[(array_keys($testCombine)[$x])];
	echo"</h2>";
	echo"<h3>";
	print_r(array_values($testCombine)[$x]);
	echo"</h3>";
	$x++;
}
//print_r(array_keys($testCombine)[0]);
//print_r($testCombine)

//print_r(array_keys($testCombine)[0]);

/*
foreach ($testCombine as $x) {
	echo "<h2>$x</h2>";
}



/**/

$testlength = count($testKey);
$x=0;
while ($x <= $testlength) {
	echo "<h2>".$testKey[$x]."=".$_SERVER[$testKey[$x]]."<h2><br/>";
	$x++;	
}


/*$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
	echo $cars[$x];
	echo "<br>";
*/?>
</body>
</html>