<?
function drawHead()
{
    global $TXT, $LEVEL;
?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<? echo $TXT['description'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? echo $TXT['title'] ?></title>
    <link rel="shortcut icon" href="<? echo $LEVEL ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/monthly.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/main.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/js/Magnific-Popup-master/dist/magnific-popup.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/responsive.css">
<?
}
