<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section id="price-table" class="price-table">
        <div class="container">
            <h2 class="title-black"><? echo $TXT['tariffs_title'] ?></h2>
            <div class="line-orange"></div>
            <div class="subtitle-black space30"><? echo $TXT['tariffs_subtitle'] ?></div>
            <div class="r-tbl">
                <?
                drawTariffsTable();
                ?>
            </div>
        </div>
        <div style="text-align: center; margin: 30px 0;">
            <? echo $TXT['tariffs_restrictions'] ?>
        </div>
    </section>
<?
}
