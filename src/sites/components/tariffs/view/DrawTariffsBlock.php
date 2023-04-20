<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section id="price-table" class="price-table">
        <div class="container">
            <div class="title-black"><? echo $TXT['tariffs_title'] ?></div>
            <div class="line-orange"></div>
            <div class="subtitle-black space30"><? echo $TXT['tariffs_subtitle'] ?></div>
            <div class="r-tbl">
                <? drawTariffsTable() ?>
            </div>
        </div>
        <div style="text-align: center; margin: 25px 0;">
            <? echo $TXT['tariffs_restriction'] ?>
        </div>
        <div class="round btn btn-yellow btn-lg popup-modal" href="#order-time"><? echo $TXT['tariffs_button'] ?></div>
    </section>

<?
}
