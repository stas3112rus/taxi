<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <div class="container-fluid " id="drugie_napravleniya">
        <div class="container third_scr">
            <div class="row">
                <div class="col-md-12 text-left six_scr_h3" style="text-align: center;">
                    <h3><?echo $TXT['tariff_title']?></h3>
                </div>
            </div>
            <div class="marg_top_40"></div>
            <div class="row">
                <div class="col-md-12 table-responsive no_pad_r">
                    <? drawTariffsTable() ?>
                </div>
            </div>
            <div class="marg_top_40"></div>
            <div class="row ">
                <div class="col-md-8"></div>
                <div class="col-md-2 text-right center_sm no_pad_r">
                    <label class="btn btn-default vse_but">
                        <input type="checkbox" data-toggle="collapse" data-target="#hide-me" onclick="return CompareProduct( this,3);" autocomplete="off" />
                        Посмотреть все
                    </label>
                </div>
                <div class="col-md-2 text-right center_sm no_pad_r">
                    <button type="button" class="btn btn-warning zakaz_but" onclick="location.href='#zakazat_taxi'">
                        Заказать такси
                    </button>
                </div>
            </div>
            <div style="padding-top: 50px; text-align:center;">
                <span style="font-size: 140%; "><?echo $TXT['tariff_restriction']?></span>
            </div>
        </div>
    </div>

<?
}
