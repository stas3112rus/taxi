<?
function drawMainBlock()
{
?>
    <section class="banner fix-background parallax" style="background-image:url(img/section__bg.jpg)">
        <div class="opacity-dark bg-black"></div>
        <div class="section">
            <div class="col-md-8 col-sm-12">
                <div class="banner-text menuMenu scroll">
                    <h1><?php echo $h1 ?></h1>
                    <p class="text-shadow">
                        ГАРАНТИРОВАННО В ТОЧНОЕ ВРЕМЯ - ПРИЕДЕМ В ЛЮБУЮ ТОЧКУ <?php echo $city_rod_zaglav ?> И ВСТРЕТИМ В АЭРОПОРТУ
                    </p>
                    <a href="#class-taxi">
                        <button class="wbutton-bordered white">УЗНАТЬ СТОИМОСТЬ</button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-search">
                    <h6>ЗАБРОНИРОВАТЬ ТАКСИ В <?php echo $city_vin_zaglav ?> СЕЙЧАС</h6>
                    <hr class="form-line">
                    <div class="signup-box-body">
                        <? drawTopForm() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
