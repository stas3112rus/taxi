<?
function drawTariffsBlock()
{
    global $TXT;
?>
    <section class="tarifs" id="tarifs">
        <div class="container">
            <? drawTariffH2($TXT["car_h2"]) ?>
            <? drawCars() ?>
            <? drawTariffH2($TXT["tarifs_h2"]) ?>
            <? drawTariffsTable() ?>
            <p>
                <? echo $TXT["tarifs_txt"]
                ?>
            </p>
        </div>
    </section>
<?
}

function drawTariffH2($title)
{
?>
    <div class="heading">
        <h2><? echo $title ?></h2>
    </div>
<?
}
