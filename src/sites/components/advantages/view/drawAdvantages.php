<?
function drawAdvantages()
{
    global $TXT;
?>
    <section id="services">
        <div class="container">
            <h4 class="yellow"><? echo $TXT['advantage_subtitle'] ?></h4>
            <h2 class="h1"><? echo $TXT['advantage_title'] ?></h2>
            <div class="row">
                <?
                drawAdvantageItem("route.svg", $TXT['advantage_alt_1'], $TXT['advantage_title_1'], $TXT['advantage_desc_1']);
                drawAdvantageItem("delivery-man.svg", $TXT['advantage_alt_2'], $TXT['advantage_title_2'], $TXT['advantage_desc_2']);
                drawAdvantageItem("hotel-building.svg", $TXT['advantage_alt_3'], $TXT['advantage_title_3'], $TXT['advantage_desc_3']);
                drawAdvantageItem("guest.svg", $TXT['advantage_alt_4'], $TXT['advantage_title_4'], $TXT['advantage_desc_4']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawAdvantageItem($img, $alt, $title, $description)
{
    global $LEVEL;
?>
    <div class="col-md-3 col-sm-6 col-ms-6 matchHeight">
        <div class="image"><img src="<? echo $LEVEL ?>assets\images\<? echo $img ?>" alt="<? echo $alt ?>"></div>
        <h5><? echo $title ?></h5>
        <p><? echo $description ?></p>
    </div>
<?
}
