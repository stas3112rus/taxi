<?
function drawAbout()
{
    global $TXT, $CURRENT_SITE;
?>
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2><? echo $TXT["about_h2"] ?></h2>
                </div>
                <div class="col-md-7">
                    <div class="col-md-6">
                        <div class="what-we-do-box">
                            <i class="fa fa-shield"></i>
                            <? echo $TXT["about_1"] ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="what-we-do-box">
                            <i class="fa fa-credit-card"></i>
                            <? echo $TXT["about_2"] ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="what-we-do-box">
                            <i class="fa fa-clock-o"></i>
                            <? echo $TXT["about_3"] ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="what-we-do-box">
                            <i class="fa fa-thumbs-o-up"></i>
                            <? echo $TXT["about_4"] ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <!--<img src="img/car-big-side.png" class="full-width slideleft" alt="animation">-->
                    <div class="counter-app">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="statistics-box">
                                <i class="statistics-icon"><img src="<? echo $CURRENT_SITE ?>img/car.png" alt="<? echo $TXT["about_alt1"] ?>" title="<? echo $TXT["about_alt1"] ?>"></i>
                                <span id="statistics_count-1" data-statistics_percent="<? echo $TXT["about_cars"] ?>"><? echo $TXT["about_cars"] ?></span>
                                <h3><span>Рабочих машин</span></h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="statistics-box">
                                <i class="statistics-icon"><img src="<? echo $CURRENT_SITE ?>img/thumb-up.png" alt="<? echo $TXT["about_alt2"] ?>" title="<? echo $TXT["about_alt2"] ?>"></i>
                                <span id="statistics_count-2" data-statistics_percent="<? echo $TXT["about_drivers"] ?>"><? echo $TXT["about_drivers"] ?></span>
                                <h3><span>Довольных клиентов</span></h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="statistics-box">
                                <i class="statistics-icon"><img src="<? echo $CURRENT_SITE ?>img/driver.png" alt="<? echo $TXT["about_alt3"] ?>" title="<? echo $TXT["about_alt3"] ?>"></i>
                                <span id="statistics_count-3" data-statistics_percent="<? echo $TXT["about_clients"] ?>"><? echo $TXT["about_clients"] ?></span>
                                <h3><span>Опытных водителей</span></h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="statistics-box">
                                <i class="statistics-icon"><img src="<? echo $CURRENT_SITE ?>img/milestone.png" alt="<? echo $TXT["about_alt4"] ?>" title="<? echo $TXT["about_alt4"] ?>"></i>
                                <span id="statistics_count-4" data-statistics_percent="<? echo $TXT["about_km"] ?>"><? echo $TXT["about_km"] ?></span>
                                <h3><span>Пройденных километров</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
