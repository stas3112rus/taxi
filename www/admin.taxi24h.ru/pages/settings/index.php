<?
include('../../../../src/data/mysql.php');
include('../../../../src/data/text-types/functions.php');
include('../../../../src/data/user/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../constants/routs.php');
include('../../components/alerts/drawAlert.php');
include('../../components/settings/view/drawSettingsTable.php');
include('../../components/settings/utils/changePassword.php');

checkAuthorization();

if ($_POST['type'] == 'changePassword')
    $alert .= changePassword($_POST['password']);

if ($_POST['type'] == 'deleteDomains')
    $alert .= "удалить домен";

if ($_POST['type'] == 'deployDomains')
    $alert .= "деплой";
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