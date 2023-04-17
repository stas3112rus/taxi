<?
function getDiscountPercent()
{
    global $DEFAULT;

    $today = date('j');
    $discount = round(($DEFAULT['min_price_percent'] + ($today % $DEFAULT['quantity_discount'])) / 100, 3);

    return $discount;
}

function getStopDiscountDay()
{
    global $MONTHS, $DEFAULT;

    $akzia_stop =  new DateTime(date("Y-m-d"));
    $akzia_stop->modify("+$DEFAULT[akzia_day] day");
    $akzia_stop->format('d-n-Y');

    $result = $akzia_stop->format('d');
    $result .= " ";
    $result .= $MONTHS[$akzia_stop->format('n') - 1];
    $result .= " ";
    $result .= $akzia_stop->format('Y');

    return $result;
}

function getStopDiscountForTimer()
{
    global $DEFAULT;

    $akzia_stop =  new DateTime(date("Y-m-d"));
    $akzia_stop->modify("+$DEFAULT[akzia_day] day");
    $akzia_stop->format('d-n-Y');

    $result = $akzia_stop->format('Y');
    $result .= "-";
    $result .= $akzia_stop->format('m');
    $result .= "-";
    $result .= $akzia_stop->format('d');
    $result .= " 23:59:59";


    return $result . "";
}
