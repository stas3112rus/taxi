<?
function drawTariffsTable()
{
?>
    <table class="table text-center">
        <tbody>
            <?
            drawHeadOfTariffTable();
            drawTariffRows();
            ?>
        </tbody>
    </table>
<?
}

function drawHeadOfTariffTable()
{
?>
    <thead>
        <tr>
            <th scope="col" class="text-center col-xs-2">Направление</th>
            <th scope="col" class="text-center col-xs-2">Стандарт</th>
            <th scope="col" class="text-center col-xs-2">Комфорт</th>
            <th scope="col" class="text-center col-xs-2">Бизнес</th>
            <th scope="col" class="text-center col-xs-2">Минивен</th>
            <th scope="col" class="text-center col-xs-2">VIP</th>
        </tr>
    </thead>
    <?
}

function drawTariffRows()
{
    global $TARIFFS_TABLE, $DEFAULT;

    $counter = 0;
    foreach ($TARIFFS_TABLE as $tariff) {
        drawTariffRow($tariff, $counter);
        $counter++;

        if ($counter == $DEFAULT['tariffs_no_hidden']) {
    ?>
            </tbody>
            <tbody id="hide-me" class="collapse">
        <?
        }
    }
}

function drawTariffRow($tariff, $counter)
{
        ?>
        <tr>
            <td class="col-xs-2">
                <? echo drawTariffDirectionField($counter, $tariff) ?>
            </td>
            <td class="col-xs-2"><? upgradeDiscountTariffForTable($tariff['economy']) ?></td>
            <td class="col-xs-2"><? upgradeDiscountTariffForTable($tariff['comfort']) ?></td>
            <td class="col-xs-2"><? upgradeDiscountTariffForTable($tariff['business']) ?></td>
            <td class="col-xs-2"><? upgradeDiscountTariffForTable($tariff['minivan']) ?></td>
            <td class="col-xs-2"><? upgradeDiscountTariffForTable($tariff['vip']) ?></td>
        </tr>
    <?
}

function drawTariffDirectionField($counter, $tariff)
{
    $cities = $tariff['cityFrom'] . "  - " . $tariff['cityTo'];

    $discount = "";
    if ($counter < 2 || $tariff['discount']) {
        $discount = " " . getDiscountDay();
    }

    return $cities . $discount;
}

function getDiscountDay()
{
    global $STOP_DISCOUNT_DAY;

    return '<span class="akciya">АКЦИЯ ДО ' . $STOP_DISCOUNT_DAY . '!</span>';
}
