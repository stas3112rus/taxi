<?
function drawMainFooter()
{
    global $TXT, $DEFAULT, $ADDRESS, $CURRENT_SITE;
?>
    <div class="main-footer">
        <div class="main">
            <div class="content">
                <div class="section">
                    <div class="row">
                        <div class="col-md-9 footer-column">
                            <h3 class="footer-heading"><? echo mb_strtoupper($TXT['footer_title']) ?></h3>
                            <hr class="short-footer">

                            <?php echo $TXT['footer_text'] ?>

                        </div>
                        <div class="col-md-3 center-column">
                            <h5 class="footer-heading">Наши контакты</h5>
                            <hr class="short-footer">
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                                <div class="location-info">
                                    <p><? echo $ADDRESS ?></p>
                                </div>
                            </div>
                            <div class="footer-location" style="display: flex; gap: 10px; align-items: center;">
                                <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                                    <img src=" <? echo $CURRENT_SITE ?>img/images/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="30" height="30">
                                </a>
                                <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                                    <img src="<? echo  $CURRENT_SITE ?>img/images/telegram.svg" alt="telegram <? echo getFullPhone() ?>" title="telegram <? echo getFullPhone() ?>" width="30" height="30">
                                </a>
                                <div class="location-fa" style="margin-right: 0;"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div >
                                    <p>
                                        <a href="tel:<? echo  $DEFAULT['phone'] ?>">
                                            <? echo getFullPhone() ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="footer-location">
                                <div class="location-fa"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="location-info">
                                    <p>
                                        <a href="mailto:<? echo  $DEFAULT['email_for_site'] ?>">
                                            <? echo  $DEFAULT['email_for_site'] ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
}
