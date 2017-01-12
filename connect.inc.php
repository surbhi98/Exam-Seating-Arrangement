<?php
$conn_error='could not connect';
$host='localhost';
$user='root';
$pass='';
$db='IPP';
$conn=mysqli_connect($host,$user,$pass);
if(!@mysql_connect($host,$user,$pass)||!@mysql_select_db($db))
die($conn_error);



?>