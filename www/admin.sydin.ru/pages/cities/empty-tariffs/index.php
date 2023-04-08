<?
include('../../../../../src-taxi-krim/data/mysql.php');
include('../../../../../src-taxi-krim/data/text-types/functions.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src-taxi-krim/data/tariffs/functions.php');
include('../../../components/emptyTariffs/view/drawEmptyTariffs.php');
include('../../../components/emptyTariffs/utils/functions.php');

checkAuthorization();
if ($_POST) {
    $alert .= updateEmptyTariffs($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/main.min.css">

    <title>Пустые тарифы</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <?
                echo $alert;
                ?>
                <h1>Пустые тарифы</h1>
                <? drawEmptyTariffsTable() ?>
            </div>
        </div>
    </section>
</body>

</html>