<?
function drawContacts()
{
    global $TXT, $ADDRESS, $DEFAULT, $LEVEL;
?>
    <section id="contact" class="page-section contact dark">
        <div class="container">
            <div class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                <small><? echo $TXT['contacts_subtitle'] ?></small>
                <span><? echo $TXT['contacts_title'] ?></span>
            </div>

            <div class="row">
                <div class="col-md-7 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                    <? drawContactForm() ?>
                </div>
                <div class="col-md-5 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                    <ul class="media-list contact-list">
                        <li class="media">
                            <div class="media-left"><i class="fa fa-home"></i></div>
                            <div class="media-body">Адрес: <? echo $ADDRESS ?></div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-phone"></i></div>
                            <div class="media-body">Телефон:
                                <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                                    <img src="<? echo $LEVEL ?>assets\img\whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="24" height="24">
                                </a>
                                <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                                    <img src="<? echo $LEVEL ?>assets\img\telegram.svg" alt="telegram <? echo getFullPhone() ?>" title="telegram <? echo getFullPhone() ?>" width="24" height="24">
                                </a>
                                <? echo getFullPhone() ?>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-envelope"></i></div>
                            <div class="media-body">E-mail: <? echo $DEFAULT['email_for_site'] ?></div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-clock-o"></i></div>
                            <div class="media-body">Рабочее время: <? echo $DEFAULT['work_time'] ?></div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
<?
}
