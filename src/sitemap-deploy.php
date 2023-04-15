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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Карта сайта <? echo $CURRENT_SITE ?></title>
        <meta name="description" content="<? echo $TXT['description'] ?>" />
        <meta name="keywords" content="<? echo $TXT['keywords'] ?>" />
        <link href="<? echo $LEVEL ?>images/logo.png" rel="icon" type="image/png" />
        <link href="<? echo $LEVEL ?>images/logo.png" rel="apple-touch-icon" />
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:300,400,500,700|Pacifico" rel="stylesheet" />
        <link href="<? echo $LEVEL ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<? echo $LEVEL ?>css/line-icon.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<? echo $LEVEL ?>js/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet" />
        <link href="<? echo $LEVEL ?>css/animate.css" rel="stylesheet" />
        <link href="<? echo $LEVEL ?>css/lib/style.css" rel="stylesheet" />
        <link href="<? echo $LEVEL ?>js/flatpickr/flatpickr.css" rel="stylesheet" />
        <link href="<? echo $LEVEL ?>js/slick/slick.css" rel="stylesheet" />
        <link href="<? echo $LEVEL ?>css/style.css" rel="stylesheet" />
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