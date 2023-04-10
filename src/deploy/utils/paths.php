<?

function getFullPathToDomain($city)
{
    $domain = getDomain();

    return  getRootPath($domain) . "www/" . getSubDomainName($city['eng'],  $city['main_city']) . "/";
}

function getFullPathToDomainWithWWW($city)
{
    $domain = getDomain();

    return  getRootPath($domain) . "www/www." . getSubDomainName($city['eng'],  $city['main_city']);
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
    if ($city_from['main_city']) {
        $folder = $city_to['eng'] . '-simferopol';
    } else {
        $folder = $city_to['eng'];
    }

    return  getFullPathToDomain($city_from) . $folder . "/";
}

function getFullPathTransferFolder($city_from, $city_to)
{

    if ($city_from['main_city']) {
        $folder = 'transfer-simferopol-' . $city_to['eng'] . "/";
    } else {
        $folder = "transfer-" . $city_to['eng'] . "/";
    }

    return  getFullPathToDomain($city_from) . $folder;
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
    return getFullPathToDomain($city) . "robots.txt";
}

function getFullPathToHtaccesFile($city)
{
    return getFullPathToDomain($city) . ".htaccess";
}

function getFullPathToSitemapXMLFile($city)
{
    return getFullPathToDomain($city) . "sitemap.xml";
}

function getFullPathToMainSitemapXMLFile($city)
{
    return getFullPathToDomain($city) . "sitemap2.xml";
}


function getPathToMainFile($level = 0)
{
    return getLevel($level) . "../../src/site-deploy.php";
};

function getPathToInfoFile($level = 0)
{
    return getLevel($level) . "info.php";
};

function getUrlToSitemap($city)
{
    return getMainUrl($city['eng'], $city['main_city']) . "sitemap.xml";
}

function getUrlToSitemapWithAllUrls($city)
{
    return getMainUrl($city['eng'], $city['main_city']) . "sitemap2.xml";
}

function getDirectionUrl($city_from, $city_to)
{
    if ($city_from['main_city']) {
        $folder = $city_to['eng'] . '-simferopol';
    } else {
        $folder = $city_to['eng'];
    }

    return getMainUrl($city_from['eng'], $city_from['main_city'])
        . $folder
        . '/';
}

function getTransferUrl($city_from, $city_to)
{
    if ($city_from['main_city']) {
        $folder = 'transfer-simferopol-' . $city_to['eng'];
    } else {
        $folder = "transfer-" . $city_to['eng'];
    }

    return getMainUrl($city_from['eng'], $city_from['main_city'])
        . $folder
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

function getListOfDomainsWithoutAdmin()
{

    $domain = getDomain();
    $dir = getRootPath($domain) . "www/";

    $files = scandir($dir);
    $result = [];

    foreach ($files as $file) {
        if (
            isContentDomain($file, $domain) &&
            !isAdminDomain($file) &&
            !isOnlyPoints($file)
        ) {
            array_push($result, $dir . $file);
        }
    }

    return $result;
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

function isContentDomain($file, $domain)
{
    return is_int(stripos($file, $domain));
}

function getDomainForHtacces()
{
    $domain = getDomain();


    return str_replace('.ru', '\.ru', $domain);
}
