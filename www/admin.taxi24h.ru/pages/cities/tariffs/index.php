<?
include('../../../../../src/mysql.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/admin/utils/cities/functions.php');
include('../../../../../src/admin/utils/tariffs/functions.php');
include('../../../components/tariffs/view/drawTariffs.php');
include('../../../components/tariffs/utils/functions.php');

checkAuthorization($base);
$city = getCityById($_GET['id'], $base) ?? false;

if ($_POST) {
    if ($_GET['way'] == 1) {
        $update = updateDirectionTariffs($_POST, $base);
    }
    if ($_GET['way'] == 2) {
        $update = updateDirectionTariffs($_POST, $base, true);
    } 
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

    <title>Редактировать тарифы</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <?
                if ($city) {
                    echo $update;
                ?>
                    <h1><? echo "$city[im]" ?></h1>
                    <form method="post">
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th scope='col' style="width: 20%;">Направление</th>
                                    <th scope='col' style="width: 20%;">Эконом</th>
                                    <th scope='col' style="width: 20%;">Комфорт</th>
                                    <th scope='col' style="width: 20%;">Бизнес</th>
                                    <th scope='col' style="width: 20%;">Минивэн</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?
                                echo drawAllTariffsRaws(
                                    $city['im'],
                                    getAllTariffsWithNameCitiesFrom($city['id_city'], $base)
                                )
                                ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="city_from_ref" value="<? echo $city['id_city'] ?>">
                        <input class="btn btn-primary" formaction="./?id=<? echo $city['id_city'] ?>&way=1" formmethod="post" type="submit" value="Обновить в одну сторону">
                        <input class="btn btn-primary" formaction="./?id=<? echo $city['id_city'] ?>&way=2" formmethod="post" type="submit" value="Обновить туда и обратно">
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