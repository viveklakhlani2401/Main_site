<?php
$server_name="localhost";
$user_name="root";
$user_password="";
$db_name="multi_vendor_seller";

if(! $db_enter=mysqli_connect($server_name,$user_name,$user_password))
    die("Connection failed".mysqli_error());

if(! mysqli_select_db($db_enter,$db_name))
    die("database do not exits".mysqli_error());
?>