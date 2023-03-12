<?

function drawAllTariffsRaws($city_from_name, $cityTariffs)
{
    $rows = "";

    foreach ($cityTariffs as $citytariff) {
        $rows .= drawOneRaw($city_from_name, $citytariff);
    }

    return $rows;
}

function drawOneRaw($city_from_name, $tariff)
{
    return ("
        <tr>
            <th scope='row'>
                $city_from_name - $tariff[city_to_im]
            </th>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Эконом' aria-label='Эконом' aria-describedby='basic-addon1' name='$tariff[city_to_ref]_economy' value='$tariff[economy]'>

            </td>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Комфорт' aria-label='Комфорт' aria-describedby='basic-addon1' name='$tariff[city_to_ref]_comfort' value='$tariff[comfort]'>
            </td>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Бизнес' aria-label='Бизнес' aria-describedby='basic-addon1' name='$tariff[city_to_ref]_business' value='$tariff[business]'>
            </td>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Минивен' aria-label='Минивен' aria-describedby='basic-addon1' name='$tariff[city_to_ref]_minivan' value='$tariff[minivan]'>
            </td>
         </tr>
        "
    );
}
