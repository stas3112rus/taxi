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
        <div class="row">
            <? echo $TXT['tariffs_restrictions'] ?>
        </div>
    </section>
<?
}
