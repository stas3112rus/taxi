<?
function drawDigitals()
{
    global $TXT, $LEVEL;
?>
    <section id="counter" class="jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(<? echo $LEVEL ?>assets/images/bg_home3.jpg);">
        <div class="bg_layer"></div>
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2 class="text-center"><? echo $TXT['digitals_title'] ?></h2>
                </div>
                <?
                drawDigitalItem("fa-plane", $TXT['digitals_section_count_1'], $TXT['digitals_section_desc_1']);
                drawDigitalItem("fa-taxi", $TXT['digitals_section_count_2'], $TXT['digitals_section_desc_2']);
                drawDigitalItem("fa-users", $TXT['digitals_section_count_3'], $TXT['digitals_section_desc_3']);
                drawDigitalItem("fa-shield", $TXT['digitals_section_count_4'], $TXT['digitals_section_desc_4']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawDigitalItem($img, $count, $description)
{
?>
    <div class="col-xs-6 col-sm-3 text-center">
        <span><i class="fa <? echo $img ?>" aria-hidden="true"></i></span>
        <div>
            <h3 class="counter"><? echo $count ?></h3>
        </div>
        <span class="inf-count"><? echo $description ?></span>
    </div>
<?
}
