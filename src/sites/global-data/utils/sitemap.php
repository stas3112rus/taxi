<?
function drawMainSitemap()
{
    $content = '';

    foreach (getAllCities() as $city_from) {
        $content .= drawHTMLContentForOneCity($city_from);
    }

    return $content;
}

function drawHTMLContentForOneCity($city_from)
{
    $content = getSitemapHTMLLine(
        getMainUrl($city_from['eng'], $city_from['main_city'])
    );

    $isNotPublicMainInDirections = isNotPublicMainInDirections();

    foreach (getAllCities() as $city_to) {
        if ($city_from['id_city'] == $city_to['id_city'])
            continue;

        $content .= getSitemapHTMLLine(getTransferUrl($city_from, $city_to));

        if ($isNotPublicMainInDirections && $city_to['main_city'])
            continue;

        $content .= getSitemapHTMLLine(getDirectionUrl($city_from, $city_to));
    }

    return $content;
}


function getSitemapHTMLLine($url)
{
    return "<a href='" . $url . "'>" . $url . "</a><br>";
}
