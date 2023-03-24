<?

function createCity($city)
{

    $entriesToDataBase =  makeEntriesToDataBase($city);
    if ($entriesToDataBase['status'] != 'Ok')
        return cancelDataBaseAddCity($entriesToDataBase['status'], $city);

    $city['id_city'] = $entriesToDataBase['city']['id_city'];

    $copy = copyStaticFilesToDomain($city);
    if ($copy != 'Ok') {
        return cancelFilesAddCity($copy, $city);
    }

    $deployNewDomain = deployNewDomain($city);
    if ($deployNewDomain != 'Ok') {
        return cancelFilesAddCity($deployNewDomain, $city);
    }

    $sitemapDeploy = deploySitemaps();
    if ($sitemapDeploy != "Ok")
        return cancelFilesAddCity($sitemapDeploy, $city);

    return drawAlert("Город добавлен", "alert-success");
}


function cancelDataBaseAddCity($message, $city)
{
    deleteTariffsById($city['id_city']);
    deleteCityById($city['id_city']);
    return drawAlert($message, "alert-danger");
}

function cancelFilesAddCity($message, $city)
{
    deleteTariffsById($city['id_city']);
    deleteCityById($city['id_city']);

    deleteFolder(getFullPathToDomain($city));
    deleteDirectionsAndTransfers($city);

    deploySitemaps();

    return drawAlert($message, "alert-danger");
}

function deleteDirectionsAndTransfers($city_to)
{
    $cities_from = getAllWithoutOneCities($city_to['id_city']);

    foreach ($cities_from as $city_from) {
        deleteFolder(getFullPathTransferFolder($city_from, $city_to));
        deleteFolder(getFullPathDirectionFolder($city_from, $city_to));
    }
}

function makeEntriesToDataBase($city)
{
    $createCityInDataBase = addCity($city);
    if ($createCityInDataBase != "Ok")
        return [
            'status' =>  $createCityInDataBase
        ];

    $city['id_city'] = getCityByEng($city['eng'])['id_city'];

    $addTariffs = createTariffs($city['id_city'], $city['basic-city-id']);
    if ($addTariffs != "Ok")
        return [
            'status' =>  $addTariffs
        ];

    return [
        'status' => 'Ok',
        'city' => $city
    ];
}
