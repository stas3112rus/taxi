<?
include('../../../../../src-taxi-krim/data/mysql.php');
include('../../../../../src-taxi-krim/data/text-types/functions.php');
include('../../../../../src-taxi-krim/data/defaults/functions.php');
include('../../../../../src-taxi-krim/files/utils/copy-delete-create.php');
include('../../../../../src-taxi-krim/utils/functions.php');
include('../../../../../src-taxi-krim/deploy/main.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src-taxi-krim/data/cities/functions.php');
include('../../../../../src-taxi-krim/data/tariffs/functions.php');
include('../../../components/tariffs/utils/createTariffs.php');
include('../../../components/cities/utils/functions-add-city.php');
include('../../../components/cities/view/drawAddEditForms.php');

checkAuthorization();

if ($_POST) {
    $alert .= createCity($_POST);
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

    <title>Добавить город</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <h1>Добавить город</h1>
                <? echo $alert ?>
                <? drawAddCityForm() ?>
            </div>
        </div>
    </section>
</body>

</html>