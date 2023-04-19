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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="png" href="favicon.png">
        <title>Карта сайта <?php echo $CURRENT_SITE ?></title>
        <meta name="description" content="<?php echo $description ?>">
        <meta name="keywords" content="">
        <link href="assets\css\bootstrap-grid.css" rel="stylesheet">
        <link href="assets\css\font-awesome.css" rel="stylesheet">
        <link href="assets\css\swiper.css" rel="stylesheet">
        <link href="assets\css\swipebox.css" rel="stylesheet">
        <link href="assets\css\zoomslider.css" rel="stylesheet">
        <link href="assets\css\style.css?03" rel="stylesheet">
        <link href="assets\css\style2.css?03" rel="stylesheet">

        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800|Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/magnific-popup.css" type='text/css' />
        <link rel="stylesheet" href="assets/js/flatpickr/flatpickr.css">
    </head>
</head>

<body>
    <h2>Карта сайта <? echo $CURRENT_SITE ?></h2>

    <?
    if ($CITY_FROM['id_city'] == $MAIN_CITY['id_city']) {
        echo drawMainSitemap();
    } else {
        echo drawHTMLContentForOneCity($CITY_FROM);
    }
    ?>