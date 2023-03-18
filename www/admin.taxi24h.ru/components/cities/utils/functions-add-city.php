<?
function createCity($city)
{
    $createCityInDataBase = addCity($city);
    if ($createCityInDataBase != "Ok")
        return drawAlert($createCityInDataBase, "alert-danger");

    $newCity = getCityByEng($city['eng']);

    $addTariffs = createTariffs($newCity['id_city'], $city['basic-city-id']);
    if ($addTariffs != "Ok")
        return drawAlert($addTariffs, "alert-danger");

    return drawAlert("Город добавлен", "alert-success");
}

