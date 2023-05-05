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
        <title>Карта сайта <?php echo $CURRENT_SITE ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon-precomposed" sizes="16x16" href="<? echo $LEVEL ?>assets\ico\favicon.png">
        <link rel="shortcut icon" href="<? echo $LEVEL ?>assets\ico\favicon.png">
        <link href="<? echo $LEVEL ?>assets\plugins\bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\bootstrap-select\css\bootstrap-select.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\fontawesome\css\font-awesome.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\prettyphoto\css\prettyPhoto.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\owl-carousel2\assets\owl.carousel.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\owl-carousel2\assets\owl.theme.default.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\animate\animate.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\swiper\css\swiper.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\plugins\datetimepicker\css\bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\js\flatpickr\flatpickr.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>assets\css\theme.css" rel="stylesheet">
        <script src="<? echo $LEVEL ?>assets\plugins\modernizr.custom.js"></script>
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