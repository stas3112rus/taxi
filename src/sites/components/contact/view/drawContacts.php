<?
function drawContacts()
{
    global $ADDRESS, $DEFAULT;

?>
    <div class="main cars-bg" id="cont">
        <div class="contact-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-information">
                        <h2>Остались вопросы?</h2>
                        <p>Задайте их в форме и мы обязательно ответим!</p>
                        <div class="contact-fa">
                            <p style="display:flex; justify-content: left; gap: 15px; align-items: center;"><i class="fa fa-map-marker" aria-hidden="true"></i><? echo $ADDRESS ?></p>
                            <p style="display:flex; justify-content: left; gap: 15px; align-items: center;">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:<? echo  $DEFAULT['phone'] ?>">
                                    <? echo getFullPhone() ?>
                                </a>
                            </p>
                            <p style="display:flex; justify-content: left; gap: 15px; align-items: center;">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:<? echo  $DEFAULT['email_for_site'] ?>">
                                    <? echo  $DEFAULT['email_for_site'] ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <? drawContactForm() ?>
                </div>
            </div>
        </div>
    </div>
<?
}
