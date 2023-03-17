<?
include('../../src/data/mysql.php');

function getCities()
{
    global $base;

    $sql = "SELECT * FROM cities";
    $res = $base->query($sql);

    return $res->fetch_all(MYSQLI_ASSOC);
}

function getNewTariffs()
{
    global $base;

    $sql = "SELECT
    id_tariff, 
	cityFrom.im as cityFrom,
    cityFrom.eng as cityFromEng,
    cityTo.im as cityTo,    
    cityTo.eng as cityToEng,
    tariffs.economy, 
    tariffs.comfort, 
    tariffs.business, 
    tariffs.minivan
    FROM `tariffs`
    JOIN cities cityFrom ON cityFrom.id_city = tariffs.city_from_ref
	JOIN cities cityTo ON cityTo.id_city = tariffs.city_to_ref";

    $res = $base->query($sql);

    return $res->fetch_all(MYSQLI_ASSOC);
}

function getOldTariffs()
{
    global $base;

    $sql = "SELECT 
	*
    FROM `mezhgorod`
    JOIN cities ON from_1=cities.im";

    $res = $base->query($sql);

    return $res->fetch_all(MYSQLI_ASSOC);
}



function upgradeNewTariff($tariffTwo)
{
    $result = [];

    foreach ($tariffTwo as $tariff) {
        $result[$tariff['cityFromEng']][$tariff['cityToEng']] =
            concatTariffs($tariff);
    }

    return $result;
}

function concatTariffs($tariff)
{
    if ($tariff['economy'])
        return $tariff['economy'] . "," . $tariff['comfort'] . "," . $tariff['business'] . "," . $tariff['minivan'];
    return Null;
}

function upgradeOldTariffs($tariffs)
{
    $keyExceptions = [
        "from_1",
        "id_city",
        "eng",
        "im",
        "rod",
        "dat",
        "vin",
        "tvor",
        "pred",
        "main_city"
    ];
    $result = [];

    foreach ($tariffs as $tariff) {
        foreach ($tariff as $key => $value) {
            if (!in_array($key, $keyExceptions)) {
                $result[$tariff['eng']][$key] = $value;
            }
        }
    }

    return $result;
}

function compareOldAndNewTariffs($reverse = false)
{
    if ($reverse){
        $tariffOne = upgradeOldTariffs(getOldTariffs());
        $tariffTwo = upgradeNewTariff(getNewTariffs());
    }else {
        $tariffOne = upgradeNewTariff(getNewTariffs());
        $tariffTwo = upgradeOldTariffs(getOldTariffs());
    }


    echo "Старых: " . count($tariffOne) . "<br>";
    echo "Новых: " . count($tariffTwo) . "<br>";

    foreach ($tariffTwo as $from => $tariff) {
        foreach ($tariff as $to => $value) {
            if (str_replace(" ", '', $tariffTwo[$from][$to])  != str_replace(" ", '', $tariffOne[$from][$to])) {
                echo $from . " - " . $to . " : " . $tariffTwo[$from][$to] . " != " . $tariffOne[$from][$to] . "<br>";
            }
        }
    }
}

compareOldAndNewTariffs();
compareOldAndNewTariffs(true);
