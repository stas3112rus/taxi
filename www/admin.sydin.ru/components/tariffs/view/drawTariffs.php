<?
function drawTariffsForm($city)
{
?>
    <form method="post">
        <? drawTariffsTable($city) ?>

        <input type="hidden" name="city_from_ref" value="<? echo $city['id_city'] ?>">
        <input class="btn btn-primary" formaction="./?id=<? echo $city['id_city'] ?>&way=1" formmethod="post" type="submit" value="Обновить в одну сторону">
        <input class="btn btn-primary" formaction="./?id=<? echo $city['id_city'] ?>&way=2" formmethod="post" type="submit" value="Обновить туда и обратно">
    </form>
<?
}

function drawTariffsTable($city)
{
?>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th scope='col' style="width: 20%;">Направление</th>
                <th scope='col' style="width: 15%;">Эконом</th>
                <th scope='col' style="width: 15%;">Комфорт</th>
                <th scope='col' style="width: 15%;">Бизнес</th>
                <th scope='col' style="width: 15%;">Минивэн</th>
                <th scope='col' style="width: 15%;">VIP</th>
            </tr>
        </thead>
        <tbody>
            <?
            drawAllTariffsRaws(
                $city['im'],
                getAllTariffsByCityFrom($city['id_city'])
            )
            ?>
        </tbody>
    </table>
<?
}


function drawAllTariffsRaws($city_from_name, $tariffs)
{
    $rows = "";

    foreach ($tariffs as $tariff) {
        $rows .= drawOneRaw($city_from_name, $tariff);
    }

    return $rows;
}

function drawOneRaw($city_from_name, $tariff)
{
?>
    <tr>
        <th scope='row'>
            <? echo $city_from_name . " - " . $tariff['city_to_im'] ?>
        </th>
        <td>
            <input max='2147483647' type='number' class='form-control' placeholder='Эконом' aria-label='Эконом' aria-describedby='basic-addon1' name='<? echo $tariff['city_to_ref'] . "_economy" ?>' value='<? echo $tariff['economy'] ?>'>
        </td>
        <td>
            <input max='2147483647' type='number' class='form-control' placeholder='Комфорт' aria-label='Комфорт' aria-describedby='basic-addon1' name='<? echo $tariff['city_to_ref'] . "_comfort" ?>' value='<? echo $tariff['comfort'] ?>'>
        </td>
        <td>
            <input max='2147483647' type='number' class='form-control' placeholder='Бизнес' aria-label='Бизнес' aria-describedby='basic-addon1' name='<? echo $tariff['city_to_ref'] . "_business" ?>' value='<? echo $tariff['business'] ?>'>
        </td>
        <td>
            <input max='2147483647' type='number' class='form-control' placeholder='Минивэн' aria-label='Минивэн' aria-describedby='basic-addon1' name='<? echo $tariff['city_to_ref'] . "_minivan" ?>' value='<? echo $tariff['minivan'] ?>'>
        </td>
        <td>
            <input max='2147483647' type='number' class='form-control' placeholder='VIP' aria-label='VIP' aria-describedby='basic-addon1' name='<? echo $tariff['city_to_ref'] . "_vip" ?>' value='<? echo $tariff['vip'] ?>'>
        </td>
    </tr>
<?
}
