<?
function makeSynchronizationCities()
{

    global $SITES_API_ROUTES;

    $citiesFromApi = getJsonArray($SITES_API_ROUTES[$_POST['site']]['cities']);

    if ($citiesFromApi['error']) {
        return drawAlert($citiesFromApi['error'], "alert-danger");
    }

    $citiesFromApi = getArrayByKey($citiesFromApi, 'im');

    $citiesCurrent = getArrayByKey(getAllCities(), 'im');

    $absentCities = getArrayWithAbsentValues($citiesCurrent, $citiesFromApi);
    $absentCities = prepareArrayCitiesForInsert($absentCities);

    $createNewCities = createNewCities($absentCities);

    if ($createNewCities != "Ok") {
        return drawAlert($createNewCities, "alert-danger");
    }

    return drawAlert("Города успешно синхронизированы", "alert-success");
}

function prepareArrayCitiesForInsert($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $array[$i]['main_city']  = null;
        $array[$i]['street']  = null;
    }

    return $array;
}

function createNewCities($cities)
{
    foreach ($cities as $city) {
        $createCityInDataBase = addCity($city);
        if ($createCityInDataBase != "Ok")
            return $createCityInDataBase;

        $id = getCityByEng($city['eng'])['id_city'];
        $addTariffs = createTariffs($id);
        if ($addTariffs != "Ok")
            return $addTariffs;
    }

    return "Ok";
}
