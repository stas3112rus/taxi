<?
function drawFooter()
{
    global $ADDRESS, $TXT, $DEFAULT, $IS_SITEMAP;
?>
    <footer id="page-footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4 footer-contact">
                    <span class="icon-envelope icon-lg"></span>
                    <br>
                    <b>
                        <a href="mailto:<? echo $DEFAULT['email_for_site'] ?>">
                            <? echo $DEFAULT['email_for_site'] ?>
                        </a>
                    </b>
                </div>

                <div class="col-sm-4 footer-contact">
                    <span class="icon-map icon-lg"></span>
                    <br>
                    <b>
                        <? echo $ADDRESS ?>
                    </b>
                </div>

                <div class="col-sm-4 footer-contact">
                    <span class="icon-phone icon-lg"></span>
                    <br>
                    <b>
                        <a href="tel:<? echo $DEFAULT['phone'] ?>">
                            <? echo getFullPhone() ?>
                        </a>
                    </b>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <? echo $TXT['footer_bottom_title'] ?>
                        <span class="popup-with-form" href="#polit_conf">
                            <a>Политика конфиденциальности, оферта.</a>
                        </span>
                        <?
                        if ($IS_SITEMAP) {
                        ?>
                            <br><a href="sitemap.php">Карта сайта</a>
                        <?
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?
}
