<?
function getTariffForDirection()
{
    global $DEFAULT, $CITY_FROM,  $CITY_TO;

    if (!$CITY_TO) {
        return [
            'economy' => $DEFAULT['economy'],
            'comfort' => $DEFAULT['comfort'],
            'business' => $DEFAULT['business'],
            'minivan' => $DEFAULT['minivan']
        ];
    }

    return getTariff($CITY_FROM, $CITY_TO);
}

function getTariffsForTable()
{
    global $CITY_FROM,  $CITY_TO, $MAIN_CITY;
    $result = [];

    if ($CITY_TO) {
        array_push($result, setDiscountField(getTariff($CITY_FROM, $CITY_TO), true));
        array_push($result, setDiscountField(getTariff($CITY_TO, $CITY_FROM), true));
    }

    if ($CITY_TO['id_city'] != $MAIN_CITY['id_city'] && $CITY_FROM['id_city'] != $MAIN_CITY['id_city']) {
        array_push($result, setDiscountField(getTariff($CITY_FROM, $MAIN_CITY), true));
    }

    $notPublishingCities = getNotPublishingCitiesForSite($CITY_FROM);

    array_push($notPublishingCities, $CITY_TO, $MAIN_CITY);

    foreach (getTariffForCity($CITY_FROM, $notPublishingCities) as $tariff) {
        array_push($result, setDiscountField($tariff, false));
    }

    return $result;
}

function setDiscountField($tariff, $isDiscount)
{
    $tariff['discount'] = $isDiscount;

    return $tariff;
}
