<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section id="price-table" class="price-table">
        <div class="container">
            <h2 class="box-header"><? echo $TXT['tariffs_title'] ?></h2>
            <div class="r-tbl">
                <? drawTariffsTable() ?>
            </div>
        </div>

    </section>
    <div class="row tariffs__restrictions">
        <? echo $TXT['tariffs_restrictions'] ?>
    </div>
<?
}
