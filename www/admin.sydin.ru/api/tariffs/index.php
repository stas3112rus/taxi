<?
include('../../../../src-taxi-krim/data/mysql.php');
include('../../../../src-taxi-krim/data/tariffs/functions.php');

include('../utils/functions.php');

header("Content-Type: application/json; charset=UTF-8");

printJsonFromArray(getAllTariffsForApi());
