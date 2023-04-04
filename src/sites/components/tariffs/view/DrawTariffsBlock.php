<?
function drawTariffsBlock()
{
    global $TXT, $DEFAULT;
?>
    <div class="main section-table" id="tariff">
        <div class="section">
            <div class="section-title">
                <h3><? echo mb_strtoupper($TXT['tariff_title']) ?></h3>
            </div>

            <div class="r-tbl">
                <? drawTariffsTable() ?>
            </div>
        </div>
    </div>
    <div style="text-align:center;">
        <? echo $DEFAULT['discount_limit'] ?>
    </div>

<?
}
