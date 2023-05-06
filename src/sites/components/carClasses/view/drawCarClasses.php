<?
function drawCarClasses()
{
    global $TXT;
?>
    <section class="taxi-class text-center gray_bg" id="taxi-class">
        <div class="container">
            <h2><? echo $TXT['car_class_title'] ?></h2>
            <div class="lead"><? echo $TXT['car_class_subtitle'] ?></div>
            <?
            drawCarClassItem(300, $TXT['car_class_economy_alt'], "econom.png",  "Эконом", "3 персоны", "2 чемодана");
            drawCarClassItem(600, $TXT['car_class_comfort_alt'], "comfort.png",  "Комфорт", "4 персоны", "3 чемодана");
            drawCarClassItem(900, $TXT['car_class_business_alt'], "elit.png",  "Бизнес", "4 персоны", "3 чемодана");
            drawCarClassItem(1200, $TXT['car_class_minivan_alt'], "minibus.png",  "Мини-Бус", "8 персон", "5 чемоданов");
            ?>
            <div class="clear"></div>
        </div>
    </section>
<?
}

function drawCarClassItem($duration, $alt, $img, $title, $person, $suitcase)
{
    global $LEVEL;
?>
    <div class="col-4 wow fadeInUp" data-wow-delay="<? echo $duration ?>ms" data-wow-duration="1500ms"">
            <img src=" <? echo $LEVEL ?>img/<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
        <div class="taxi-title"><? echo $title ?></div>
        <div class="taxi-icon text-center">
            <i class="fa fa-user" aria-hidden="true"></i> <? echo $person ?> /
            <i class="fa fa-suitcase" aria-hidden="true"></i> <? echo $suitcase ?>
        </div>
    </div>
<?
}
