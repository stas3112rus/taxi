<?

function drawHead()
{
    global $TXT, $LEVEL;
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<? echo $TXT['description'] ?>">
    <link rel="icon" type="png" href="<? echo $LEVEL ?>favicon.png">
    <title><? echo $TXT['title'] ?></title>
    <meta name="keywords" content="<? echo $TXT['keywords'] ?>">
    <link href="<? echo $LEVEL ?>assets/css/bootstrap-grid.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets/css/swipebox.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets/css/zoomslider.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets/css/style.css?04" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets/css/style2.css?04" rel="stylesheet">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800|Open+Sans:400,600,700&amp;subset=cyrillic">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/js/flatpickr/flatpickr.css">
<?
}
