<?
include('../../../../src/data/mysql.php');
include('../../../../src/data/text-types/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../constants/routs.php');
include('../../../../src/data/cities/functions.php');
include('../../components/cities/view/drawCitiesTable.php');
include('../../components/alerts/drawAlert.php');
include('../../components/cities/utils/functions-cities.php');


checkAuthorization();
$alert .= updateMainCityByGet();
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

    <title>Admin page</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <div class="cities">
                    <? echo $alert ?>
                    <form action="">
                        <? drawCitiesTable() ?>
                        <input class="btn btn-primary" type="submit" value="Обновить Главный сайт" disabled>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>