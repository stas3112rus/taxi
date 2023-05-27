<?
include('../../../../src-aeroport-simferopol/data/mysql.php');
include('../../../../src-aeroport-simferopol/data/cities/functions.php');
include('../utils/functions.php');

header("Content-Type: application/json; charset=UTF-8");

printJsonFromArray(getAllCities());
