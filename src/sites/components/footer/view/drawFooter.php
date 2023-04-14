<?
function drawFooter()
{
    global $TXT, $IS_SITEMAP, $LEVEL;
?>
    <footer class="footer_up footer-up-taxi">
        <div class="container">

            <div class="row">
                <div class="col-1">
                    <h4><? echo $TXT['footer_title'] ?></h4>
                    <div class="footer-desc">
                        <p><? echo $TXT['footer_text'] ?></p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-2">
                        <div><img src="<? echo $LEVEL ?>img/logo.png" title="<? echo $TXT['footer_alt'] ?>" alt="<? echo $TXT['footer_alt'] ?>"></div>
                        <div class="copyright"><? echo $TXT['footer_copyright'] ?></div>
                        <a class="popup-polit" href="#polit_conf">Политика конфиденциальности</a> <br>
                        <? if ($IS_SITEMAP) { ?>
                            <a href="sitemap.php">Карта сайта</a>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?
}
