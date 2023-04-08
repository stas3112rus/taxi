<?php
function drawCarClasses()
{
    global $TXT;
?>
    <section class="car-area section-padding" id="car">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carspace-header text-center">
                        <h3><? echo $TXT['car_class_title'] ?></h3>
                        <p><? echo $TXT['car_class_subtitle'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?
                drawCarClass("assets\img\car-1.png", $TXT['car_class_economy_alt'], "ЭКОНОМ");
                drawCarClass("assets\img\car-2.png", $TXT['car_class_comfort_alt'], "КОМФОРТ");
                drawCarClass("assets\img\car-3.png", $TXT['car_class_business_alt'], "БИЗНЕС");
                drawCarClass("assets\img\car-4.png", $TXT['car_class_minivan_alt'], "МИНИ-БУС");
                ?>
            </div>
        </div>
    </section>
<?
}


function drawCarClass($url_img, $alt, $className)
{
    global $LEVEL;
?>
    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="thumbnail no-border no-padding thumbnail-car-card">
            <div class="media">
                <img src="<? echo $LEVEL . $url_img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
            </div>
            <div class="caption text-center">
                <h4 class="caption-title"><? echo $className ?></h4>
                <div class="buttons">
                    <a class="btn btn-theme ripple-effect open-popup" href="#form-popup">Забронировать</a>
                </div>
            </div>
        </div>
    </div>
<?
}
