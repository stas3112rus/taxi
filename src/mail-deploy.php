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
include('sites/utils/mail-function.php');

include('sites/components/main.php');
sendMail();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <? drawHead("Заявка отправлена", "") ?>
  <!-- Виджеты Хедеры  -->
  <? drawHeaderWidgets() ?>
  <!-- Виджеты Хедеры  -->
</head>

<body>

  <?
  drawNavBar();
  drawMainBlock(true);
  ?>
  <!-- Виджеты  Футер -->
  <? drawFooterWidgets(); ?>
  <!-- Виджеты  Футер -->

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      setTimeout(() => {
        window.location.href = '<? echo $CURRENT_SITE ?>';
      }, 5000);
    });
  </script>

</body>


</html>