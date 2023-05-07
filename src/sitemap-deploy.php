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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Карта сайта <? echo $CURRENT_SITE ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link href="<? echo $LEVEL ?>img/logo-dark.jpg" rel="icon" type="image/jpg">
        <link href="<? echo $LEVEL ?>img/logo-dark.jpg" rel="apple-touch-icon">
        <link href="<? echo $LEVEL ?>js/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/lib/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/font-awesome.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/themify-icons.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/animate.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/theme.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/responsive.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>js/flatpickr/flatpickr.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/owl.carousel.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/owl.theme.default.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/nivo-lightbox.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/nivo/default.css" rel="stylesheet">
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