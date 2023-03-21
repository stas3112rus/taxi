<?
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
