<?
function drawHead()
{
    global $TXT, $LEVEL;
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<? echo  $TXT['description'] ?>" />
    <link rel="shortcut icon" href="<? echo $LEVEL ?>favicon.ico" />
    <title><? echo  $TXT['title'] ?></title>
    <link href="<? echo $LEVEL ?>css/reset-min.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>css/bootstrap.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>css/styles.css" rel="stylesheet" />
    <link href="<? echo $LEVEL ?>css/style-form.css" rel="stylesheet">
    <link href="<? echo $LEVEL ?>css/flatpickr.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<? echo $LEVEL ?>css/bootstrap-grid.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&amp;subset=cyrillic" rel="stylesheet" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<?
}
