<?
function drawFooterBottom()
{
    global $TXT, $IS_SITEMAP, $LEVEL;
?>
    <section id="main_footer" class="jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(<? echo $LEVEL ?>assets/images/bg_footer.jpg);">
        <div class="bg_layer"></div>
        <div class="container">
            <div class="row mb-row">
                <div class="col-sm-12 col-xs-12">
                    <a href="#">
                        <h2 class="brand-logo mb30"><? echo mb_strtoupper($TXT['footer_title']) ?></h2>
                    </a>
                    <p class="mb30">
                        <?php echo $TXT['footer_text'] ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer_line text-center">
            <p><?php echo $TXT['footer_title_bottom'] ?></p>
            <p><a href="#" data-toggle="modal" data-target="#myModal2">Политика конфиденциальности и оферта</a></p>
            <? if ($IS_SITEMAP) { ?>
                <p><a href="sitemap.php">Карта сайта</a></p>
            <? } ?>
        </div>
    </section>
<?
}
