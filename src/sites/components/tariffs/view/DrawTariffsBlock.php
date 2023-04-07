<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section id="price-table" class="price-table">
        <div class="container">
            <div class="title-black"><?echo $TXT['tariff_title']?></div>
            <div class="line-orange"></div>
            <div class="subtitle-black space30"><?echo $TXT['tariff_subtitle']?></div>
            <div class="r-tbl">
                <? drawTariffsTable() ?>
            </div>
        </div>
        <br><br>
        <div style="text-align: center;">
            <b><?echo $TXT['tariff_restrictions']?></b>
        </div>
    </section>

<?
}
