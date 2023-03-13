<?
include('../../../../../src/mysql.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/admin/utils/cities/functions.php');
include('../../../components/cities/utils/functions-edit-city.php');

checkAuthorization();


if ($_POST) {
    if ($_POST['im'])
        $editCity = editCity($_POST);
}

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
                echo $editCity ?>
                    <h1><? echo "$city[im]" ?></h1>
                    <form action="" method="post">
                        <? include('../../../components/cities/view/drawDeclensionCityTable.php') ?>
                        <input type="hidden" name="id_city" value="<? echo $city['id_city'] ?>">
                        <input class="btn btn-primary" type="submit" value="Обновить склонения">
                    </form>

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