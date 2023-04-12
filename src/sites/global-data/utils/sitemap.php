<?

function drawHTMLContentForOneCity($city_from, $main_city)
{
    $content =  getSitemapHTMLLineForDomain($city_from, $main_city);

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


function getSitemapHTMLLine($city_from, $city_to, $directionTypeTaxi = true)
{
    if ($city_to) {
        $url = $directionTypeTaxi
            ? getDirectionUrl($city_from, $city_to) :
            getTransferUrl($city_from, $city_to);
    } else {
        $url =  getMainUrl($city_from['eng'], $city_from['main_city']);
    }

    $type = $directionTypeTaxi ? "Такси" : "Трансфер";

    if ($directionTypeTaxi) {
        $dir = $city_from['main_city'] ?
            $city_to['im'] . " - " . $city_from['im'] :
            $city_from['im'] . " - " . $city_to['im'];
    } else {
        $dir = $city_from['im'] . " - " . $city_to['im'];
    }

    return "<a href='" . $url . "'>" . $type . " " . $dir . "</a><br>";
}

function getSitemapHTMLLineForDomain($city_from, $main_city)
{

    $url =  getMainUrl($city_from['eng'], $city_from['main_city']);


    $txt = $city_from['id_city'] == $main_city['id_city'] ?
        "Такси " . $main_city['im'] :
        "Такси " . $main_city['im'] . " - " . $city_from['im'];

    return "<a href='" . $url . "'>" . $txt . "</a><br>";
}
