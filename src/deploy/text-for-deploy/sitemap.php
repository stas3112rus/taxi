<?
function getMainSitemapTxt()
{
    $content = '';

    foreach (getAllCities() as $city_from) {
        $content .= getContentForOneCity($city_from);
    }

    return (getPrevSitemapXml()
        . $content
        . getPostSitemapXml());
}

function getNotMainSitemapsTXT($city_from)
{
    return getPrevSitemapXml() . getContentForOneCity($city_from) . getPostSitemapXml();
}

function getContentForOneCity($city_from)
{
    $content = getSitemapXmlLine(
        getMainUrl($city_from['eng'], $city_from['main_city'])
    );

    foreach (getAllCities() as $city_to) {
        if ($city_from['id_city'] != $city_to['id_city']) {
            $content .= getSitemapXmlLine(getDirectionUrl($city_from, $city_to));
            $content .= getSitemapXmlLine(getTransferUrl($city_from, $city_to));
        }
    }

    return $content;
}

function getSitemapXmlLine($url)
{
    return '<url>
    <loc>' . $url . '</loc>
</url>';
}

function getPrevSitemapXml()
{
    return '<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
}

function getPostSitemapXml()
{
    return '</urlset>';
}
