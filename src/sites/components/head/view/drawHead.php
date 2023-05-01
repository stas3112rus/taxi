<?
function drawHead()
{
    global $TXT, $LEVEL;
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? echo $TXT['title'] ?></title>
    <meta name="description" content="<? echo $TXT['description'] ?>">
    <meta name="keywords" content="<? echo $TXT['keywords'] ?>">
    <link rel="apple-touch-icon-precomposed" sizes="16x16" href="<? echo $LEVEL ?>assets\ico\favicon.png">
    <link rel="shortcut icon" href="<? echo $LEVEL ?>assets\ico\favicon.png">
    <link href="<? echo $LEVEL ?>assets\plugins\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\bootstrap-select\css\bootstrap-select.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\fontawesome\css\font-awesome.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\prettyphoto\css\prettyPhoto.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\owl-carousel2\assets\owl.carousel.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\owl-carousel2\assets\owl.theme.default.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\animate\animate.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\swiper\css\swiper.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\plugins\datetimepicker\css\bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\js\flatpickr\flatpickr.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>assets\css\theme.css" rel="stylesheet">
    <script src="<? echo $LEVEL ?>assets\plugins\modernizr.custom.js"></script>
<?
}
