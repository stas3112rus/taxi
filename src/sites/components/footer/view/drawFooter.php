<?
function drawFooter()
{
    global $TXT, $ADDRESS, $DEFAULT, $IS_SITEMAP, $LEVEL;
?>
    <section id="block-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 col-ms-6">
                    <h2><? echo $TXT['footer_title'] ?></h2>
                    <p><? echo $TXT['footer_text'] ?></p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-ms-6">
                    <h4><? echo $TXT['footer_contacts_title'] ?></h4>
                    <p><b><span class="yellow">Адрес:</span> <? echo $ADDRESS ?></b></p>

                    <ul class="address">
                        <li><span class="fa fa-phone"></span>
                            <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                                <img src="<? echo $LEVEL ?>assets/images/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="16" height="16">
                            </a>
                            <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                                <img src="<? echo $LEVEL ?>assets/images/telegram.svg" alt="telegram <? echo getFullPhone() ?>" title="telegram <? echo getFullPhone() ?>" width="16" height="16">
                            </a>
                            <a href="tel:<? echo $DEFAULT['phone'] ?>">
                                <? echo getFullPhone() ?>
                            </a>
                        </li>
                        <li><span class="fa fa-envelope"></span>
                            <a href="mailto:<? echo $DEFAULT['email_for_site'] ?>">
                                <? echo $DEFAULT['email_for_site'] ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <a class="popup-modal" href="#polit_conf">Политика конфиденциальности.</a>
            <? echo $TXT['footer_bottom_subtitle'] ?>
            <? if ($IS_SITEMAP) { ?>
                <br>
                <a href="sitemap.php">Карта сайта</a>
            <? } ?>
            <a href="#" class="go-top hidden-xs hidden-ms"></a>
        </div>
    </footer>
<?
}
