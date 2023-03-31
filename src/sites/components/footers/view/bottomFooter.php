<?
function drawBottomFooter()
{
    global $IS_SITEMAP, $TXT;

?>
    <div class="bottom-footer">
        <div class="main">
            <div class="section">
                <div class="column-left">
                    <p>
                        <? echo $TXT['footer_bottom_title'] ?>
                    </p>
                    <? if ($IS_SITEMAP) { ?>
                        <p>
                            <a href='sitemap.php'>
                                Карта сайта
                            </a>
                        </p>
                    <? } ?>
                </div>
                <div class="column-right">
                    <p>
                        <span>
                            <a class="popup-with-form" href="#polit">
                                Политика конфиденциальности
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?
}
