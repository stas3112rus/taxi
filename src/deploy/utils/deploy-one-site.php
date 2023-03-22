<?
function deployNewDomain($city)
{
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
