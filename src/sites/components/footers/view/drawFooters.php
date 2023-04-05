<?
function drawTopFooter()
{
    global $TXT, $DEFAULT, $ADDRESS;
?>
    <section class="widget-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 w-bottom">
                    <div class="footer-about">
                        <h4><? echo $TXT['footer_top_title'] ?></h4>
                        <?php echo $TXT['footer_top_text'] ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 w-bottom">
                    <div class="f-widget-title">
                        <h4>Контакты</h4>
                    </div>
                    <div class="contact-info">
                        <ul>
                            <li class="clearfix">
                                <span class="span-1">Адрес:</span>
                                <span class="span-2"><?php echo $ADDRESS ?></span>
                            </li>
                            <li class="clearfix">
                                <span class="span-1">Телефон:</span>
                                <span class="span-2"><? echo getFullPhone() ?></span>
                            </li>
                            <li class="clearfix">
                                <span class="span-1">Телефон:</span>
                                <span class="span-2"><? echo getFullPhone($DEFAULT['phone_2']) ?></span>
                            </li>
                            <li class="clearfix">
                                <span class="span-1">Email:</span>
                                <span class="span-2"><? echo $DEFAULT['email_for_site'] ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 w-bottom">
                    <?php echo $DEFAULT['VK_Widget'] ?>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawBottomFooter()
{
    global $TXT, $IS_SITEMAP;
?>
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text text-center">
                        <p><? echo $TXT['footer_bottom_title'] ?></p>
                        <p><a href="#offert" class="open-popup">Политика конфиденциальности, оферта.</a></p>

                        <? if ($IS_SITEMAP) { ?>
                            <p><a href="sitemap.php" class="open-popup">Карта сайта</a></p>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?
}
