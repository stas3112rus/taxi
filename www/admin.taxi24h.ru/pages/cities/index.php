<?
include('../../../../src/mysql.php');
include('../../components/authorization/utils/functions.php');
include('../../constants/routs.php');
include('../../../../src/admin/utils/cities/functions.php');
include('../../components/cities/view/drawCityTable.php');

checkAuthorization($base);
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
                    <form action="">
                        <?echo drawCityTable(getAllCities($base), $routs)?>
                        <input class="btn btn-primary" type="submit" value="Обновить Главный сайт">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>