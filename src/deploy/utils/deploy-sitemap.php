<?
function deploySitemaps()
{
    $deployMainSitemap = deployMainSitemapXML();
    if ($deployMainSitemap != "Ok")
        return $deployMainSitemap;

    $deployNotMainSiteMapsXML = deployNotMainSitemapsXML();
    if ($deployNotMainSiteMapsXML != "Ok")
        return $deployNotMainSiteMapsXML;

    $deployMainSitemapPHP = deployMainSitemapPHP();
    if ($deployMainSitemapPHP != "Ok")
        return $deployMainSitemapPHP;

    return "Ok";
}

function deployMainSitemapXML()
{
    $txt = getMainSitemapTxt();
    $dir =  getFullPathToMainSitemapXMLFile(getMainCity());

    return createFile($dir, $txt);
}

function deployMainSitemapPHP()
{
    $txt = getMainSitemapPHPTxt();
    $dir =  getFullPathToMainSitemapPHPFile(getMainCity());

    return createFile($dir, $txt);
}

function deployNotMainSitemapsXML()
{
    $cities = getAllCities();

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
