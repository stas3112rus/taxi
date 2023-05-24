<?
include('../../../../src/data/mysql.php');
include('../../../../src/data/text-types/functions.php');
include('../../../../src/data/cities/functions.php');
include('../../../../src/data/tariffs/functions.php');
include('../../../../src/data/defaults/functions.php');
include('../../../../src/utils/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../constants/routs.php');
include('../../constants/sites-api-routes.php');
include('../../components/synchronization/utils/functions-api-cities.php');
include('../../components/synchronization/view/drawSynchronizationForm.php');
include('../../components/tariffs/utils/createTariffs.php');
include('../../components/alerts/drawAlert.php');
include('../../api/utils/functions.php');


checkAuthorization();

switch ($_GET['type']) {
    case "cities":
        $alert = makeSynchronizationCities($_POST);
        break;
    case "not_published":
        echo "not_published";
        break;
    case "tariffs":
        echo "tariffs";
        break;
}

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

    <title>Синхронизация</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <div class="cities">
                    <?
                    if ($alert)
                        echo $alert;
                    ?>

                    <? drawSynchronizationForm() ?>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="../../js/disableWithNotSelectedField.js"></script>
</html>