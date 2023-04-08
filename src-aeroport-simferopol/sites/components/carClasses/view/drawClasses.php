<?
function drawCarClasses()
{
    global $CURRENT_SITE, $TXT;
?>
    <div class="main class-taxi" id="class-taxi">
        <div class="section">
            <div class="section-title">
                <h3><?echo $TXT['cars_classes_title']?></h3>
                <hr class="short">
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="home-models">
                        <img src="<? echo $CURRENT_SITE ?>img/images/autos/models/1.jpg" title="<? echo $TXT['cars_classes_alt_economy']?>" alt="<? echo $TXT['cars_classes_alt_economy']?>">
                        <div class="caption">
                            <h6>ЭКОНОМ</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="home-models">
                        <img src="<? echo $CURRENT_SITE ?>img/images/autos/models/2.jpg" title="<? echo $TXT['cars_classes_alt_comfort']?>" alt="<? echo $TXT['cars_classes_alt_comfort']?>">
                        <div class="caption">
                            <h6>КОМФОРТ</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="home-models">
                        <img src="<? echo $CURRENT_SITE ?>img/images/autos/models/3.jpg" title="<? echo $TXT['cars_classes_alt_business']?>" alt="<? echo $TXT['cars_classes_alt_business']?>">
                        <div class="caption">
                            <h6>БИЗНЕС</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="home-models">
                        <img src="<? echo $CURRENT_SITE ?>img/images/autos/models/4.jpg" title="<? echo $TXT['cars_classes_alt_minivan']?>" alt="<? echo $TXT['cars_classes_alt_minivan']?>">
                        <div class="caption">
                            <h6>МИНИ-БУС</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <button href="#contact_form" class="wbutton popup-with-form order-taxi">ЗАБРОНИРОВАТЬ</button>

            </div>
        </div>
    </div>
<?
}
