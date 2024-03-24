<?
function getDomain()
{
    $domain = getDefaultValueByName('domain');
    if (!$domain)   throw new Exception('В константах не задан domain');

    return  $domain;
}

function getRootPath()
{
    $domain = getDomain();

    $dir = $_SERVER['DOCUMENT_ROOT'];

    $dir = str_replace("/www/admin.$domain", '', $dir);
    $dir = str_replace("taxi2023/www", 'taxi2023', $dir);

    return $dir . "/";
}

function getSubDomainName($eng, $isMain = false)
{
    $domain = getDomain();

    if ($isMain) {
        return $domain;
    } else {
        return $eng . "." . $domain;
    }
}


function getMainUrl($eng, $isMain = false)
{
    if ($isMain) {
        return "https://" . getSubDomainName($eng, true) . "/";
    }

    return "http://" . getSubDomainName($eng, false) . "/";
}

function isNotPublicMainInDirections()
{
    return !!getDefaultValueByName('not_public_main_in_directions');
}


function getTabsValue()
{
    global $TEXT_TYPE_INDEX;

    return $TEXT_TYPE_INDEX == 5 ? tabsForTransfer() : tabsForTaxi();
}

function tabsForTaxi()
{
    global $CITIES_TABS;
    $result = [];

    foreach ($CITIES_TABS as $cityTab) {

        array_push($result, getTabTaxi($cityTab));
    }

    return $result;
}

function tabsForTransfer()
{
    global $CITIES_TABS, $DEFAULT;
    $count = 0;
    $result = [];

    foreach ($CITIES_TABS as $cityTab) {
        $tab = $count < $DEFAULT['tabs_transfer_default'] ?  getTabTransfer($cityTab) : getTabTaxi($cityTab);
        array_push($result, $tab);
        $count++;
    }

    return $result;
}

function getTabTaxi($cityTab)
{
    global $CITY_FROM, $CITY_TO, $TEXT_TYPE_INDEX;


    $url = getDirectionUrl($CITY_FROM, $cityTab);

    if ($TEXT_TYPE_INDEX == 2) {
        $url = getDirectionUrl($cityTab, $CITY_FROM);
    }

    if ($TEXT_TYPE_INDEX == 3) {
        $url = getDirectionUrl($CITY_TO, $cityTab);
    }


    return
        [
            'text' => $TEXT_TYPE_INDEX == 2 ? "Такси " . $cityTab['im'] . " - " . $CITY_FROM['im'] :   "Такси " . $CITY_FROM['im'] . " - " . $cityTab['im'],
            'url' => $url
        ];
}

function getTabTransfer($cityTab)
{
    global $CITY_FROM;

    return
        [
            'text' => "Трансфер " . $CITY_FROM['im'] . " - " . $cityTab['im'],
            'url' => getTransferUrl($CITY_FROM, $cityTab)
        ];
}
