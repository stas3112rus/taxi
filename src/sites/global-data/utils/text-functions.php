<?
function getTXT()
{
    $result = [];

    global $TEXT_TYPE_INDEX;

    $texts = geTextsByTypeForSite($TEXT_TYPE_INDEX);

    foreach ($texts as $text) {
        $result[$text['field_name']] =  upgradeTextLine($text['value']);
    }

    return $result;
}

function upgradeTextLine($textLine)
{
    global $DEFAULT, $MAIN_SITE, $CURRENT_SITE, $CITY_FROM, $CITY_TO;

    $textLine = replacePadeg($textLine);
    $textLine = str_replace("[min_price]", getMinPrice(), $textLine);
    $textLine = str_replace("[phone]", getFullPhone(), $textLine);
    $textLine = str_replace("[domen]", $DEFAULT['domain'], $textLine);
    $textLine = str_replace("[main_url]", $MAIN_SITE, $textLine);
    $textLine = str_replace("[domain_url]", $CURRENT_SITE, $textLine);
    $textLine = str_replace("[direction_url]", getDirectionUrl($CITY_FROM, $CITY_TO), $textLine);

    return $textLine;
}

function replacePadeg($textLine)
{
    global $CITY_FROM, $CITY_TO;

    $padeges = [
        "im",
        "rod",
        "dat",
        "vin",
        "tvor",
        "pred"
    ];

    foreach ($padeges as $padeg) {
        $textLine = str_replace(getOneLineForReplacePadeg($padeg, 1), $CITY_FROM[$padeg], $textLine);
        if ($CITY_TO)
            $textLine = str_replace(getOneLineForReplacePadeg($padeg, 2), $CITY_TO[$padeg], $textLine);
    }

    return $textLine;
}


function getOneLineForReplacePadeg($padeg, $city_number)
{
    return "[city_" . $city_number . "_" . $padeg . "]";
}

function getMinPrice()
{
    global $TARIFF, $DEFAULT;

    return round($TARIFF['economy'] * $DEFAULT['min_price_percent'] / 100);
}
