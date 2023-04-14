<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section id="price-table" class="price-table">
        <div class="container">
            <h3 class="title-black">
                <? echo $TXT['tariffs_title'] ?>
            </h3>
            <div class="line-orange"></div>
            <div class="subtitle-black space30">
                <? echo $TXT['tariffs_subtitle'] ?>
            </div>
            <div class="r-tbl">
                <? drawTariffsTable() ?>
            </div>
        </div>
        <div class="tariffs__restriction">
            <? echo $TXT['tariffs_text_restriction'] ?>
        </div>
    </section>
<?
}
