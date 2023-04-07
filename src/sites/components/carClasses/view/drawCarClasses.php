<?
function drawCarClasses()
{
    global $TXT;
?>
    <section class="taxi-class text-center gray_bg" id="taxi-class">
        <div class="container">
            <div class="title-black"><? echo $TXT['car_class_title'] ?></div>
            <div class="line-orange"></div>
            <div class="subtitle-black space30"><? echo $TXT['car_class_subtitle'] ?></div>
            <?
            drawCarClass("econom.png", $TXT['car_class_economy_alt'], "Эконом", "3 персоны", "2 чемодана");
            drawCarClass("comfort.png", $TXT['car_class_comfort_alt'], "Комфорт", "4 персоны", "3 чемодана");
            drawCarClass("elit.png", $TXT['car_class_business_alt'], "Бизнес", "4 персоны", "3 чемодана");
            drawCarClass("minibus.png", $TXT['car_class_minivan_alt'], "Мини-Бус", "8 персон", "5 чемоданов");
            ?>
            <div class="clear"></div>
        </div>
    </section>
<?
}

function drawCarClass($img, $alt, $title, $persons, $suitcases)
{
    global $LEVEL;
?>
    <div class="col-4">
        <img src="<? echo $LEVEL ?>img/<? echo $img ?>" title="<? echo $alt ?>" alt="" <? echo $alt ?>">
        <div class="taxi-title">"<? echo $title ?></div>
        <div class="taxi-icon text-center">
            <i class="fa fa-user" aria-hidden="true"></i> <? echo $persons ?> /
            <i class="fa fa-suitcase" aria-hidden="true"></i><? echo $suitcases ?>
        </div>
    </div>
<?
}
