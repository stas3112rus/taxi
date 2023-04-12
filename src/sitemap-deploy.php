<?
include('data/mysql.php');
include('data/cities/functions.php');
include('data/defaults/functions.php');
include('utils/functions.php');
include('deploy/utils/paths.php');
include('sites/global-data/utils/sitemap.php');
include('sites/components/navbar/view/drawNavBar.php');
include('sites/global-data/utils/phone-functions.php');
include('sites/global-data/utils/default-functions.php');

$CITY_FROM = getCityById($CITY_FROM_ID);
$MAIN_CITY = getMainCity();
$CURRENT_SITE = getMainUrl($CITY_FROM['eng'], $CITY_FROM['main_city']);
$LEVEL = '';
$DEFAULT = getDefaults();

?>

<!Doctype html>
<html lang="ru">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <link rel="shortcut icon" href="favicon.ico" />
        <title>Карта сайта https://taksi24.taxi/</title>
        <link href="css/reset-min.css" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style-form.css" rel="stylesheet">
        <link href="css/flatpickr.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="css/bootstrap-grid.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&amp;subset=cyrillic" rel="stylesheet" />

    </head>
</head>

<body>

    <?
    drawNavBar();
    ?>
    <div class="container-fluid" id="o-nas">
        <div class="container fifth_scr">
            <div class="row">
                <div class="col-md-12 text-center text_5_scr six_scr_h3">
                    <?
                    echo drawHTMLContentForOneCity($CITY_FROM, $MAIN_CITY);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>