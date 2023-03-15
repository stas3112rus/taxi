<?
include('../../../../../src/mysql.php');
include('../../../../../src/admin/utils/text-types/functions.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/admin/utils/cities/functions.php');
include('../../../../../src/admin/utils/not-published/functions.php');
include('../../../components/not-published/view/drawNotPublishedRows.php');
include('../../../components/not-published/utils/functions.php');

checkAuthorization();


$city = getCityById($_GET['id']) ?? false;

if ($_POST) {

    $update = updateNotPublishedCities($_POST);
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

    <title>Города, где не публикуем</title>
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
                            <tbody>
                                <? drawNotPublishedRows(
                                    getNotPublishedList(
                                        getAllWithoutOneCities($city['id_city']),
                                        $city['id_city']
                                    )
                                ) ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="id_city" value="<? echo $city['id_city'] ?>">
                        <input class="btn btn-primary" type="submit" value="Города, где не публикуем">
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