<?
include('../../../../../src/mysql.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/admin/utils/widgets-types/functions.php');
include('../../../components/widget-types/view/drawWidgetType.php');
include('../../../components/widget-types/utils/functions.php');


checkAuthorization();

if ($_POST['type'] == 'update')
    $alert .= updateWidgetTypeValue($_POST);

if ($_POST['type'] == 'add')
    $alert .= addWidgetTypeValue($_POST);

if ($_GET['type'] == 'delete')
    $alert .= deleteWidgetTypeValue($_GET['id_widget_type']);


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

    <title>Типы виджетов</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <? echo $alert ?>

                <h1>Типы виджетов</h1>
                <? drawWidgetTypes(); ?>
                <h2>Добавить тип виджета</h2>
                <? drawAddWidgetType(); ?>
            </div>
        </div>
    </section>
</body>

</html>