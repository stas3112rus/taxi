<?

function drawHead()
{
    global $TXT, $LEVEL;
?>
    <meta charset="UTF-8" />
    <title><? echo updateTitle($TXT['title']) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<? echo $TXT['description'] ?>">
    <meta name="keywords" content="<? echo $TXT['keywords'] ?>">
    <meta name="Resource-type" content="Document" />
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<? echo $LEVEL ?>favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/jarallax.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/swiper.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/style.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>assets/js/flatpickr/flatpickr.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>assets/css/responsive.css">
<?
}

function updateTitle($str)
{
    $str = mb_strtoupper($str);
    return str_replace('РУБ.', 'руб.', $str);
}
