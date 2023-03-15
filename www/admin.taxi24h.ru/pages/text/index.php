<?
include('../../../../src/mysql.php');
include('../../../../src/admin/utils/text-types/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../../../src/admin/utils/cities/functions.php');
include('../../constants/routs.php');
include('../../components/alerts/drawAlert.php');


checkAuthorization();

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

    <title>Тексты - </title>
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