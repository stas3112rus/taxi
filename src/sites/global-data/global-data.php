<?
include('utils/tariffs-functions.php');
include('utils/text-functions.php');
include('utils/default-functions.php');
include('utils/phone-functions.php');
include('utils/discount-functions.php');
include('utils/widgets-functions.php');

$ALL_CITIES = getAllCities();
$CITY_FROM = getCityById($CITY_FROM_ID);
$CITY_TO = getCityTo();

$MAIN_CITY = getMainCity();

$DEFAULT = getDefaults();

$TARIFF = getTariffForDirection();

$TARIFFS_TABLE = getTariffsForTable();

$CURRENT_SITE = getMainUrl($CITY_FROM['eng'], $CITY_FROM['main_city']);
$MAIN_SITE = getMainUrl($MAIN_CITY['eng'], $MAIN_CITY['main_city']);

$TXT = getTXT();

$STOP_DISCOUNT_DAY = getStopDiscountDay();

$DISCOUNT_PERCENT = getDiscountPercent();

$WIDGETS_HEADER = upgradedWidgets(true);
$WIDGETS_BOTTOM = upgradedWidgets(false);

$IS_SITEMAP = isSitemap();

$CITIES_TABS = getCitiesForTabs(getBasicCityForTab(), $DEFAULT['tabs_count'], $CITY_FROM_ID);

function getCityTo()
{
    global $TEXT_TYPE_INDEX, $CITY_TO_ID;

    switch ($TEXT_TYPE_INDEX) {
        case 2:
            return getCityById($CITY_TO_ID);
        case 3:
            return getMainCity();
        case 4:
            return getCityById($CITY_TO_ID);
        case 5:
            return getCityById($CITY_TO_ID);
        default:
            return  false;
    }
}

function isSitemap()
{
    global $TEXT_TYPE_INDEX;

    switch ($TEXT_TYPE_INDEX) {
        case 1:
            return true;
        case 3:
            return true;
        default:
            return  false;
    }
}


function getBasicCityForTab()
{
    global $CITY_TO, $DEFAULT;

    return $CITY_TO ? $CITY_TO['id_city'] + $DEFAULT['tabs_offset'] : $DEFAULT['tabs_offset'];
}
