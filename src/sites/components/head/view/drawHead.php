<?
function drawHead()
{
    global $TXT, $CURRENT_SITE, $DEFAULT, $TEXT_TYPE_INDEX;
?>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <title><?php echo $TXT['title'] ?></title>

    <meta name="description" content="<?php echo $TXT['description'] ?>">
    <? if ($TEXT_TYPE_INDEX == 1 || $TEXT_TYPE_INDEX == 3) { ?>
        <meta property="og:title" content="<?php echo $TXT['title'] ?>">
        <meta property="og:description" content="<?php echo $TXT['description'] ?>">
        <meta property="og:image" content="<? echo $CURRENT_SITE ?>img/master/logo.png" />
        <meta property="og:url" content="<? echo $CURRENT_SITE ?>" />
        <meta property="og:site_name" content="<?php echo $DEFAULT['domain'] ?>" />
        <meta property="og:locale" content="ru_RU" />
    <? } ?>
    <meta name="keywords" content="<? echo $TXT['keywords'] ?>">
    <link rel="shortcut icon" href="<? echo $CURRENT_SITE ?>img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="<? echo $CURRENT_SITE ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo $CURRENT_SITE ?>css/styles.css">
    <link rel="stylesheet" href="<? echo $CURRENT_SITE ?>css/font-awesome.min.css">
    <link rel='stylesheet' href='<? echo $CURRENT_SITE ?>css/animate.min.css'>
    <link rel='stylesheet' href='<? echo $CURRENT_SITE ?>css/slick.min.css'>
    <link rel='stylesheet' href='<? echo $CURRENT_SITE ?>js/flatpickr/dist/flatpickr.min.css'>
    <link rel="stylesheet" href="<? echo $CURRENT_SITE ?>css/owl.carousel.min.css">
<?
}
