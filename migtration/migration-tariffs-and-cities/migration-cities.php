<?
include('../../../src-aeroport-simferopol/data/mysql.php');

$old_cities = upgradeCites(getAllCities('cities'));
$new_cities = upgradeCites(getAllCities('cities_migration'));

$cities_for_insert = [];

foreach ($new_cities as $key => $city) {
    if (!$old_cities[$key]) {
        array_push($cities_for_insert, $city);
    }
}

$sql =  getSQL($cities_for_insert);


echo changeDataBaseRequest($sql, "Не обновили");

function getAllCities($table)
{
    $sql = "SELECT 
    *
    FROM `$table`
    ORDER BY main_city  DESC, im
    ";

    return getAllRowsFromDataBase($sql);
}

function upgradeCites($cities)
{
    $result = [];

    foreach ($cities as $city) {
        $result[$city['im']] = $city;
    }

    return $result;
}

function citySqlItem($city, $isEnd)
{
    $str = "('" .
        $city['eng'] .
        "', '" .
        $city['im'] .
        "', '" .
        $city['rod'] .
        "', '" .
        $city['dat'] .
        "', '" .
        $city['vin'] .
        "', '" .
        $city['tvor'] .
        "', '" .
        $city['pred'] .
        "'" .
        ")";
    $str .= $isEnd ? ';' : ',';


    return $str;
}


function getSQL($cities)
{
    $sql = "INSERT INTO `cities` (`eng`, `im`, `rod`, `dat`, `vin`, `tvor`, `pred`) VALUES";

    for ($i = 0; $i < count($cities); $i++) {
        $sql .= citySqlItem($cities[$i], $i == count($cities) - 1);
    }

    return $sql;
}

