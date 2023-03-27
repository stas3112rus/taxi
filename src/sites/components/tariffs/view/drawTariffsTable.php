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
    foreach ($TARIFFS_TABLE as $tariff) {
        $tariff['discount'] ? drawTariffRowWithDiscount($tariff) : drawTariffRow($tariff);
    }
}

function  drawTariffRowWithDiscount($tariff)
{
    global $STOP_DISCOUNT_DAY;

?>
    <tr>
        <td><? echo $tariff['cityFrom'] . "  - " . $tariff['cityTo'] ?> <span><b>АКЦИЯ</b> до <? echo $STOP_DISCOUNT_DAY ?></span></td>
        <td><s><? echo $tariff['economy'] ?></s> <span><? echo getTariffWithDiscount($tariff['economy']) ?> руб</span></td>
        <td><s><? echo $tariff['comfort'] ?></s> <span><? echo getTariffWithDiscount($tariff['comfort']) ?> руб</span></td>
        <td><s><? echo $tariff['business'] ?></s> <span><? echo getTariffWithDiscount($tariff['business']) ?> руб</span></td>
        <td><s><? echo $tariff['minivan'] ?></s> <span><? echo getTariffWithDiscount($tariff['minivan']) ?> руб</span></td>
        <td>Договорная</td>
    </tr>
<?
}

function getTariffWithDiscount($tariff)
{
    global $DISCOUNT_PERCENT;
    return round($tariff - ($tariff * $DISCOUNT_PERCENT));
}

function drawTariffRow($tariff)
{
?>
    <tr>
        <td><? echo $tariff['cityFrom'] . "  - " . $tariff['cityTo'] ?></td>
        <td><? echo $tariff['economy'] ?></td>
        <td><? echo $tariff['comfort'] ?></td>
        <td><? echo $tariff['business'] ?></td>
        <td><? echo $tariff['minivan'] ?></td>
        <td>Договорная</td>
    </tr>
<?
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
