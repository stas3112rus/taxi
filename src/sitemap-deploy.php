<?
include('data/mysql.php');
include('data/cities/functions.php');
include('data/defaults/functions.php');
include('utils/functions.php');
include('deploy/utils/paths.php');
include('sites/global-data/utils/sitemap.php');



$CITY_FROM = getCityById($CITY_FROM_ID);
$MAIN_CITY = getMainCity();
?>

<!Doctype html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Карта сайта https://taxi24h.ru/</title>
    <meta name="description" content="Карта сайта https://taxi24h.ru/">
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1.3" />
</head>

<body>
    <h1>Карта сайта</h1>

    <?
    if ($CITY_FROM['id_city'] == $MAIN_CITY['id_city']) {
        echo drawMainSitemap();
    } else {
        echo drawHTMLContentForOneCity($CITY_FROM);
    }
    ?>