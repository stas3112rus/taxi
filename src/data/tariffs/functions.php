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

function updateTariffOneWay($tariff, $city_from_id, $city_to_id)
{
    $sql = "UPDATE `tariffs` SET 
        `economy`= '$tariff[economy]',
        `comfort`= '$tariff[comfort]',
        `business`= '$tariff[business]',
        `minivan`= '$tariff[minivan]'
    WHERE `city_from_ref` = '$city_from_id' AND `city_to_ref` = '$city_to_id' ";


    return changeDataBaseRequest($sql, "Ошибка при обновлении тарифа");
}

function updateTariffTwoWays($tariff, $city_from_id, $city_to_id)
{
    $sql = "UPDATE `tariffs` SET 
        `economy`= '$tariff[economy]',
        `comfort`= '$tariff[comfort]',
        `business`= '$tariff[business]',
        `minivan`= '$tariff[minivan]'
    WHERE 
        (`city_from_ref` = '$city_from_id' AND `city_to_ref` = '$city_to_id') 
        OR
        (`city_from_ref` = '$city_to_id' AND `city_to_ref` = '$city_from_id') ";

    return changeDataBaseRequest($sql, "Ошибка при обновлении тарифа");
}
