<?
include('../../../../../src-aeroport-simferopol/data/mysql.php');
include('../../../../../src-aeroport-simferopol/data/text-types/functions.php');
include('../../../components/authorization/utils/functions.php');
include('../../../constants/routs.php');
include('../../../components/alerts/drawAlert.php');
include('../../../../../src-aeroport-simferopol/data/cities/functions.php');
include('../../../../../src-aeroport-simferopol/data/not-published/functions.php');
include('../../../components/not-published/view/drawNotPublished.php');
include('../../../components/not-published/utils/functions.php');

checkAuthorization();


$city = getCityById($_GET['id']) ?? false;

if ($_POST)
    $alert .= updateNotPublishedCities($_POST);

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

    <title>Города, где не публикуем</title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <?
                if ($city) {
                    echo $alert;
                ?>
                    <h1><? echo "$city[im]" ?></h1>
                    <? drawNotPublishedForm($city['id_city']) ?>

                <?
                } else {
                    echo drawAlert("Информация о городе отсутствует", "alert-danger");
                }
                ?>
            </div>
        </div>
    </section>
</body>
<script src="../../../js/main.js"></script>

</html>