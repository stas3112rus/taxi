<?
function drawCarClasses()
{
    global $TXT;
?>
    <section id="tariffs">
        <div class="container">
            <h4 class="yellow"><? echo $TXT['car_class_subtitle'] ?></h4>
            <h2 class="h1"><? echo $TXT['car_class_title'] ?></h2>
            <div class="row">
                <?
                drawCarClassItem("_tariff-1.jpg", $TXT['car_class_economy_alt'], $TXT['car_class_economy_title']);
                drawCarClassItem("_tariff-0.jpg", $TXT['car_class_comfort_alt'], $TXT['car_class_comfort_title']);
                drawCarClassItem("_tariff-2.jpg", $TXT['car_class_business_alt'], $TXT['car_class_business_title'], true);
                drawCarClassItem("_tariff-4.jpg", $TXT['car_class_minivan_alt'], $TXT['car_class_minivan_title']);
                ?>
            </div>
            <div class="row">
                <div class="round btn btn-yellow btn-lg popup-modal" href="#order-time"><? echo $TXT['car_class_button'] ?></div>
            </div>
        </div>
    </section>
<?
}

function drawCarClassItem($img, $alt, $title, $select = false)
{
    global $LEVEL;
?>
    <div class="col-md-3 col-sm-6">
        <div class="item matchHeight
        <? if ($select) {
            echo " vip";
        } ?>">
            <div class="image">
                <img src="<? echo $LEVEL ?>assets\images\<? echo $img ?>" class="full-width" title="<? echo $alt ?>" alt="<? echo $alt ?>">
            </div>
            <h4 class="red"><? echo $title ?></h4>
        </div>
    </div>
<?
}
