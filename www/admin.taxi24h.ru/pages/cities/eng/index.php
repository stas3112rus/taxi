<?
include('../../../../../src/data/mysql.php');
include('../../../../../src/data/text-types/functions.php');
include('../../../../../src/deploy/main.php');
include('../../../../../src/files/utils/copy-delete-create.php');
include('../../../../../src/utils/functions.php');
include('../../../../../src/data/defaults/functions.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/data/cities/functions.php');
include('../../../components/cities/view/drawEngForm.php');
include('../../../components/cities/utils/functions-edit-eng.php');

checkAuthorization();


if ($_POST) {
    $alert .= editEng($_POST);
}
$city = getCityById($_GET['id']) ?? false;

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

    <title>Редактировать город</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <?
                if ($city) {
                    echo $alert ?>
                    <h1><? echo "$city[im]" ?></h1>
                    <? echo drawEngForm($city) ?>
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