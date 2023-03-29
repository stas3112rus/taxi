<?
function drawTariffsTable()
{
?>
    <div class="r-tbl">
        <table class="highlight">
            <thead>
                <? drawHeadOfTariffTable() ?>
            </thead>
            <tbody>
                <? drawTariffRows() ?>
                <? drawWaitInAirportRow() ?>
                <? drawWaitInTripRow() ?>
                <? drawArmChairRow() ?>
                <? drawRentAutoRow() ?>
            </tbody>
        </table>
    </div>
<?
}

function drawHeadOfTariffTable()
{
?>
    <tr>
        <th data-field="id">Направление</th>
        <th data-field="name">Стандарт</th>
        <th data-field="price">Комфорт</th>
        <th data-field="price">Минивен</th>
        <th data-field="price">Бизнес</th>
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
    $showDiscountDay = false;

    if ($counter < 2 || $tariff['discount']) {
        $showDiscountDay = true;
    }

?>
    <tr>
        <td>
            <? echo $tariff['cityFrom'] . "  - " . $tariff['cityTo'] ?>
            <? if ($showDiscountDay) getDiscountDay() ?>
        </td>
        <td><? upgradeDiscountTariffForTable($tariff['economy']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['comfort']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['business']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['minivan']) ?></td>
        <td><? upgradeDiscountTariffForTable($tariff['vip']) ?></td>
    </tr>
<?
}

function getDiscountDay()
{
    global $STOP_DISCOUNT_DAY;

    echo " <span><b>АКЦИЯ</b> до " . $STOP_DISCOUNT_DAY . "</span>";
}

function drawWaitInAirportRow()
{
    global $DEFAULT;
?>
    <tr>
        <td><? echo $DEFAULT['wait_in_airport_title'] ?></td>
        <td><? echo $DEFAULT['wait_in_airport_value'] ?></td>
        <td><? echo $DEFAULT['wait_in_airport_value'] ?></td>
        <td><? echo $DEFAULT['wait_in_airport_value'] ?></td>
        <td><? echo $DEFAULT['wait_in_airport_value'] ?></td>
        <td><? echo $DEFAULT['wait_in_airport_value'] ?></td>
    </tr>
<?
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
