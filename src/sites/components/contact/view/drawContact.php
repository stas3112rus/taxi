<?
function drawContact()
{
    global $TXT;
?>
    <section class="contact section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carspace-header text-center">
                        <div class="title"><? echo $TXT['contact_title'] ?></div>
                        <p><? echo $TXT['contact_title'] ?></p>
                    </div>
                    <div class="contact-bg">
                        <? drawContactForm() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
