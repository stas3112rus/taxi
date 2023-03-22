<?
include('../../../../src/data/mysql.php');
include('../../../../src/data/text-types/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../constants/routs.php');
include('../../components/alerts/drawAlert.php');
include('../../../../src/data/defaults/functions.php');
include('../../components/defaults/view/drawDefaults.php');
include('../../components/defaults/utils/functions.php');
include('../../components/defaults/constants/constants.php');

checkAuthorization();


if ($_POST['type'] == 'update')
    $alert .= updateDefaultValue($_POST);

if ($_POST['type'] == 'add')
    $alert .= addDefaultValue($_POST);



if ($_GET['type'] == 'delete')
    $alert .= deleteDefaultValue($_GET['id_default']);


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

    <title>Значения по умолчанию</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <? echo $alert ?>

                <h1>Значения по умолчанию</h1>
                <? drawDefaults(); ?>
                <h2>Добавить значение по умолчанию</h2>

                <? drawAddDefault() ?>
            </div>
        </div>
    </section>
</body>

</html>