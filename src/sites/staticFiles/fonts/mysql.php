<?php 

$date=date('Y-m-d');
$host="localhost";
$user="root";
$pass="";
$datebase="taxi";

$dp=mysql_connect($host, $user, $pass);


mysql_select_db($datebase, $dp);


mysql_query("SET NAMES utf8");



?>