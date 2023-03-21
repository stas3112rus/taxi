<?
function getAllTariffsByCityFrom($city_from_id)
{
    $sql = "SELECT
    city_to_ref, 
    economy, 
    comfort,
    business,
    minivan,
    im as city_to_im
    FROM `tariffs`
    INNER JOIN cities ON city_to_ref = id_city
    WHERE `city_from_ref` = '$city_from_id'
    ORDER BY city_to_im 
    ";

    return getAllRowsFromDataBase($sql);
}

function getAllTariffForCity($city_id)
{
    $sql = "SELECT
    *
    FROM `tariffs`
    WHERE 
        `city_from_ref` = '$city_id' OR
        `city_to_ref` = '$city_id'
    ";

    return getAllRowsFromDataBase($sql);
}

function updateTariffOneWay($tariff, $city_from_id, $city_to_id)
{
    $tariff = emptyStringToNull($tariff);
    $sql = "UPDATE `tariffs` SET 
        `economy`= $tariff[economy],
        `comfort`= $tariff[comfort],
        `business`= $tariff[business],
        `minivan`= $tariff[minivan]
    WHERE `city_from_ref` = '$city_from_id' AND `city_to_ref` = '$city_to_id' ";

    return changeDataBaseRequest($sql, "Ошибка при обновлении тарифа");
}

function updateTariffTwoWays($tariff, $city_from_id, $city_to_id)
{
    $tariff = emptyStringToNull($tariff);
    $sql = "UPDATE `tariffs` SET 
        `economy`= $tariff[economy],
        `comfort`= $tariff[comfort],
        `business`= $tariff[business],
        `minivan`= $tariff[minivan]
    WHERE 
        (`city_from_ref` = '$city_from_id' AND `city_to_ref` = '$city_to_id') 
        OR
        (`city_from_ref` = '$city_to_id' AND `city_to_ref` = '$city_from_id') ";

    return changeDataBaseRequest($sql, "Ошибка при обновлении тарифа");
}

function createTariffsWithNullValue($citiesCouples)
{
    global $MYSQL_CONSTANTS;

    $insert = "INSERT INTO `tariffs` (`city_from_ref`, `city_to_ref`) VALUES ";
    $values = "";

    for ($i = 0; $i < count($citiesCouples); $i++) {
        $values .=
            "(" .
            $citiesCouples[$i][0] . $MYSQL_CONSTANTS['COMMA'] .
            $citiesCouples[$i][1] .
            ")";
        $values .= $i == count($citiesCouples) - 1 ?
            $MYSQL_CONSTANTS['SEMICOLON'] :
            $MYSQL_CONSTANTS['COMMA'];
    }

    $sql = $insert . $values;
    return changeDataBaseRequest($sql, "Ошибка при создании тарифов");
}

function createTariffsWithValue($tariffs)
{
    global $MYSQL_CONSTANTS;

    $insert = "INSERT INTO `tariffs` (
        `city_from_ref`, 
        `city_to_ref`, 
        `economy`, 
        `comfort`, 
        `business`, 
        `minivan`) VALUES ";
    $values = "";

    for ($i = 0; $i < count($tariffs); $i++) {

        $tariff = emptyStringToNull($tariffs[$i]);
        $values .=
            "(" .
            $tariff['city_from_ref'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['city_to_ref'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['economy'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['comfort'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['business'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['minivan'] .
            ")";

        $values .= $i == count($tariffs) - 1 ?
            $MYSQL_CONSTANTS['SEMICOLON'] :
            $MYSQL_CONSTANTS['COMMA'];
    }

    $sql = $insert . $values;

    return changeDataBaseRequest($sql, "Ошибка при создании тарифов");
}

function deleteTariffsById($id)
{
    $sql = "DELETE 
        FROM `tariffs` WHERE 
        `city_from_ref` = '$id' OR `city_to_ref` = '$id'
        ";

    changeDataBaseRequest($sql, "Ошибка при удалении тарифов");
}
