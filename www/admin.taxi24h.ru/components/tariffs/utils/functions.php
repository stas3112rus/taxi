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

function updateTariffs($post, $base, $two_ways = false)
{
    $tariffs =  getTariffsList($post);

    $result = drawAlert("Тарифы успешно обновлены", "alert-success");

    foreach ($tariffs as $city_to_id => $tariff) {
        $update =  $two_ways ?
            updateTariffTwoWays($tariff, $post['city_from_ref'], $city_to_id, $base) :
            updateTariffOneWay($tariff, $post['city_from_ref'], $city_to_id, $base);


        if ($update != 'Ok') {
            $result =  drawAlert($update, "alert-danger");
            break;
        }
    }

    return $result;
}
