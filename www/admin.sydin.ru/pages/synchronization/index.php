<?
include('../../../../src-taxi-krim/data/mysql.php');
include('../../../../src-taxi-krim/data/text-types/functions.php');
include('../../../../src-taxi-krim/data/cities/functions.php');
include('../../../../src-taxi-krim/data/not-published/functions.php');
include('../../../../src-taxi-krim/data/tariffs/functions.php');
include('../../../../src-taxi-krim/data/defaults/functions.php');
include('../../../../src-taxi-krim/deploy/main.php');
include('../../../../src-taxi-krim/files/utils/copy-delete-create.php');
include('../../../../src-taxi-krim/data/user/functions.php');
include('../../../../src-taxi-krim/utils/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../constants/routs.php');
include('../../constants/sites-api-routes.php');
include('../../components/synchronization/utils/functions-api-cities.php');
include('../../components/synchronization/utils/functions-api-not-published.php');
include('../../components/synchronization/utils/functions-api-tariffs.php');
include('../../components/synchronization/view/drawSynchronizationForm.php');
include('../../components/tariffs/utils/createTariffs.php');
include('../../components/alerts/drawAlert.php');
include('../../components/settings/view/drawSettingsTable.php');
include('../../components/settings/utils/delete-domains.php');
include('../../components/settings/utils/deploy-domains.php');
include('../../api/utils/functions.php');


checkAuthorization();

switch ($_GET['type']) {
    case "cities":
        $alert .= makeSynchronizationCities();
        break;
    case "not_published":
        $alert .= makeSynchronizationNotPublished();
        break;
    case "tariffs":
        $alert .= makeSynchronizationTariffs();
        break;
    case "deploy_domains":
        $alert .= deployDomains($_POST['password']);
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