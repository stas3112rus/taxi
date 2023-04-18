<?
function drawCarClasses()
{
    global $TXT;
?>
    <section class="taxi-class text-center" id="taxi-class">
        <div class="container">
            <div class="row">
                <div class="title">
                    <div class="col-sm-12">
                        <h5 class="text-center"><? echo $TXT['car_class_title'] ?></h5>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p><? echo $TXT['car_class_subtitle'] ?></p>
                    </div>
                </div>
                <?
                drawCarClassItem("econom.png", $TXT['car_economy_alt'], "Эконом", "3 персоны", "3 чемодана");
                drawCarClassItem("comfort.png", $TXT['car_comfort_alt'], "Комфорт", "4 персоны", "3 чемодана");
                drawCarClassItem("elit.png", $TXT['car_business_alt'], "Бизнес", "4 персоны", "5 чемоданов");
                drawCarClassItem("minibus.png", $TXT['car_minivan_alt'], "Мини-Бус", "8 персон", "2 чемодана");
                ?>
            </div>

            <div class="row"></div>
            <div class="clear"></div>
        </div>
    </section>
<?
}

function drawCarClassItem($img, $alt, $class, $persons, $suitcases)
{
    global $LEVEL;
?>
    <div class="col-4">
        <img src="<? echo $LEVEL ?>assets/images/<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
        <div class="taxi-title"><? echo $class ?></div>
        <div class="taxi-icon text-center">
            <i class="fa fa-user" aria-hidden="true"></i> <? echo $persons ?> /
            <i class="fa fa-suitcase" aria-hidden="true"></i> <? echo $suitcases ?>
        </div>

    </div>
<?
}
