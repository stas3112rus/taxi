<?
include('../../../../../src/data/mysql.php');
include('../../../../../src/data/text-types/functions.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/data/cities/functions.php');
include('../../../components/cities/utils/functions-edit-city.php');

include('../../../../../src/data/widgets-types/functions.php');
include('../../../../../src/data/widgets/functions.php');
include('../../../components/widgets/utils/functions.php');
include('../../../components/cities/view/drawDeclension.php');
include('../../../components/widgets/view/drawWidgetForm.php');

checkAuthorization();

if ($_POST['type'] == 'declensions') {
    $alert .= editCity($_POST);
}

if ($_POST['type'] == 'editWidgets') {
    $alert .= updateWidgets($_POST);
}

if ($_GET['type'] == 'deleteWidget')
    $alert .= deleteWidgetsByCity($_GET['id']);

$city = getCityById($_GET['id']) ?? false;

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

    <title>Редактировать город</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <?
                if ($city) {
                    echo $alert ?>
                    <h1><? echo "$city[im]" ?></h1>
                    <? drawDeclensionForm($city) ?>
                    <br><br>
                    <h2>Виджеты</h2>
                    <a href='./?id=<? echo $city['id_city'] ?>&type=deleteWidget' role='button' aria-pressed='true' class='btn btn-danger'>Удалить виджеты для города</a>
                    <? drawWidgetForm($city['id_city']) ?>
                    <br><br><br>

                <?
                } else {
                    echo drawAlert("Информация о городе отсутствует", "alert-danger");
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>