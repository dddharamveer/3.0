<?php
$server="127.0.0.1";
$user="root";
$pass="";
$dbbase="form";
$conn=mysqli_connect($server,$user,$pass,$dbbase);
if(!$conn){
	die("connection failed!.". mysqli_connect_error());
}
  
?>