<?
session_start();
include ('utils/functions.php');

$host = "localhost";
$user = "root";
$pass = "";
$database = "taxi2023";


$base = new mysqli($host, $user, $pass, $database);
$base->set_charset('utf8mb4');

$adminRoute = "http://taxi2023/admin.taxi24h.ru";

$MYSQL_CONSTANTS = [
    'COMMA' => ", ",
    'SEMICOLON' => ";",
    'NULL' => "NULL"
];



