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
    global $CITY_FROM,  $CITY_TO, $MAIN_CITY, $TXT;

    $city_from = $TXT['IS_REVERSE_TARIFFS'] ? $CITY_TO : $CITY_FROM;
    $city_to = $TXT['IS_REVERSE_TARIFFS'] ? $CITY_FROM : $CITY_TO;

    $result = [];

    if ($city_to) {
        array_push($result, setDiscountField(getTariff($city_from, $city_to), true));
        array_push($result, setDiscountField(getTariff($city_to, $city_from), true));
    }

    if ($city_to['id_city'] != $MAIN_CITY['id_city'] && $city_from['id_city'] != $MAIN_CITY['id_city']) {
        array_push($result, setDiscountField(getTariff($city_from, $MAIN_CITY), true));
    }

    $notPublishingCities = getNotPublishingCitiesForSite($city_from);

    array_push($notPublishingCities, $city_to, $MAIN_CITY);

    foreach (getTariffForCity($city_from, $notPublishingCities) as $tariff) {
        array_push($result, setDiscountField($tariff, false));
    }

    return $result;
}

function setDiscountField($tariff, $isDiscount)
{
    $tariff['discount'] = $isDiscount;

    return $tariff;
}

function upgradeDiscountTariffForTable($tariff)
{
    if ($tariff) {
        echo "<s>$tariff</s> <span>" . getTariffWithDiscount($tariff) . "</span>";
    } else {
        echo "Договорная";
    }
}

function getTariffWithDiscount($tariff)
{
    global $DISCOUNT_PERCENT;
    return round($tariff - ($tariff * $DISCOUNT_PERCENT));
}
