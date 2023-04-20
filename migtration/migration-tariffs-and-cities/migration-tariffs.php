<?
include('../../../src-aeroport-simferopol/data/mysql.php');

$tariffs_old = upgradeTariffs(getALLTariffs('tariffs', 'cities'));
$tariffs_new = upgradeTariffs(getALLTariffs('tariffs_migration', 'cities_migration'));
$CITIES = upgradeCites(getAllCities('cities'));
$tariffs_for_insert = [];

foreach ($tariffs_new as $key => $tariff) {
    if (!$tariffs_old[$key]) {
        array_push($tariffs_for_insert, $tariff);
    }
}

echo changeDataBaseRequest(getSQL($tariffs_for_insert), "Не обновили");

function getALLTariffs($tariffs_table, $city_table)
{
    $sql = "SELECT
        cityFrom.im as cityFrom,
        cityTo.im as cityTo,
        $tariffs_table.economy as economy, 
        $tariffs_table.comfort as comfort, 
        $tariffs_table.business as business, 
        $tariffs_table.minivan as minivan,
        $tariffs_table.vip as vip
        FROM `$tariffs_table`
        JOIN $city_table cityFrom ON cityFrom.id_city = $tariffs_table.city_from_ref
        JOIN $city_table cityTo ON cityTo.id_city = $tariffs_table.city_to_ref
        ";

    return getAllRowsFromDataBase($sql);
}

function getAllCities($table)
{
    $sql = "SELECT 
    *
    FROM `$table`
    ORDER BY main_city  DESC, im
    ";

    return getAllRowsFromDataBase($sql);
}

function upgradeTariffs($tariffs)
{
    $result = [];

    foreach ($tariffs as $tariff) {
        $key = $tariff['cityFrom'] . " - " . $tariff['cityTo'];

        $result[$key] = $tariff;
    }

    return $result;
}

function upgradeCites($cities)
{
    $result = [];

    foreach ($cities as $city) {
        $result[$city['im']] = $city;
    }

    return $result;
}

function getSQL($tariffs)
{
    $sql = "INSERT INTO `tariffs` (
        `city_from_ref`, 
        `city_to_ref`, 
        `economy`, 
        `comfort`, 
        `business`, 
        `minivan`,
        `vip`
        ) VALUES ";;

    for ($i = 0; $i < count($tariffs); $i++) {
        $sql .= tariffsSqlItem($tariffs[$i], $i == count($tariffs) - 1);
    }

    return $sql;
}

function  tariffsSqlItem($tariff, $isEnd)
{
    global $CITIES;

    $city_from_id = $CITIES[$tariff['cityFrom']]['id_city'];
    $city_to_id = $CITIES[$tariff['cityTo']]['id_city'];

    $str = "(" .
        updateValueIfNull($city_from_id) .
        ", " .
        updateValueIfNull($city_to_id) .
        ", " .
        updateValueIfNull($tariff['economy']) .
        ", " .
        updateValueIfNull($tariff['comfort']) .
        ", " .
        updateValueIfNull($tariff['business']) .
        ", " .
        updateValueIfNull($tariff['minivan']) .
        ", " .
        updateValueIfNull($tariff['vip']) .
        ")";

    $str .= $isEnd ? ';' : ',';

    return $str;
}

function updateValueIfNull($value)
{
    return $value ? $value : "NULL";
}
