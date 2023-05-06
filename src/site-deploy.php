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
    <?
    drawPopUpMenu();
    drawTopForm(true);
    drawPreloader();
    drawNavBar();
    drawMainBlock();
    drawTextBlock();
    drawAdvantages();
    drawCarClasses();

    drawScripts();
    ?>

    <!-- Виджеты  Футер -->
    <? drawFooterWidgets(); ?>
    <!-- Виджеты  Футер -->

</body>

</html>