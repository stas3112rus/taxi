<?
function getTariffsList($post)
{
    $result = [];
    foreach ($post as $key => $value) {
        if ($key != 'city_from_ref') {
            $result[getCityIdFromTariffs($key)][getTypeTariff($key)] = $value;
        }
    }

    return $result;
}

function getCityIdFromTariffs($value)
{
    return stristr($value, '_', true);
}


function getTypeTariff($value)
{
    return substr(stristr($value, '_'), 1);
}

function updateTariffs($post, $two_ways = false)
{
    $tariffs =  getTariffsList($post);

    foreach ($tariffs as $city_to_id => $tariff) {
        $update =  $two_ways ?
            updateTariffTwoWays($tariff, $post['city_from_ref'], $city_to_id) :
            updateTariffOneWay($tariff, $post['city_from_ref'], $city_to_id);

        if ($update != 'Ok')
            return drawAlert($update, "alert-danger");
    }

    return drawAlert("Тарифы успешно обновлены", "alert-success");
}
