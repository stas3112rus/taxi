<?
function drawServices()
{
    global $TXT;
?>
    <section class="advantages content-section6" id="learn-mone">
        <div class="container">
            <div class="title-black">
                <? echo $TXT['service_title'] ?>
            </div>
            <div class="line-orange"></div>
            <?
            drawServiceBlock("fa-history", $TXT['service_title_1'], $TXT['service_text_1']);
            drawServiceBlock("fa-thumbs-up", $TXT['service_title_2'], $TXT['service_text_2']);
            drawServiceBlock("fa-gift", $TXT['service_title_3'], $TXT['service_text_3']);
            drawServiceBlock("", $TXT['service_title_4'], $TXT['service_text_4'], true);
            drawServiceBlock("fa-shield", $TXT['service_title_5'], $TXT['service_text_5']);
            drawServiceBlock("fa-clock-o", $TXT['service_title_6'], $TXT['service_text_6']);
            ?>
        </div>
        <div class="clear"></div>
    </section>
<?
}

function drawServiceBlock($icon, $title, $text, $imgArmChair = false)
{
    global $LEVEL;
?>
    <div class="col-3 text-center  gray_bg">
        <i class="fa <? echo $icon ?> car_repair_i" aria-hidden="true">
            <? if ($imgArmChair) { ?>
                <img src="<? echo $LEVEL ?>img/flight_seat-512.png" title="Детское Кресло" alt="Детское кресло" style="margin-top: 5px">
            <? } ?>
        </i>

        <div class="icon-title"><? echo $title ?></div>
        <div class="icon-subtitle">
            <? echo $text ?>
        </div>
    </div>
<?
}
