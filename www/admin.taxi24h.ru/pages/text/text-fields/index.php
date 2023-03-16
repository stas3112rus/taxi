<?
include('../../../../../src/mysql.php');
include('../../../../../src/admin/utils/text-types/functions.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src/admin/utils/text/functions.php');
include('../../../../../src/admin/utils/text-fields/functions.php');
include('../../../components/text-fields/view/drawTextFields.php');
include('../../../components/text-fields/utils/functions.php');

checkAuthorization();

if ($_POST['type'] == 'update')
    $alert .=  updateTextFieldValue($_POST);

if ($_POST['type'] == 'add')
    $alert .= addTextFieldValue($_POST);

if ($_GET['type'] == 'delete')
    $alert .= deleteTextFieldValue($_GET['id_text_field']);

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

    <title>Текстовые поля</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <? echo $alert ?>

                <h1>Текстовые поля</h1>
                <? drawTextFields() ?>
                <h2>Добавить текстовое поле</h2>
                <? drawAddTextField() ?>
            </div>
        </div>
    </section>
</body>

</html>