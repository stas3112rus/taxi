<?
function drawNavBar()
{
    global $CITY_FROM, $DEFAULT, $CURRENT_SITE, $TXT, $ADDRESS;
?>
    <div class="main-header">
        <div class="main-navbar">
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                <div class="top-header">
                    <div class="container content-top">
                        <div class="leftside">
                            <div class="header-items">
                                <p style="display:flex; justify-content: space-between; gap: 15px; align-items: center;"><i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    <? echo $ADDRESS ?>
                                </p>
                            </div>
                            <div class="header-items">
                                <p style="display:flex; justify-content: space-between; gap: 15px; align-items: center;">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="mailto:<? echo  $DEFAULT['email_for_site'] ?>">
                                        <? echo  $DEFAULT['email_for_site'] ?>
                                    </a>
                                </p>
                            </div>
                            <div class="header-items">
                                <div style="display:flex; justify-content: space-between; gap: 15px; align-items: center;">
                                    <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                                        <img src=" <? echo $CURRENT_SITE ?>img/images/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="24" height="24">
                                    </a>
                                    <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                                        <img src="<? echo  $CURRENT_SITE ?>img/images/telegram.svg" alt="telegram <? echo getFullPhone() ?>" title="telegram <? echo getFullPhone() ?>" width="24" height="24">
                                    </a>
                                    <a href="tel:<? echo  $DEFAULT['phone'] ?>">
                                        <i class="fa fa-phone" aria-hidden="true" style="margin-right: 12px;"></i>

                                        <? echo getFullPhone() ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="rightside">
                            <div class="header-items"><a href="#">
                                    <p><i class="fa fa-facebook" aria-hidden="true"></i>
                                    </p>
                                </a></div>
                            <div class="header-items"><a href="#">
                                    <p><i class="fa fa-twitter" aria-hidden="true"></i>
                                    </p>
                                </a></div>
                            <div class="header-items"><a href="#">
                                    <p><i class="fa fa-instagram" aria-hidden="true"></i>
                                    </p>
                                </a></div>
                            <div class="header-items no-margin"><a href="#">
                                    <p><i class="fa fa-youtube-play" aria-hidden="true"></i></p>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="navbar-header" style="min-height: 65px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <div class="logo-brand">
                                <img src="<? echo $CURRENT_SITE ?>img\master\logo.png" title="<? echo $TXT['header_logo_alt'] ?>" alt="<? echo $TXT['header_logo_alt'] ?>">
                                <br>
                                <span style="margin-left: 30px; color: #303030; font-size: 120%;">
                                    <nobr>Такси в <?php echo $CITY_FROM['vin'] ?></nobr>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right scroll">
                            <li class="dropdown">
                                <a href="#about_us">О НАС</a>
                            </li>
                            <li class="dropdown">
                                <a href="#tariff">ТАРИФЫ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#class-taxi">КЛАССЫ ТАКСИ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#rev">ОТЗЫВЫ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#cont">КОНТАКТЫ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
<?
}
