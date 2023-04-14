<?
function drawCarClasses()
{
    global $TXT, $LEVEL;
?>
    <section id="taxi-class" class="banner fix-background parallax rate" style="background-image:url(<? echo $LEVEL ?>images/section_bg.jpg)">
        <div class="rate__container container">
            <h2 class="box-header text-shadow"><? echo $TXT['car_classes_title'] ?></h2>
            <div class="rate__scene">
                <?
                drawCarClassContentBlock(5, "econom.png", "Эконом", $TXT['car_classes_economy_cars'], $TXT['car_classes_economy_alt'], true, true, false);
                drawCarClassContentBlock(4, "comfort.png", "Комфорт", $TXT['car_classes_comfort_cars'], $TXT['car_classes_comfort_alt'], true);
                drawCarClassContentBlock(3, "busines.png", "Бизнес", $TXT['car_classes_business_cars'], $TXT['car_classes_business_alt']);
                drawCarClassContentBlock(2, "minibus.png", "Микроавтобус", $TXT['car_classes_minivan_cars'], $TXT['car_classes_minivan_alt']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawCarClassContentBlock($item, $img, $carClass, $cars, $alt, $reverse = false, $active = false,  $line = true)
{
    global $LEVEL;
?>
    <div class="rate__item rate__item<? echo $item ?> <? echo $active ? "active" : "" ?>">
        <div class="rate__item-name  <? echo $reverse ? "reverse" : "" ?>  ">
            <? echo $carClass ?>
            <span><? echo $cars ?></span>
            <i>
                <? if ($line) { ?>
                    <span></span>
                <? } ?>
            </i>
        </div>
        <div class="rate__inner <? echo $active ? "active" : "" ?>">
            <div class="rate__item-flag"></div>
            <div class="rate__inner-name"><? echo $carClass ?></div>
            <div class="rate__inner-text"><? echo $cars ?></div>
            <div class="rate__inner-img">
                <img src="<? echo $LEVEL ?>images/<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
            </div>
        </div>
    </div>
<?
}
