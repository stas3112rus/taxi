<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section id="price-table" class="price-table">
        <div class="container">
            <h2 class="text-center"><?echo $TXT['tariffs_title']?></h2>
            <div class="lead text-center"><?echo $TXT['tariffs_subtitle']?></div>
            <div class="r-tbl">
                <? drawTariffsTable() ?>
            </div>
        </div>
        <div class="row">
            <br><br>
            <div style="margin: 22px 0; text-align: center;">
            <?echo $TXT['tariffs_restriction']?>
            </div>
            <br><br>
            <a href="#contact_form" class="btn popup-with-form"><?echo $TXT['tariffs_btn']?></a>
        </div>
    </section>
<?
}
