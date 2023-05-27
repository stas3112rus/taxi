<?
include('../../../../src/data/mysql.php');
include('../../../../src/data/tariffs/functions.php');

include('../utils/functions.php');

header("Content-Type: application/json; charset=UTF-8");

printJsonFromArray(getAllTariffsForApi());
