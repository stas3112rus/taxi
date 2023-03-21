<?
function deployInfoFile($city)
{
    $txt =  getInfoTxt($city['id_city'], $city['main_city']);
    $dir = getFullPathToInfoFile($city);

    return createFile($dir, $txt);
}

function deployIndexFile($city)
{
    $txt = getIndexTxt($city['main_city']);
    $dir =  getFullPathToIndexFile($city);

    return createFile($dir, $txt);
}

function deployDirectionsAndTransfer($city_from, $reverse = false, $transfer = false)
{
    $cities_to = getAllWithoutOneCities('id_city');
    foreach ($cities_to as $city_to) {
        if ($city_to['id_city'] == $city_from['id_city']) {
            continue;
        }

        $data = $transfer ?
            getDataForTransfer($city_from, $city_to, $reverse) :
            getDataForDirection($city_from, $city_to, $reverse);

        $createFolder = createFolder($data['dir_folder']);
        if ($createFolder != "Ok")
            return  $createFolder;

        $crateIndexFile = createFile($data['dir_file'], $data['txt']);
        if ($crateIndexFile != "Ok")
            return $crateIndexFile;
    }

    return "Ok";
}

function getDataForDirection($city_from, $city_to, $reverse)
{
    return [
        'txt' => getDirectionTxt($reverse ? $city_from['id_city'] :  $city_to['id_city']),
        'dir_folder' => $reverse ?
            getFullPathDirectionFolder($city_to, $city_from) :
            getFullPathDirectionFolder($city_from, $city_to),
        'dir_file' =>  $reverse ?
            getFullPathDirectionFile($city_to, $city_from) :
            getFullPathDirectionFile($city_from, $city_to)
    ];
}

function getDataForTransfer($city_from, $city_to, $reverse)
{
    return [
        'txt' =>  getTransferTxt($reverse ? $city_from['id_city'] :  $city_to['id_city']),
        'dir_folder' => $reverse ?
            getFullPathTransferFolder($city_to, $city_from) :
            getFullPathTransferFolder($city_from, $city_to),
        'dir_file' =>  $reverse ?
            getFullPathTransferFile($city_to, $city_from) :
            getFullPathTransferFile($city_from, $city_to)
    ];
}



function deployRobot($city)
{
    $txt = getRobotTxt($city);
    $dir =  getFullPathToRobotFile($city);

    return createFile($dir, $txt);
}

function deployHtacces($city)
{
    $txt = getHtaccesTxt($city);
    $dir =  getFullPathToHtaccesFile($city);

    return createFile($dir, $txt);
}

function deploySitemaps()
{
    $deployMainSitemap = deployMainSitemapXML();
    if ($deployMainSitemap != "Ok")
        return $deployMainSitemap;

    $deployNotMainSiteMapsXML = deployNotMainSitemapsXML();
    if ($deployNotMainSiteMapsXML != "Ok")
        return $deployNotMainSiteMapsXML;

    return "Ok";
}

function deployMainSitemapXML()
{
    $txt = getMainSitemapTxt();
    $dir =  getFullPathToSitemapXMLFile(getMainCity());

    return createFile($dir, $txt);
}

function deployNotMainSitemapsXML()
{
    $mainCity = getMainCity();
    $cities = getAllWithoutOneCities($mainCity['id_city']);

    foreach ($cities as $city_from) {
        $txt = getNotMainSitemapsTXT($city_from);
        $dir =  getFullPathToSitemapXMLFile($city_from);

        $create = createFile($dir, $txt);
        if ($create != "Ok") {
            return $create;
        }
    }

    return "Ok";
}
