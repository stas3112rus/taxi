<?
function drawContacts()
{
    global $TXT;
?>
    <section id="contactus">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h5 class="text-center"><? echo $TXT['contacts_title'] ?></h5>
                    <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
                        <p><? echo $TXT['contacts_subtitle'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <? drawContactForm() ?>
                </div>
            </div>
        </div>
    </section>
<?
}
