<?
function drawFooter()
{
    global $YEAR, $CITY_FROM, $IS_SITEMAP;

?>
    <footer>
        <div class="footer-base">
            <div class="container">
                <div class="col-md-12">
                    Такси 24 © <? echo $YEAR ?> | <? echo $CITY_FROM['im'] ?>
                    <a href="" class="politic">
                        Политика конфиденциальности, оферта
                    </a>
                    <br>
                    <?
                    if ($IS_SITEMAP) {
                        echo '<a href="sitemap.php">Карта сайта</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </footer>
<?
}
