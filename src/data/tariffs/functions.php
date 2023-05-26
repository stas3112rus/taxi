<?
function getAllTariffsByCityFrom($city_from_id)
{
    $sql = "SELECT
    city_to_ref, 
    economy, 
    comfort,
    business,
    minivan,
    vip,
    im as city_to_im
    FROM `tariffs`
    INNER JOIN cities ON city_to_ref = id_city
    WHERE `city_from_ref` = '$city_from_id'
    ORDER BY city_to_im 
    ";

    return getAllRowsFromDataBase($sql);
}

function getAllTariffsForApi()
{
    $sql = "SELECT
    id_tariff,
    city_from_ref,
    city_to_ref,
    cityFrom.im as cityFrom,
    cityTo.im as cityTo,    

    economy, 
    comfort,
    business,
    minivan,
    vip
    FROM `tariffs`
    JOIN cities cityFrom ON cityFrom.id_city = tariffs.city_from_ref
	JOIN cities cityTo ON cityTo.id_city = tariffs.city_to_ref
    ORDER BY cityFrom 
    ";

    return getAllRowsFromDataBase($sql);
}

function getAllTariffsForDownload()
{
    $sql = "SELECT
    id_tariff,
    cityFrom.im as cityFrom,
    cityTo.im as cityTo,    

    economy, 
    comfort,
    business,
    minivan,
    vip
    FROM `tariffs`
    JOIN cities cityFrom ON cityFrom.id_city = tariffs.city_from_ref
	JOIN cities cityTo ON cityTo.id_city = tariffs.city_to_ref
    ORDER BY cityFrom 
    ";

    return getAllRowsFromDataBase($sql);
}

function getEmptyTariffs()
{
    $sql = "SELECT
    id_tariff, 
	cityFrom.im as cityFrom,
    cityTo.im as cityTo,    
    tariffs.economy as economy, 
    tariffs.comfort as comfort, 
    tariffs.business as business, 
    tariffs.minivan as minivan,
    tariffs.vip as vip
    FROM `tariffs`
    JOIN cities cityFrom ON cityFrom.id_city = tariffs.city_from_ref
	JOIN cities cityTo ON cityTo.id_city = tariffs.city_to_ref
    WHERE
    tariffs.economy IS NULL OR tariffs.economy = 0 OR
    tariffs.comfort IS NULL OR tariffs.comfort = 0 OR
    tariffs.business IS NULL OR tariffs.business = 0 OR
    tariffs.minivan IS NULL OR tariffs.minivan = 0";

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
        `minivan`= $tariff[minivan],
        `vip`= $tariff[vip]
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
        `minivan`= $tariff[minivan],
        `vip`= $tariff[vip]
    WHERE 
        (`city_from_ref` = '$city_from_id' AND `city_to_ref` = '$city_to_id') 
        OR
        (`city_from_ref` = '$city_to_id' AND `city_to_ref` = '$city_from_id') ";

    return changeDataBaseRequest($sql, "Ошибка при обновлении тарифа");
}

function updateTariffById($tariff)
{
    $tariff = emptyStringToNull($tariff);
    $sql = "UPDATE `tariffs` SET 
        `economy`= $tariff[economy],
        `comfort`= $tariff[comfort],
        `business`= $tariff[business],
        `minivan`= $tariff[minivan],
        `vip`= $tariff[vip]
    WHERE id_tariff =  $tariff[id_tariff]";

    return changeDataBaseRequest($sql, "Ошибка при обновлении тарифа");
}

function updateTariffByArray($tariffs)
{
    global $MYSQL_CONSTANTS;

    if (count($tariffs) == 0)
        return "Ok";

    $insert = "INSERT INTO `tariffs` (
            `id_tariff`,
            `city_from_ref`,
            `city_to_ref`,
            `economy`, 
            `comfort`, 
            `business`, 
            `minivan`,
            `vip`
            ) VALUES ";
    $values = "";

    for ($i = 0; $i < count($tariffs); $i++) {

        $tariff = emptyStringToNull($tariffs[$i]);
        $values .=
            "(" .
            $tariff['id_tariff'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['city_from_ref'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['city_to_ref'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['economy'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['comfort'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['business'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['minivan'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['vip'] .
            ")";

        $values .= $i == count($tariffs) - 1 ?
            "" :
            $MYSQL_CONSTANTS['COMMA'];
    }

    $sql = $insert . $values;

    $sql .= " ON DUPLICATE KEY UPDATE
        economy=VALUES(economy), 
        comfort=VALUES(comfort),
        business=VALUES(business), 
        minivan=VALUES(minivan),
        vip=VALUES(vip)
    ";


    return changeDataBaseRequest($sql, "Ошибка при создании тарифов со значением");
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
    return changeDataBaseRequest($sql, "Ошибка при создании тарифов пустых");
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
        `minivan`,
        `vip`
        ) VALUES ";
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
            $tariff['minivan'] . $MYSQL_CONSTANTS['COMMA'] .
            $tariff['vip'] .
            ")";

        $values .= $i == count($tariffs) - 1 ?
            $MYSQL_CONSTANTS['SEMICOLON'] :
            $MYSQL_CONSTANTS['COMMA'];
    }

    $sql = $insert . $values;

    return changeDataBaseRequest($sql, "Ошибка при создании тарифов со значением");
}

function deleteTariffsById($id)
{
    $sql = "DELETE 
        FROM `tariffs` WHERE 
        `city_from_ref` = '$id' OR `city_to_ref` = '$id'
        ";

    changeDataBaseRequest($sql, "Ошибка при удалении тарифов");
}
