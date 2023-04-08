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
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Карта сайта <? echo $CURRENT_SITE ?></title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="<? echo $LEVEL ?>img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="<? echo $LEVEL ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>css/styles.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>css/font-awesome.min.css">
    <link rel='stylesheet' href='<? echo $LEVEL ?>css/animate.min.css'>
    <link rel='stylesheet' href='<? echo $LEVEL ?>css/slick.min.css'>
    <link rel='stylesheet' href='<? echo $LEVEL ?>js/flatpickr/dist/flatpickr.min.css'>
    <link rel="stylesheet" href="<? echo $LEVEL ?>css/owl.carousel.min.css">
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