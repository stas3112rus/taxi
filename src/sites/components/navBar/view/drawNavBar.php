<?
function drawNavBar()
{
    global $TXT, $LEVEL, $CURRENT_SITE, $DEFAULT;
?>
    <nav class="navbar default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<? echo $CURRENT_SITE ?>" class="brand-logo">
                    <img src="<? echo $LEVEL ?>assets/images/logo33.png" title="<? echo $TXT['navbar_logo'] ?>" alt="<? echo $TXT['navbar_logo'] ?>">
                </a>
                <ul class="contacts">
                    <li>
                        <div style="display: flex; gap:4px; align-items:center">
                            <a href="https://wa.me/<? echo getPhoneWithoutPlus() ?>" target="_blank">
                                <img src="<? echo $LEVEL ?>assets/images/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="22" height="22">
                            </a>
                            <a href="https://t.me/<? echo $DEFAULT['phone'] ?>" target="_blank">
                                <img src="<? echo $LEVEL ?>assets/images/telegram.svg" alt=telegram" <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="22" height="22">
                            </a>
                            <a href="tel:<? $DEFAULT['phone'] ?>">
                                <? echo getFullPhone() ?>
                            </a>
                        </div>
                        <div>
                            <a href="mail:<? echo $DEFAULT['email_for_site'] ?>">
                                <? echo $DEFAULT['email_for_site'] ?>
                            </a>
                        </div>

                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav pull-right">
                    <li class="active">
                        <a href="#about">О Нас</a>
                    </li>
                    <li>
                        <a href="#price-table">Тарифы</a>
                    </li>
                    <li>
                        <a href="#taxi-class">Классы Такси</a>
                    </li>
                    <li>
                        <a href="#working">Сервис</a>
                    </li>
                    <li>
                        <a href="#our_clients">Отзывы</a>
                    </li>
                    <li>
                        <a href="#faq">Вопросы?</a>
                    </li>
                    <li>
                        <a href="#contactus">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?
}
