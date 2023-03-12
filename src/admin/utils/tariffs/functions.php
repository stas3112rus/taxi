<?
function getAllTariffsWithNameCitiesFrom($city_from_id, $base){
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
    $res = $base->query($sql);

    return ($res->fetch_all(MYSQLI_ASSOC));
}

function updateTariff($tariff, $city_from_id, $city_to_id, $base)
{
    $sql = "UPDATE `tariffs` SET 
        `economy`= '$tariff[economy]',
        `comfort`= '$tariff[comfort]',
        `business`= '$tariff[business]',
        `minivan`= '$tariff[minivan]'
    WHERE `city_from_ref` = '$city_from_id' AND `city_to_ref` = '$city_to_id' ";
    if ($base->query($sql)) {
        return "Ok";
    } else {
        return "Ошибка при обновлении тарифа: " . "<br>" . $base->error;
    }
}