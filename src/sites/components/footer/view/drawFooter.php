<?
function drawFooter()
{
    global $TXT, $LEVEL, $DEFAULT, $IS_SITEMAP, $TEXT_TYPE_INDEX;
?>
    <div class="container-fluid footer_scr">
        <div class="container">
            <div class="row footer_scr_row">
                <div class="col-md-1 text-left footer_scr_col center_sm_footer">
                    <img src='<? echo $LEVEL ?>images/dots.png' / alt="<? echo $TXT['footer_logo_alt'] ?>" title="<? echo $TXT['footer_logo_alt'] ?>">
                </div>
                <div class="col-md-2 text-left footer_scr_col center_sm_footer">
                    <p><? echo $TXT['footer_title'] ?></p>
                    <p><a href='mailto:<? echo $DEFAULT['email_for_site'] ?>'><? echo $DEFAULT['email_for_site'] ?></a></p>
                </div>
                <div class="col-md-2 text-left footer_scr_col center_sm_footer">
                    <p> <br /> </p>
                </div>
                <div class="col-md-3 text-left footer_scr_col center_sm_footer">
                    <p><a data-toggle="modal" data-target="#polit_conf" href="#polit_conf">Политика конфиденциальности</a></p>
                    <? if ($IS_SITEMAP) { ?>
                        <p><a href='sitemap.php'>Карта сайта</a></p><br>
                    <? } ?>

                    <? if ($TEXT_TYPE_INDEX == 1) { ?>
                        <p><a href='sitemap-2.php'>Структура сайта</a></p>
                    <? } ?>
                </div>
                <div class="col-md-2 text-left footer_scr_col center_sm_footer">
                    <div class="center_mob_icon">
                        <img src='<? echo $LEVEL ?>images/tel.png' alt="<? echo $TXT['navbar_phone_alt'] ?>" title="<? echo $TXT['navbar_phone_alt'] ?>" width="30" height="30" />
                        <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                            <img src=" <? echo $LEVEL ?>images/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="30" height="30">
                        </a>
                        <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                            <img src="<? echo $LEVEL ?>images/telegram.svg" alt="telegram <? echo getFullPhone() ?>" title="telegram <? echo getFullPhone() ?>" width="30" height="30">
                        </a>
                    </div>
                    <p><? echo getFullPhone() ?></p>
                </div>

            </div>
        </div>
    </div>
<?
}
