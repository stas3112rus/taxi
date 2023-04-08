<?
include('data/mysql.php');
include('data/cities/functions.php');
include('data/defaults/functions.php');
include('utils/functions.php');
include('deploy/utils/paths.php');
include('sites/global-data/utils/sitemap.php');

$CITY_FROM = getCityById($CITY_FROM_ID);
$MAIN_CITY = getMainCity();
$CURRENT_SITE = getMainUrl($CITY_FROM['eng'], $CITY_FROM['main_city']);
$LEVEL = '';

?>

<!Doctype html>
<html lang="ru">

<head>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="yandex-verification" content="15e75242a69b0299" />

        <link href="favicon.png" rel="shortcut icon" type="image/png" />
        <title>Карта сайта <? echo $CURRENT_SITE ?></title>
        <meta name="description" content="" />
        <link rel="stylesheet" href="builder/disc/elements/css/fonts/font-awesome/css/font-awesome.min.css" type='text/css'>

        <link rel="stylesheet" href="builder/disc/elements/css/style.css" type='text/css' />
        <link rel="stylesheet" href="builder/disc/elements/css/animate.css" type='text/css' />

        <link rel="stylesheet" href="builder/disc/elements/css/owl.carousel.css" type='text/css' />

        <link rel="stylesheet" href="builder/disc/elements/css/fixed-nav.css">
        <link rel="stylesheet" href="builder/disc/elements/css/fonts/car-serive-icon.css" type='text/css'>

        <link rel="stylesheet" href="builder/disc/elements/css/magnific-popup.css" type='text/css' />

        <link href="builder/disc/elements/css/twentytwenty.css" rel="stylesheet">

        <link rel="stylesheet" href="builder/disc/elements/js/flatpickr/flatpickr.css">

        <link rel=" stylesheet" href="builder/disc/elements/css/color/yellow.css" />

    </head>
</head>

<body>
    <h1>Карта сайта <? echo $CURRENT_SITE ?></h1>

    <?
    if ($CITY_FROM['id_city'] == $MAIN_CITY['id_city']) {
        echo drawMainSitemap();
    } else {
        echo drawHTMLContentForOneCity($CITY_FROM);
    }
    ?>