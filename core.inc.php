<?php
require 'connect.inc.php';
//include 'nlogin.html';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$ref=$_SERVER['HTTP_REFERER'];
/*$ip_addr=$_SERVER['REMOTE_ADDR'];
$q="INSERT INTO visitors VALUES('$ip_addr')";

mysql_query($q);
*/

function loggedin()
{ //echo "to check";
  if(isset($_SESSION['user_id']))
          return true;
  else return false;

 }
 function getuser($field)
 { //echo $field;
   //echo "to get username";
   $id=$_SESSION['user_id'];
   //echo $id;
    $query = "SELECT $field FROM `users` WHERE id='$id'";
 $result = mysql_query($query) or die(mysql_error());
 $rows = mysql_num_rows($result);
 if($rows==1){
 return mysql_result($result,0,$field);

 }
 }



  ?>