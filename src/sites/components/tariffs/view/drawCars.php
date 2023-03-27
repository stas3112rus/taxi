<?
function drawCars()
{
    global $TXT, $CURRENT_SITE;


?>

   

    <div class="owl-carousel owl-theme" id="slider">
        <div class="col-md-3 ">
            <div class="image">
                <img src="<? echo $CURRENT_SITE ?>img/tariff-1.png" class="full-width" alt="<? echo $TXT["car_standard_alt"] ?>" title="<? echo $TXT["car_standard_alt"] ?>">
            </div>
            <div class="services-box">
                <h3>Стандарт</h3>
                <ul>
                    <? echo $TXT["car_standard"] ?>
                </ul>
                <div class="price">
                    <? echo $TXT["car_standard_desc"] ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 vip">
            <div class="image">
                <img src="<? echo $CURRENT_SITE ?>img/tariff-2.png" class="full-width" alt="<? echo $TXT["car_komfort_alt"] ?>" title="<? echo $TXT["car_komfort_alt"] ?>">
            </div>
            <div class="services-box">
                <h3>Комфорт</h3>
                <ul>
                    <? echo $TXT["car_komfort"] ?>
                </ul>
                <div class="price"><? echo $TXT["car_komfort_desc"] ?></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="image">
                <img src="<? echo $CURRENT_SITE ?>img/tariff-4.png" class="full-width" alt="<? echo $TXT["car_miniven_alt"] ?>" title="<? echo $TXT["car_miniven_alt"] ?>">
            </div>
            <div class="services-box">
                <h3>Минивен</h3>
                <ul>
                    <? echo $TXT["car_miniven"] ?>
                </ul>
                <div class="price"><? echo $TXT["car_miniven_desc"] ?></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="image">
                <img src="<? echo $CURRENT_SITE ?>img/tariff-5.png" class="full-width" alt="<? echo $TXT["car_buzines_alt"] ?>" title="<? echo $TXT["car_buzines_alt"] ?>">
            </div>
            <div class="services-box">
                <h3>Бизнес</h3>
                <ul>
                    <? echo $TXT["car_buzines"] ?>
                </ul>
                <div class="price"><? echo $TXT["car_buzines_desc"] ?></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="image">
                <img src="<? echo $CURRENT_SITE ?>img/tariff-3.png" class="full-width" alt="<? echo $TXT["car_standard_alt"] ?>" title="<? echo $TXT["car_standard_alt"] ?>">
            </div>
            <div class="services-box">
                <h3>Вип</h3>
                <ul>
                    <? echo $TXT["car_vip"] ?>
                </ul>
                <div class="price"><? echo $TXT["car_vip_desc"] ?></div>
            </div>
        </div>
    </div>
<?
}
