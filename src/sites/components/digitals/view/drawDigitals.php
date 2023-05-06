<?
function drawDigitals()
{
    global $TXT;
?>
    <section id="counter_1" class="no-p-t no-p-b">
        <div class="overlay p-t-100 p-b-100">
            <div class="container">
                <div class="row text-center">
                    <?
                    drawDigitalItem($TXT['digital_count_1'], $TXT['digital_description_1']);
                    drawDigitalItem($TXT['digital_count_2'], $TXT['digital_description_2']);
                    drawDigitalItem($TXT['digital_count_3'], $TXT['digital_description_3']);
                    drawDigitalItem($TXT['digital_count_4'], $TXT['digital_description_4']);
                    ?>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawDigitalItem($digital, $description)
{
?>
    <div class="col-sm-3">
        <div class="count"><? $digital ?></div>
        <div class="title"><? echo $description ?></div>
    </div>
<?
}
