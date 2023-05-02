<?
function drawFooter()
{
    global $TXT, $IS_SITEMAP, $LEVEL;
?>
    <footer class="footer">
        <div class="footer-meta">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright">
                            <?echo $TXT['footer_title']?>
                            <br>
                            <a href="#" data-toggle="modal" data-target="#offerta-modal">
                                <u>Политика конфиденциальности и оферты.</u>
                            </a>
                            <? if ($IS_SITEMAP) { ?>
                                <br>
                                <a href="<? echo $LEVEL ?>sitemap.php">
                                    <u>Карта сайта</u>
                                </a>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?
}
