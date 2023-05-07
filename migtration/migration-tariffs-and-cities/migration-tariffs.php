<?
include('../../../src-aeroport-simferopol/data/mysql.php');

$tariffs_old = upgradeTariffs(getALLTariffs('tariffs', 'cities'));
$tariffs_new = upgradeTariffs(getALLTariffs('tariffs_migration', 'cities_migration'));
$CITIES = upgradeCites(getAllCities('cities'));
$tariffs_for_insert = [];
$tariffs_for_update = [];


foreach ($tariffs_new as $key => $tariff) {
    if (!$tariffs_old[$key]) {
        array_push($tariffs_for_insert, $tariff);
    } else {
        array_push($tariffs_for_update, $tariff);
    }
}

if ($tariffs_for_insert) {
    echo changeDataBaseRequest(getSQLInsert($tariffs_for_insert), "Не добавили");
}

getSQLUpdate($tariffs_for_update);

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

function getSQLInsert($tariffs)
{
    if (count($tariffs) == 0) return;

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
        $sql .= tariffsSqlInsertItem($tariffs[$i], $i == count($tariffs) - 1);
    }

    return $sql;
}

function getSQLUpdate($tariffs)
{
    $sql = "";

    for ($i = 0; $i < count($tariffs); $i++) {
        $sql .= tariffsSqlUpdateItem($tariffs[$i]);
    }

    return $sql;
}

function tariffsSqlUpdateItem($tariff)
{
    global $CITIES;
    $str = "UPDATE `tariffs` SET ";


    $city_from_id = $CITIES[$tariff['cityFrom']]['id_city'];
    $city_to_id = $CITIES[$tariff['cityTo']]['id_city'];

    $str .= "
        `economy`=" . updateValueIfNull($tariff['economy']) . ",
        `comfort`=" . updateValueIfNull($tariff['comfort']) . ",
        `business`=" . updateValueIfNull($tariff['business']) . ",
        `minivan`=" . updateValueIfNull($tariff['minivan']) . ",
        `vip`=" . updateValueIfNull($tariff['vip']) . "
        WHERE
        `city_from_ref`= $city_from_id AND
        `city_to_ref`= $city_to_id;
    ";

    $update = changeDataBaseRequest($str, "Не обновили");

    if ($update != "Ok") echo $str . "<br>";
}

function  tariffsSqlInsertItem($tariff, $isEnd)
{
    global $CITIES;

    $city_from_id = $CITIES[$tariff['cityFrom']]['id_city'];
    $city_to_id = $CITIES[$tariff['cityTo']]['id_city'];

    $str = "(" .
        $city_from_id .
        ", " .
        $city_to_id .
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
