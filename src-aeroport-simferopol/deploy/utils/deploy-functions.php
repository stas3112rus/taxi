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

