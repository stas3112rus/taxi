<?
function drawNavBar()
{
    global $TXT, $LEVEL, $DEFAULT;
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
                <img src='<? echo $LEVEL ?>images/dots.png' alt="<? echo $TXT['navbar_logo_alt'] ?>" tilt="<? echo $TXT['navbar_logo_alt'] ?>">
            </div>
            <div class="col-md-3 text-center hide_mob">
                <p>Служба заказа такси</p>
            </div>
            <div class="col-md-3 text-right col-sm-12 center_mob">
                <div class="center_mob_icon">
                    <img src='<? echo $LEVEL ?>images/tel.png' alt="<? echo $TXT['navbar_phone_alt'] ?>" title="<? echo $TXT['navbar_phone_alt'] ?>" width="30" height="30" />
                    <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                        <img src=" <? echo $LEVEL ?>images/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="30" height="30">
                    </a>
                    <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                        <img src="<? echo $LEVEL ?>images/telegram.svg" alt="telegram <? echo getFullPhone() ?>" title="telegram <? echo getFullPhone() ?>" width="30" height="30">
                    </a>
                </div>
                <p style="white-space: nowrap;"><a href="tel:<? echo $DEFAULT['phone'] ?>" style="color: #282828;"><? echo getFullPhone() ?></a></p>
            </div>
        </div>
    </div>
<?
}
