<?
include('../../../../src-aeroport-simferopol/data/mysql.php');
include('../../../../src-aeroport-simferopol/data/text-types/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../../../src-aeroport-simferopol/data/cities/functions.php');
include('../../constants/routs.php');
include('../../components/alerts/drawAlert.php');
include('../../../../src-aeroport-simferopol/data/widgets-types/functions.php');
include('../../../../src-aeroport-simferopol/data/widgets/functions.php');
include('../../components/widgets/utils/functions.php');
include('../../components/widgets/view/drawWidgetForm.php');

checkAuthorization();


if ($_POST['type'] == 'editWidgets')
    $alert .= updateWidgets($_POST);

$main_city = getMainCity();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.min.css">

    <title>Виджеты</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <? echo $alert ?>
                <?php
                if ($main_city) {
                ?>
                    <h1>Виджеты</h1>
                    <? drawWidgetForm($main_city['id_city']) ?>

                <? } else {
                    echo drawAlert("Не задан главный сайт", "alert-danger");
                } ?>

            </div>
        </div>
    </section>
</body>

</html>