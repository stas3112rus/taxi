<?
function makeSynchronizationTariffs()
{
    global $SITES_API_ROUTES;

    $tariffsApi = getJsonArray($SITES_API_ROUTES[$_POST['site']]['tariffs']);

    if ($tariffsApi['error']) {
        return drawAlert($tariffsApi['error'], "alert-danger");
    }

    $tariffsApi = getArrayByTwoKey($tariffsApi, "cityFrom", "cityTo");
    $tariffsCurrent = getArrayByTwoKey(getAllTariffsForApi(), "cityFrom", "cityTo");

    $differentTariffs = getTariffsWithDifferentValues($tariffsCurrent, $tariffsApi);

    $updateTariffs = updateTariffByArray($differentTariffs);
    if ($updateTariffs != "Ok")
        return drawAlert($updateTariffs, "alert-danger");

    return drawAlert("Тарифы успешно синхронизированы", "alert-success");
}

function getTariffsWithDifferentValues($tariffsCurrent, $tariffsApi)
{
    $result = [];

    foreach ($tariffsApi as $key => $tariffApi) {
        if ($tariffsCurrent[$key]) {
            if (!IsTwoTariffEqual($tariffsCurrent[$key], $tariffApi)) {
                $tariff = $tariffApi;
                $tariff['id_tariff'] = $tariffsCurrent[$key]['id_tariff'];
                $tariff['city_from_ref'] = $tariffsCurrent[$key]['city_from_ref'];
                $tariff['city_to_ref'] = $tariffsCurrent[$key]['city_to_ref'];

                array_push($result, $tariff);
            }
        }
    }

    return $result;
}

function IsTwoTariffEqual($tariff_1, $tariff_2)
{
    return ($tariff_1['economy'] == $tariff_2['economy'] &&
        $tariff_1['comfort'] == $tariff_2['comfort'] &&
        $tariff_1['business'] == $tariff_2['business'] &&
        $tariff_1['minivan'] == $tariff_2['minivan'] &&
        $tariff_1['vip'] == $tariff_2['vip']
    );
}
