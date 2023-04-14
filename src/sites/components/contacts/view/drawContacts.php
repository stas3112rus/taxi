<?
function drawContacts()
{
    global $ADDRESS, $DEFAULT;
?>
    <section class="contact contact-style-2 gray_bg eBlock text-center" id="contact">
        <div class="container">
            <div class="col-3">
                <i class="fa fa-map-o car_repair_i" aria-hidden="true"></i>

                <div class="contact-title">
                    Наш адрес
                </div>
                <div class="contact-desc">
                    <? echo $ADDRESS ?>
                </div>
            </div>
            <div class="col-3 ">
                <i class="fa fa-mobile car_repair_i" aria-hidden="true"></i>

                <div class="contact-title">
                    Наши телефон
                </div>
                <div class="contact-desc">
                    <a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a>
                </div>
            </div>
            <div class="col-3">
                <i class="fa fa-envelope-open-o car_repair_i" aria-hidden="true"></i>
                <div class="contact-title">
                    E-mail
                </div>
                <div class="contact-desc">
                    <a class="__cf_email__" href="mailto:<? echo $DEFAULT['email_for_site'] ?>">
                        <? echo $DEFAULT['email_for_site'] ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <a href="#order-time" class="popup-modal btn">Забронировать сейчас</a>
        </div>
        <div class="clear"></div>
    </section>
<?
}
