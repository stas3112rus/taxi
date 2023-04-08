<?
include('../../../../src-taxi-krim/data/mysql.php');
include('../../../../migtration/migration_yandex.php');
include('../../../../src-taxi-krim/data/cities/functions.php');
include('../../../../src-taxi-krim/data/defaults/functions.php');
include('../../../../src-taxi-krim/utils/functions.php');
include('../../../../src-taxi-krim/deploy/main.php');

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
