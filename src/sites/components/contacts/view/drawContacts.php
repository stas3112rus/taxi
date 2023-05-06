<?
function drawContacts()
{
    global $TXT, $ADDRESS, $IS_SITEMAP, $DEFAULT;
?>
    <section id="contact_1">
        <div class="container">
            <div class="row m-b-40">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <h3><? echo $TXT['contacts_title_1'] ?></h3>
                    <p class="lead">
                        <? echo $TXT['contacts_subtitle_1'] ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 left-content wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 1500ms; animation-name: fadeInLeft;">
                    <?
                    drawContactForm();
                    ?>
                </div>
                <div class="col-md-6 col-sm-12 text wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 1500ms; animation-name: fadeInRight;">
                    <h4>
                        <? echo $TXT['contacts_title_2'] ?>
                    </h4>
                    <p class="m-b-40">
                        <? echo $TXT['contacts_subtitle_2'] ?>
                    </p>
                    <h5><span class="ti-location-pin"></span> <?php echo $ADDRESS ?></h5>
                    <h5><span class="ti-mobile"></span> <a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a></h5>
                    <h5><span class="ti-email"></span> <a href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a></h5>
                    <h5><span class="ti-time"></span><? echo $DEFAULT['work_time'] ?></h5>
                </div>
                <div class="col-md-12">
                    <span class="popup-with-form text-center" href="#polit_conf"><a>Политика конфиденциальности, оферта.</a></span>
                    <?
                    if ($IS_SITEMAP) {
                    ?>
                        <br><a href="sitemap.php">Карта сайта</a>
                    <?
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?
}
