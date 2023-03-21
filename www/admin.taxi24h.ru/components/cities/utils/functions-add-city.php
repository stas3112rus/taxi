<?

function createCity($city)
{

    $entriesToDataBase =  makeEntriesToDataBase($city);
    if ($entriesToDataBase['status'] != 'Ok')
        return cancelDataBaseAddCity($entriesToDataBase['status'], $city);

    $city['id_city'] = $entriesToDataBase['city']['id_city'];

    $deployNewDomain = deployNewDomain($city);

    if ($deployNewDomain != 'Ok') {
        return cancelFilesAddCity($deployNewDomain, $city);
    }

    return drawAlert("Город добавлен", "alert-success");
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

function deployNewDomain($city)
{
    $domainFolder = copy_folder(
        getFullPathToStaticFiles(),
        getFullPathToDomain($city)
    );

    if ($domainFolder != 'Ok') {
        return $domainFolder;
    }

    $infoFile = deployInfoFile($city);
    if ($infoFile != 'Ok') {
        return $infoFile;
    }

    $indexFile = deployIndexFile($city);
    if ($indexFile != 'Ok') {
        return $indexFile;
    }

    $deployDirectionAndTransfers = deployDirectionAndTransfers($city);
    if ($deployDirectionAndTransfers != 'Ok') {
        return $deployDirectionAndTransfers;
    }

    $robotDeploy = deployRobot($city);
    if ($robotDeploy != "Ok")
        return $robotDeploy;

    $sitemapDeploy = deploySitemaps();
    if ($sitemapDeploy != "Ok")
        return $sitemapDeploy;

    $htacces =  deployHtacces($city);
    if ($htacces != "Ok")
        return $htacces;

    return 'Ok';
}

function deployDirectionAndTransfers($city)
{
    $directionsInsideCity = deployDirectionsAndTransfer($city);
    if ($directionsInsideCity != "Ok")
        return $directionsInsideCity;

    $directionsOutsideCity = deployDirectionsAndTransfer($city, true);
    if ($directionsOutsideCity != "Ok")
        return $directionsOutsideCity;

    $transferInsideCity = deployDirectionsAndTransfer($city, false, true);
    if ($transferInsideCity != "Ok")
        return $transferInsideCity;

    $transferOutsideCity = deployDirectionsAndTransfer($city, true, true);
    if ($transferOutsideCity != "Ok")
        return $transferOutsideCity;

    return 'Ok';
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
