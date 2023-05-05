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

if (isset($_POST['g-recaptcha-response'])) {
  $captcha = $_POST['g-recaptcha-response'];
} else {
  $captcha = false;
}

if ($captcha) {

  $secret   = $DEFAULT['recaptcha_secret_key'];

  $response = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
  );
  $response = json_decode($response);

  if ($response->success == true && $response->score >= 0.5) {
    sendMail();
  }
}

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