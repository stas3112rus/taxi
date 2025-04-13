<?
function drawHeader()
{
    global $CURRENT_SITE,  $TXT, $DEFAULT;
?>
    <header class="header header-black">
        <div class="header-wrapper">
            <div class="container">
                <div class="col-sm-2 col-xs-12 navigation-header">
                    <a href="<? echo $CURRENT_SITE ?>" class="logo">
                        <img src="<? echo $CURRENT_SITE ?>img/logo.png" alt="<? echo $TXT["logo_alt"] ?>" title="<? echo $TXT["logo_alt"] ?>">
                    </a>
                    <li class="phone-mob" style="align-items: center; gap: 4px;">
                        <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                            <img src="<? echo $CURRENT_SITE ?>img/telegram.svg" width="32" height="32" alt="Telegram <? echo getFullPhone() ?>" title="Telegram <? echo getFullPhone() ?>">
                        </a>
                        <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                            <img src="<? echo $CURRENT_SITE ?>img/whatsapp.svg" width="32" height="32" alt="Whatsapp <? echo getFullPhone() ?>" title="Whatsapp <? echo getFullPhone() ?>">
                        </a>
                        <a href="tel:<? echo $DEFAULT['phone'] ?>">
                            <? echo getFullPhone() ?>
                        </a>
                    </li>
                    <div class="btn-menu">
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-10 col-xs-12 navigation-container">
                    <div id="navigation" class="navbar-collapse collapse">
                        <ul class="navigation-list pull-left light-text">
                            <li class="navigation-item"><a href="#hero" class="navigation-link">Главная</a></li>
                            <li class="navigation-item"><a href="#why" class="navigation-link">О компании</a></li>
                            <li class="navigation-item"><a href="#tarifs" class="navigation-link">Тарифы</a></li>

                            <li class="navigation-item"><a href="#about" class="navigation-link">Преимущества</a></li>
                            <li class="navigation-item"><a href="#contact" class="navigation-link">Контакты</a></li>
                        </ul>
                        <div style="display: flex; justify-content: right; gap: 9px; align-items: center; margin-top: 20px;">
                            <li class="nav-info phone-desc" style='margin-top: 0;'>
                                <a href="tel:<? echo $DEFAULT['phone'] ?>" class="pull-right buy-btn">
                                    <img src="<? echo $CURRENT_SITE ?>img/call.png" alt="<? echo $TXT["call_alt"] ?>" title="<? echo $TXT["call_alt"] ?>">
                                    <? echo getFullPhone() ?>
                                </a>
                            </li>
                            <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                                <img src="<? echo $CURRENT_SITE ?>img/telegram.svg" width="32" height="32" alt="Telegram <? echo getFullPhone() ?>" title="Telegram <? echo getFullPhone() ?>">
                            </a>
                            <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                                <img src="<? echo $CURRENT_SITE ?>img/whatsapp.svg" width="32" height="32" alt="Whatsapp <? echo getFullPhone() ?>" title="Whatsapp <? echo getFullPhone() ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?
}
