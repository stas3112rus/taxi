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

function updateDirectionTariffs($post, $base, $allWays = false)
{
    $tariffs =  getTariffsList($post);

    $result = drawAlert("Тарифы успешно обновлены", "alert-success");

    foreach ($tariffs as $city_to_id => $tariff) {
        $firstWay = updateTariff($tariff, $post['city_from_ref'], $city_to_id, $base);

        $secondWay = 'Ok';
        if ($allWays) {
            $secondWay = updateTariff($tariff, $city_to_id, $post['city_from_ref'], $base);
        }

        if ($firstWay != 'Ok' || $secondWay != 'Ok') {
            $result =  drawAlert($firstWay != 'Ok' ?? $secondWay, "alert-danger");
            break;
        }
    }

    return $result;
}
