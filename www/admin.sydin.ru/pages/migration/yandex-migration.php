<?
include('../../../../src-aeroport-simferopol/data/mysql.php');
include('../../../../migtration/migration_yandex.php');
include('../../../../src-aeroport-simferopol/data/cities/functions.php');
include('../../../../src-aeroport-simferopol/data/defaults/functions.php');
include('../../../../src-aeroport-simferopol/utils/functions.php');
include('../../../../src-aeroport-simferopol/deploy/main.php');

checkAuthorization();

$cities = getAllCities();

$create = [];

foreach (getAllCities() as $city) {
    $url = getMainUrl($city['eng'], $city['main_city']);

    $yandex_str = getYandexVerification($url);

    if ($yandex_str) {
        echo "INSERT INTO `widgets`( `city_ref`, `widget_type_ref`, `widget_code`) VALUES ('$city[id_city]','25','$yandex_str')" . "<br>";
    }
}

print_r($create);
