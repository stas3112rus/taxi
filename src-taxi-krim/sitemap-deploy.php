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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="author" content="lpbuilding.ru">
    <link rel="icon" type="png" href="favicon.png">
    <title>Карта сайта <?php echo $CURRENT_SITE ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/monthly.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/js/Magnific-Popup-master/dist/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
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