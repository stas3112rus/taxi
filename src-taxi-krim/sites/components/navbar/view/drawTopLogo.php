<?
function drawTopLogo()
{
    global $TEXT_TYPE_INDEX, $MAIN_SITE, $CURRENT_SITE;

    switch ($TEXT_TYPE_INDEX) {
        case 1:
            return drawLogoImg();
        case 2:
            return drawTopLogoWithLink($MAIN_SITE);
        case 3:
            return drawTopLogoWithLink($MAIN_SITE);
        case 4:
            return drawTopLogoWithLink($CURRENT_SITE);
        case 5:
            return drawTopLogoWithLink($CURRENT_SITE);
        default:
            return  false;
    }
}

function drawLogoImg()
{
    global $TXT, $LEVEL;
?>
    <img src="<? echo $LEVEL ?>assets/img/logo.jpg" alt="<? echo $TXT['alt_logo'] ?>" title="<? echo $TXT['alt_logo'] ?>">
<?
}

function drawTopLogoWithLink($link)
{
?>
    <a class="navbar-brand" href="<? echo $link ?>">
        <? drawLogoImg() ?>
    </a>
<?
}
