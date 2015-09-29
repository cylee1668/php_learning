<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>PHP String Functions</h1>
<h1>Get The Length of a String</h1>
<?php
echo strlen("Hello world!");
echo "<br/>";

$chinese ="新增或刪除圖案填滿或圖案效果
 

您可以變更圖案的填滿設定或新增效果 (例如陰影、光暈、反射、柔邊、浮凸及立體旋轉)，來變更圖案的外觀。您也可以變更或移除文字方塊或圖案框線
 
若要變更文字方塊的外觀，請參閱新增或移除文字或文字藝術師的填滿、外框或效果。若要變更圖片的外觀，請參閱加入或變更圖片的效果。

何謂填滿、漸層或圖案效果？ 果
 
填滿是指圖案的內部。在變更圖案的填滿色彩時，可以新增材質、圖片或漸層。漸層是指漸進式的色彩和陰影變化，通常是從一個顏色漸進到另一個顏色，或是相同顏色的陰影變化。
";

echo strlen($chinese);



?>  
<h1>Count The Number of Words in a String</h1>
<?php
echo str_word_count("Hello world!"); // outputs 2
$testing ="MyLanViewer Network/IP Scanner is a powerful Netbios and LAN/Network IP address scanner for Windows, whois and traceroute tool, remote shutdown and Wake On LAN (WOL) manager, wireless network scanner and monitor. This application will help you find all IP addresses, MAC addresses and shared folders of computers on your wired or wireless (Wi-Fi) network. The program scans network and displays your network computers in an easy to read, buddy-list style window that provides the computer name, IP address, MAC address, NIC vendor, OS version, logged users, shared folders and other technical details for each computer. MyLanViewer Network/IP Scanner supports remote shutdown, wake-on-lan, lock workstation, log off, sleep, hibernate, reboot and power off. It is able to monitor IP address and show notifications when the states of some computers change. MyLanViewer Network/IP Scanner can also view and access shared folders, terminate user sessions, disable shared folders, show netstat information and detect rogue DHCP servers. The software can monitor all devices (even hidden) on your subnet, and show notifications when the new devices will be found (for example, to know who is connected to your WiFi router or wireless network). The program easy to install and use, and has a user-friendly and beautiful interface.";

echo"<br/>";
echo str_word_count($testing);
?>


<h1>Reverse a String</h1>
<?php
echo strrev("Hello world!");
?> 

 
<h1>Search For a Specific Text Within a String</h1>
<?php
echo strpos("Hello world!", "world");
?>  

<h1>Replace Text Within a String</h1>
<?php
echo str_replace("world", "Dolly", "Hello world!");
?> 
<h1></h1>
<h1></h1>
</body>
</html>