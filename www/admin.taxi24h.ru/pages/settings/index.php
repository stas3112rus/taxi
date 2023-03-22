<?
include('../../../../src/data/mysql.php');
include('../../../../src/data/text-types/functions.php');
include('../../../../src/data/cities/functions.php');
include('../../../../src/files/utils/copy-delete-create.php');
include('../../../../src/deploy/main.php');
include('../../../../src/utils/functions.php');
include('../../../../src/data/defaults/functions.php');
include('../../../../src/data/user/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../constants/routs.php');
include('../../components/alerts/drawAlert.php');
include('../../components/settings/view/drawSettingsTable.php');
include('../../components/settings/utils/changePassword.php');
include('../../components/settings/utils/delete-domains.php');
include('../../components/settings/utils/deploy-domains.php');
checkAuthorization();

if ($_POST['type'] == 'changePassword')
    $alert .= changePassword($_POST['password']);

if ($_POST['type'] == 'deleteDomains')
    $alert .= deleteDomains();

if ($_POST['type'] == 'deployDomains')
    $alert .= deployDomains();
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

    <title>Настройки</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <? echo $alert ?>

                <h1>Настройки</h1>
                <? drawSettingsTable() ?>
            </div>
        </div>
    </section>
</body>

</html>