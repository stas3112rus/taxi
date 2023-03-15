<?
include('../../../../../src/mysql.php');
include('../../../../../src/admin/utils/text-types/functions.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/admin/utils/cities/functions.php');
include('../../../components/cities/utils/functions-edit-city.php');

include('../../../../../src/admin/utils/widgets-types/functions.php');
include('../../../../../src/admin/utils/widgets/functions.php');
include('../../../components/widgets/utils/functions.php');
include('../../../components/widgets/view/drawWidgetForm.php');

checkAuthorization();

if ($_POST['type'] == 'declensions') {
    $alert .= editCity($_POST);
}

if ($_POST['type'] == 'editWidgets') {
    $alert .= updateWidgets($_POST);
}

if ($_GET['type'] == 'deleteWidget')
    $alert .= deleteWidgets($_GET['id']);

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
                    <form action="" method="post">
                        <? include('../../../components/cities/view/drawDeclensionCityTable.php') ?>
                        <input type="hidden" name="type" value="declensions">
                        <input type="hidden" name="id_city" value="<? echo $city['id_city'] ?>">
                        <input class="btn btn-primary" type="submit" value="Обновить склонения">
                    </form>
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