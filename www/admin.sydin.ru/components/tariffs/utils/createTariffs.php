<?

function createTariffs($city_id, $basic_city_id = false)
{
    if ($basic_city_id) {
        $result = addTariffsWithBasicCity($city_id, $basic_city_id);
    } else {
        $result = addTariffsWithoutBasicCity($city_id);
    }

    return $result;
}

function addTariffsWithoutBasicCity($id)
{
    $citiesCouples = getCitiesCouplesForTariffs($id);

    return createTariffsWithNullValue($citiesCouples);
}

function getCitiesCouplesForTariffs($id)
{
    $result = [];

    foreach (getAllWithoutOneCities($id) as $city) {
        array_push($result, [$id, $city['id_city']]);
        array_push($result, [$city['id_city'], $id]);
    }

    return $result;
}

function addTariffsWithBasicCity($new_id, $basic_id)
{
    $tariffs = getTariffsForNewCity($new_id, $basic_id);

    return (createTariffsWithValue($tariffs));
}

function getTariffsForNewCity($new_id, $basic_id)
{
    $tariffs = getAllTariffForCity($basic_id);
    $tariffs =  changeBasicIdToNewId($tariffs, $basic_id, $new_id);

    array_push($tariffs, getTariffWithEmptyValue($new_id, $basic_id));
    array_push($tariffs, getTariffWithEmptyValue($basic_id, $new_id));

    return $tariffs;
}

function changeBasicIdToNewId($tariffs, $oldCityId, $newCityId)
{
    $result = $tariffs;

    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i]['city_from_ref'] == $oldCityId)
            $result[$i]['city_from_ref'] = $newCityId;

        if ($result[$i]['city_to_ref'] == $oldCityId)
            $result[$i]['city_to_ref'] = $newCityId;
    }

    return $result;
}

function getTariffWithEmptyValue($from, $to)
{
    return [
        'city_from_ref' => $from,
        'city_to_ref' => $to,
        'economy' => NULL,
        'comfort' => NULL,
        'business' => NULL,
        'minivan' => NULL
    ];
}
