<?
function drawTariffsTable()
{
?>
    <table class="highlight">
        <? drawHeadOfTariffTable() ?>
        <tbody>
            <tr>
                <td>Ожидание в аэропорту</td>
                <td><span style="color: #ff6600;">бесплатно</span></td>
                <td><span style="color: #ff6600;">бесплатно</span></td>
                <td><span style="color: #ff6600;">бесплатно</span></td>
                <td><span style="color: #ff6600;">бесплатно</span></td>
            </tr>
            <?
            drawWaitInTripRow();
            drawArmChairRow();
            drawRentAutoRow();
            ?>


        </tbody>
    </table>
<?
}

function drawHeadOfTariffTable()
{
?>
    <tr>
        <th data-field="id">Направление</th>
        <th data-field="name">Эконом</th>
        <th data-field="price">Комфорт</th>
        <th data-field="price">Бизнес</th>
        <th data-field="price">Мини-Бус</th>
        <th data-field="price">Вип</th>
    </tr>
<?
}

function drawTariffRows()
{
    global $TARIFFS_TABLE;

    $counter = 0;
    foreach ($TARIFFS_TABLE as $tariff) {
        drawTariffRow($tariff, $counter);
        $counter++;
    }
}

function drawTariffRow($tariff, $counter)
{
?>
    <tr>
        <td>
            <? echo drawTariffDirectionField($counter, $tariff) ?>
        </td>
        <td><? upgradeDiscountTariffForTable($tariff['economy']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['comfort']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['business']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['minivan']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['vip']) ?></td>
    </tr>
<?
}

function drawTariffDirectionField($counter, $tariff)
{
    global $TXT;
    $prefix = "";
    if ($counter < $TXT['COUNT_TaxiWord']) {
        $prefix .= $TXT['TaxiWordInTariffsTable'] . " ";
    }

    $cities = $TXT['CityFromInTariffsTable'] ? $tariff['cityFrom'] . "  - " . $tariff['cityTo'] : $tariff['cityTo'];

    $discount = "";
    if ($counter < 2 || $tariff['discount']) {
        $discount = " " . getDiscountDay();
    }

    return $prefix . $cities . $discount;
}

function getDiscountDay()
{
    global $STOP_DISCOUNT_DAY;

    return "<span style='color: #ff6600;'><b>АКЦИЯ</b> до " . $STOP_DISCOUNT_DAY . "</span>";
}

function drawWaitInTripRow()
{
    global $DEFAULT;
?>
    <tr>
        <td><? echo $DEFAULT['wait_in_trip_title'] ?></td>
        <td><? echo $DEFAULT['wait_in_trip_economy'] ?></td>
        <td><? echo $DEFAULT['wait_in_trip_comfort'] ?></td>
        <td><? echo $DEFAULT['wait_in_trip_minivan'] ?></td>
        <td><? echo $DEFAULT['wait_in_trip_business'] ?></td>
        <td><? echo $DEFAULT['wait_in_trip_vip'] ?></td>
    </tr>
<?
}

function drawArmChairRow()
{
    global $DEFAULT;
?>
    <tr>
        <td><? echo $DEFAULT['child_armchair_title'] ?></td>
        <td><? echo $DEFAULT['child_armchair_economy'] ?></td>
        <td><? echo $DEFAULT['child_armchair_comfort'] ?></td>
        <td><? echo $DEFAULT['child_armchair_minivan'] ?></td>
        <td><? echo $DEFAULT['child_armchair_business'] ?></td>
        <td><? echo $DEFAULT['child_armchair_vip'] ?></td>
    </tr>
<?
}

function drawRentAutoRow()
{
    global $DEFAULT;
?>
    <tr>
        <td><? echo $DEFAULT['rent_auto_title'] ?></td>
        <td><? echo $DEFAULT['rent_auto_economy'] ?></td>
        <td><? echo $DEFAULT['rent_auto_comfort'] ?></td>
        <td><? echo $DEFAULT['rent_auto_minivan'] ?></td>
        <td><? echo $DEFAULT['rent_auto_business'] ?></td>
        <td><? echo $DEFAULT['rent_auto_vip'] ?></td>
    </tr>
<?
}
