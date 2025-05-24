<?
function drawFooterTop()
{
    global $DEFAULT, $ADDRESS, $LEVEL;
?>
    <div class="container contact_container">
        <div class="row">
            <div class="footer_data">
                <div class="col-sm-4 col-xs-12">
                    <ul class="client_data">
                        <li>
                            <span class="contact"></span>
                            <div class="client_detail">
                                <h4>КОНТАКТЫ</h4>
                                <span>
                                    <div style="display: flex; gap:4px; align-items:center">
                                        <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                                            <img src="<? echo $LEVEL ?>assets/images/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="22" height="22">
                                        </a>
                                        <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                                            <img src="<? echo $LEVEL ?>assets/images/telegram.svg" alt=telegram" <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="22" height="22">
                                        </a>
                                        <a href="tel:<? $DEFAULT['phone'] ?>">
                                            <? echo getFullPhone() ?>
                                        </a>
                                    </div>

                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul class="client_data">
                        <li>
                            <span class="email"></span>
                            <div class="client_detail">
                                <h4>EMAIL</h4>
                                <span><a href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul class="client_data">
                        <li>
                            <span class="location"></span>
                            <div class="client_detail">
                                <h4>АДРЕС</h4>
                                <span><? echo $ADDRESS ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?
}
