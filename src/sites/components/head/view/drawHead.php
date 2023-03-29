<?
function drawHead()
{
    global $TXT, $CURRENT_SITE;

?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title><? echo $TXT["title"] ?></title>
    <meta name="description" content="<? echo $TXT["description"] ?>">
    <meta name="keywords" content="<? echo $TXT["keywords"] ?>" />
    <link rel="shortcut icon" href="<? echo $CURRENT_SITE ?>favicon.png">
    <link rel="stylesheet" type="text/css" href="<? echo $CURRENT_SITE ?>css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<? echo $CURRENT_SITE ?>css/style.css?v=1.3" />
<?
}
