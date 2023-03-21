<?
function createCity($city)
{
    // Создали запись в БД
    $city['eng'] = mb_strtolower($city['eng']);

    $createCityInDataBase = addCity($city);
    if ($createCityInDataBase != "Ok")
        return drawAlert($createCityInDataBase, "alert-danger");

    $city['id_city'] = getCityByEng($city['eng'])['id_city'];


    $addTariffs = createTariffs($city['id_city'], $city['basic-city-id']);
    if ($addTariffs != "Ok") {
        deleteCityById($city['id_city']);
        return drawAlert($addTariffs, "alert-danger");
    }

    $deployNewDomain = deployNewDomain($city);

    if ($deployNewDomain != 'Ok') {
        return $deployNewDomain;
    }

    return drawAlert("Город добавлен", "alert-success");
}

function deployNewDomain($city)
{
    //Копируем статические файлы 
    $newDomainPath = getFullPathToDomain($city);

    $domainFolder = copy_folder(
        getFullPathToStaticFiles(),
        $newDomainPath
    );

    if ($domainFolder != 'Ok') {
        deleteFolder($newDomainPath);
        deleteTariffsById($city['id_city']);
        deleteCityById($city['id_city']);

        return drawAlert($domainFolder, "alert-danger");
    }

    $infoFile = deployInfoFile($city);
    if ($infoFile != 'Ok') {
        return drawAlert($infoFile, "alert-danger");
    }

    $indexFile = deployIndexFile($city);
    if ($indexFile != 'Ok') {
        return drawAlert($indexFile, "alert-danger");
    }

    $directionsInsideCity = deployDirectionsAndTransfer($city);
    if ($directionsInsideCity != "Ok")
        return drawAlert($directionsInsideCity, "alert-danger");

    $directionsOutsideCity = deployDirectionsAndTransfer($city, true);
    if ($directionsOutsideCity != "Ok")
        return drawAlert($directionsOutsideCity, "alert-danger");

    $transferInsideCity = deployDirectionsAndTransfer($city, false, true);
    if ($transferInsideCity != "Ok")
        return drawAlert($transferInsideCity, "alert-danger");

    $transferOutsideCity = deployDirectionsAndTransfer($city, true, true);
    if ($transferOutsideCity != "Ok")
        return drawAlert($transferOutsideCity, "alert-danger");

    $robotDeploy = deployRobot($city);
    if ($robotDeploy != "Ok")
        return drawAlert($robotDeploy, "alert-danger");

    $sitemapDeploy = deploySitemaps();
    if ($sitemapDeploy != "Ok")
        return drawAlert($sitemapDeploy, "alert-danger");

    return 'Ok';
}

function cancelDataBaseAddCity()
{
}

function cancelFilesAddCity()
{
}
