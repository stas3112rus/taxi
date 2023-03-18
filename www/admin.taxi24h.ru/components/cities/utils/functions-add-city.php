<?
function createCity($city)
{
    $domain = getDefaultValueByName('domain');
    if (!$domain)
        return drawAlert("В константах не задан domain", "alert-danger");

    $createCityInDataBase = addCity($city);
    if ($createCityInDataBase != "Ok")
        return drawAlert($createCityInDataBase, "alert-danger");

    $newCity = getCityByEng($city['eng']);

    $addTariffs = createTariffs($newCity['id_city'], $city['basic-city-id']);
    if ($addTariffs != "Ok") {
        deleteCityById($newCity['id_city']);
        return drawAlert($addTariffs, "alert-danger");
    }

    $domainFolder = createFolderDomain($city['eng'], $domain);

    if ($domainFolder != 'Ok'){        
        deleteTariffsById($newCity['id_city']);
        deleteCityById($newCity['id_city']);
        
        return drawAlert($domainFolder, "alert-danger");
    }

    return drawAlert("Город добавлен", "alert-success");
}
