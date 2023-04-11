<?
function drawNavBar()
{
    global $TXT, $LEVEL;
?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-brand show_mob">МЕНЮ</div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="text-uppercase"><a href="#o-nas">О нас</a></li>
                    <li class="text-uppercase"><a href="#zakazat_taxi">Наши цены</a></li>
                    <li class="text-uppercase"><a href="#preimuschestva">Преимущества</a></li>
                    <li class="text-uppercase"><a href="#avtopark">Автопарк</a></li>
                    <li class="text-uppercase"><a href="#shema-raboti">Схема работы</a></li>
                    <li class="text-uppercase"><a href="#otzivi">Отзывы</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container top_header">
        <div class="row top_header_row">
            <div class="col-md-4 text-left hide_mob">
                <img src='<?echo $LEVEL?>images/dots.png'  alt="<?echo $TXT['logo_alt']?>" tilt="<?echo $TXT['logo_alt']?>">
            </div>
            <div class="col-md-3 text-center hide_mob">
                <p>Служба заказа такси</p>
            </div>
            <div class="col-md-3 text-right col-sm-12 center_mob">
                <img class="tel_img" src='<?echo $LEVEL?>images/tel.png' alt="<?echo $TXT['phone_alt']?>" title="<?echo $TXT['phone_alt']?>" />
                <p><? echo getFullPhone() ?></p>
            </div>
        </div>
    </div>
<?
}
