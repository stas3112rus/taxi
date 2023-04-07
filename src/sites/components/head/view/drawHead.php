<?
function drawHead()
{
    global $TXT, $LEVEL;
?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<? echo $LEVEL ?>img/favicon.png" rel="shortcut icon" type="image/png" />
    <title><? echo $TXT['title'] ?></title>
    <meta name="description" content="<? echo $TXT['description'] ?>" />
    <meta name="keywords" content="<? echo $TXT['keywords'] ?>" />
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/fonts/font-awesome/css/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/style.css" type='text/css' />
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/animate.css" type='text/css' />
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/owl.carousel.css" type='text/css' />
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/fixed-nav.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/fonts/car-serive-icon.css" type='text/css'>
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/magnific-popup.css" type='text/css' />
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/twentytwenty.css">
    <link rel="stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/js/flatpickr/flatpickr.css">
    <link rel=" stylesheet" href="<? echo $LEVEL ?>builder/disc/elements/css/color/yellow.css" />
<?
}
