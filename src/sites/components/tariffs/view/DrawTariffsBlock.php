<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section id="price-table" class="price-table">
        <div class="container">
            <div class="row">
                <div class="title">
                    <div class="col-sm-12">
                        <h5 class="text-center">
                            <? echo $TXT['tariffs_title'] ?>
                        </h5>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>
                            <? echo $TXT['tariffs_subtitle'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="r-tbl">
                <? drawTariffsTable() ?>
            </div>
        </div>
    </section>
    <div style="text-align: center; margin:30px 0;">
        <p>
            <? echo $TXT['tariffs_restriction'] ?>
        </p>
    </div>

<?
}
