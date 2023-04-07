<?
include('data/mysql.php');
include('data/not-published/functions.php');
include('data/text/functions.php');
include('data/cities/functions.php');
include('data/tariffs/functions.php');
include('data/widgets/functions.php');
include('data/defaults/functions.php');
include('deploy/main.php');
include('utils/functions.php');

include('sites/constants/constants.php');
include('sites/global-data/global-data.php');

include('sites/components/main.php');

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <? drawHead() ?>
    <!-- Виджеты Хедеры  -->
    <? drawHeaderWidgets() ?>
    <!-- Виджеты Хедеры  -->
</head>

<body>
    <div class="wrapp">
        <?
        drawLoader();
        drawNavBarTop();
        drawNavBarBottom();
        drawMainBlock();
        drawTextBlock();
        drawTariffsBlock();
        drawCarClasses();
        drawServices();
        drawDiscountBlock();
        drawReliableTaxi();
        drawFaqs();
        drawReviews();
        drawContacts();
        drawFooter();
        ?>
    </div>
    <div id="order-time" class="white-popup-block mfp-hide">
        <? drawTopForm("contact_form_2") ?>
    </div>
    <?
    drawPolitics();
    drawScripts();
    ?>


    <!-- Виджеты  Футер -->
    <? drawFooterWidgets(); ?>
    <!-- Виджеты  Футер -->

</body>

</html>