<?
function drawCarClasses()
{
    global $TXT;
?>
    <section id="class-taxi" class="page-section">
        <div class="container">
            <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">
                <span><? echo $TXT['car_classes_title'] ?></span>
            </h2>
            <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                <div class="swiper swiper--offers-best">
                    <div class="swiper-container">
                        <?
                        drawCarClassItem("car1.jpg", $TXT['car_class_economy_alt'], "ЭКОНОМ");
                        drawCarClassItem("car2.jpg", $TXT['car_class_comfort_alt'], "КОМФОРТ");
                        drawCarClassItem("car3.jpg", $TXT['car_class_business_alt'], "БИЗНЕС");
                        drawCarClassItem("car4.jpg", $TXT['car_class_minivan_alt'], "МИНИ-БУС");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawCarClassItem($img, $alt, $className)
{
    global $LEVEL;
?>
    <div class="col-md-3">
        <div class="thumbnail no-border no-padding thumbnail-car-card">
            <div class="media">
                <a class="media-link" data-gal="prettyPhoto" href="<? echo $LEVEL ?>assets\img\preview\cars\<? echo $img ?>">
                    <img src="<? echo $LEVEL ?>assets\img\preview\cars\<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                </a>
            </div>
            <div class="caption text-center">
                <h4 class="caption-title"><? echo $className ?></h4>
                <div class="buttons">
                    <a class="btn btn-theme ripple-effect" href="#" data-toggle="modal" data-target="#form-modal">Забронировать</a>
                </div>
            </div>
        </div>
    </div>
<?
}
