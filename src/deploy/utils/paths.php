<?

function getFullPathToDomain($city)
{
    $domain = getDomain();

    return  getRootPath($domain) . "www/" . getSubDomainName($city['eng'],  $city['main_city']) . "/";
}

function getFullPathToStaticFiles()
{
    $domain = getDomain();

    return getRootPath($domain) . "src/sites/staticFiles";
}

function getFullPathToInfoFile($city)
{
    return  getFullPathToDomain($city) . "info.php";
}

function getFullPathToIndexFile($city)
{
    return  getFullPathToDomain($city) . "index.php";
}

function getFullPathDirectionFolder($city_from, $city_to)
{
    return  getFullPathToDomain($city_from) . "$city_to[eng]/";
}

function getFullPathTransferFolder($city_from, $city_to)
{
    return  getFullPathToDomain($city_from) . "transfer-$city_to[eng]/";
}

function getFullPathTransferFile($city_from, $city_to)
{
    return  getFullPathTransferFolder($city_from, $city_to) . "index.php";
}

function getFullPathDirectionFile($city_from, $city_to)
{
    return getFullPathDirectionFolder($city_from, $city_to) . "index.php";
}

function getFullPathToRobotFile($city)
{
    return getFullPathToDomain($city) . "robot.txt";
}

function getFullPathToHtaccesFile($city)
{
    return getFullPathToDomain($city) . ".htaccess";
}

function getFullPathToSitemapXMLFile($city)
{
    return getFullPathToDomain($city) . "sitemap.xml";
}


function getPathToMainFile($level = 0)
{
    return getLevel($level) . "../../src/sites/build/main.php";
};

function getPathToInfoFile($level = 0)
{
    return getLevel($level) . "info.php";
};

function getUrlToSitemap($city)
{
    return getMainUrl($city['eng'], $city['main_city']) . "sitemap.xml";
}

function getDirectionUrl($city_from, $city_to)
{
    return getMainUrl($city_from['eng'], $city_from['main_city'])
        . $city_to['eng']
        . '/';
}

function getTransferUrl($city_from, $city_to)
{
    return getMainUrl($city_from['eng'], $city_from['main_city'])
        . 'transfer-'
        . $city_to['eng']
        . '/';
}

function getLevel($level)
{
    $prev = "";

    for ($i = 0; $i < $level; $i++) {
        $prev .= "../";
    }

    return $prev;
}

function getListOfDomains()
{

    $domain = getDomain();
    $dir = getRootPath($domain) . "www/";

    $files = scandir($dir);

    foreach ($files as $key => $file) {
        if (isAdminDomain($file) || isOnlyPoints($file)) {
            $files[$key] = false;
        } else {
            $files[$key] = $dir . $file;
        }
    }

    return $files;
}

function isAdminDomain($file)
{
    return is_int(stripos($file, 'admin'));
}

function isOnlyPoints($file)
{
    $chars = str_split($file);
    foreach ($chars as $char) {
        if ($char != '.')
            return false;
    }

    return true;
}

function getDomainForHtacces()
{
    $domain = getDomain();


    return str_replace('.ru', '\.ru', $domain);
}
