<?
function drawCarClasses()
{
    global $TXT, $LEVEL;
?>
    <div class="container seven_scr_top" id="avtopark">
        <div class="row">
            <div class="col-md-12 text-left six_scr_h3">
                <h3><? echo $TXT['car_classes_title'] ?></h3>
            </div>
        </div>
    </div>
    <div class="container-fluid seven_scr_back">
        <div class="container seven_scr">
            <div class="row">
                <div class="col-md-4 text-center ">
                    <div class=" text-center black_bullet bullet1">
                        <h2>КЛАСС СТАНДАРТ</h2>
                    </div>
                    <img class="cars_img" src="<? echo $LEVEL ?>images/car1.png" alt="<? echo $TXT['car_classes_economy_alt'] ?>" title="<? echo $TXT['car_classes_economy_alt'] ?>">
                </div>
                <div class="col-md-4 text-center ">
                    <div class=" text-center black_bullet bullet2">
                        <h2>КЛАСС КОМФОРТ</h2>
                    </div>
                    <img class="cars_img" src="<? echo $LEVEL ?>images/car2.png" alt="<? echo $TXT['car_classes_comfort_alt'] ?>" title="<? echo $TXT['car_classes_comfort_alt'] ?>">
                </div>
                <div class="col-md-4 text-center ">
                    <div class=" text-center black_bullet bullet3">
                        <h2>КЛАСС БИЗНЕС</h2>
                    </div>
                    <img class="cars_img" src="<? echo $LEVEL ?>images/car3.png" alt="<? echo $TXT['car_classes_business_alt'] ?>" title="<? echo $TXT['car_classes_business_alt'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center "></div>
                <div class="col-md-4 text-center "></div>
                <div class="col-md-4 text-center ">
                    <div class=" text-center black_bullet black_bullet_4 bullet4">
                        <h2>МИНИВЕН</h2>
                    </div>
                    <img class="cars_img" src="<? echo $LEVEL ?>images/car4.png" alt="<? echo $TXT['car_classes_minivan_alt'] ?>" title="<? echo $TXT['car_classes_minivan_alt'] ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="container seven_scr_bot">
        <div class="row">
            <div class="row">
                <div class="col-md-12 text-center"><button type="button" class="btn btn-warning zakaz_but" onclick="location.href='#zakazat_taxi'">
                        <? echo $TXT['car_classes_button'] ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?
}
