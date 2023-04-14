<?
function drawHead()
{
    global $TXT, $LEVEL;
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? echo $TXT['title'] ?></title>
    <meta name="description" content="<? echo $TXT['description'] ?>" />
    <meta name="keywords" content="<? echo $TXT['keywords'] ?>" />
    <link href="<? echo $LEVEL ?>images/logo.png" rel="icon" type="image/png" />
    <link href="<? echo $LEVEL ?>images/logo.png" rel="apple-touch-icon" />
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:300,400,500,700|Pacifico" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>css/line-icon.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>js/Magnific-Popup-master/dist/magnific-popup.css" />
    <link href="<? echo $LEVEL ?>css/animate.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>css/lib/style.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>js/flatpickr/flatpickr.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>js/slick/slick.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>css/style.css" rel="stylesheet" />
<?
}
