<?
function  drawContact()
{
    global $TXT, $DEFAULT, $CURRENT_SITE;
?>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="bottom-form">
                        <? drawBottomForm() ?>
                    </div>

                    <div class="msg2">Оператор свяжется с вами в ближайшее время!</div>
                </div>

                <div class="col-sm-5">
                    <div class="heading">
                        <h4><i class="fa fa-clock-o"></i> Работаем 24/7</h4>
                        <h2><a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a></h2>
                        <h2><a href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a></h2>
                    </div>
                    <img class="footer-car" src="<? echo $CURRENT_SITE ?>img/car-big.png" alt="<? echo $TXT["footer_alt"] ?>" title="<? echo $TXT["footer_alt"] ?>">
                </div>
            </div>
        </div>
    </section>
<?
}
