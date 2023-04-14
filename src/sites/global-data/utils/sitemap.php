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
    $content =  getSitemapHTMLLine($city_from);

    $isNotPublicMainInDirections = isNotPublicMainInDirections();

    foreach (getAllCities() as $city_to) {
        if ($city_from['id_city'] == $city_to['id_city'])
            continue;

        $content .= getSitemapHTMLLine($city_from, $city_to, false);

        if ($isNotPublicMainInDirections && $city_to['main_city'])
            continue;

        $content .= getSitemapHTMLLine($city_from, $city_to, true);
    }

    return $content;
}


function getSitemapHTMLLine($city_from, $city_to = false, $directionTypeTaxi = true)
{
    if ($city_to) {
        $url = $directionTypeTaxi
            ? getDirectionUrl($city_from, $city_to) :
            getTransferUrl($city_from, $city_to);
    } else {
        $url =  getMainUrl($city_from['eng'], $city_from['main_city']);
    }

    $type = $directionTypeTaxi ? "Такси" : "Трансфер";

    $dir = $city_to ?
        $city_from['im'] . " - " . $city_to['im'] :
        $city_from['im'];

    return "<a href='" . $url . "'>" . $type . " " . $dir . "</a><br>";
}
