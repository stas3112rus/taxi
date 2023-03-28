<?
function drawEmptyTariffsTable()
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
                <th scope='col' style="width: 15%;"></th>

            </tr>
        </thead>
        <tbody>
            <?
            drawAllEmptyTariffsRows()
            ?>
        </tbody>
    </table>
<?
}


function drawAllEmptyTariffsRows()
{
    $rows = "";

    foreach (getEmptyTariffs() as $tariff) {
        $rows .= drawOneRow($tariff);
    }

    return $rows;
}

function drawOneRow($tariff)
{
?> <form method="post">
        <tr>
            <th scope='row'>
                <? echo $tariff['cityFrom'] . " - " . $tariff['cityTo'] ?>
            </th>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Эконом' aria-label='Эконом' aria-describedby='basic-addon1' name="economy"' value='<? echo $tariff['economy'] ?>'>
            </td>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Комфорт' aria-label='Комфорт' aria-describedby='basic-addon1' name="comfort"' value='<? echo $tariff['comfort'] ?>'>
            </td>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Бизнес' aria-label='Бизнес' aria-describedby='basic-addon1' name="business"' value='<? echo $tariff['business'] ?>'>
            </td>
            <td>
                <input max='2147483647' type='number' class='form-control' placeholder='Минивэн' aria-label='Минивэн' aria-describedby='basic-addon1' name="minivan"' value='<? echo $tariff['minivan'] ?>'>
            </td>
            <td>
                <input class="btn btn-primary" type="submit" value="Обновить">
            </td>
        </tr>
        <input type="hidden" name="id_tariff" value="<? echo $tariff['id_tariff'] ?>">
    </form>
<?
}
