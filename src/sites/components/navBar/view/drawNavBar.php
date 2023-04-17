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
                        <a href="tel:<? $DEFAULT['phone'] ?>">
                            <? echo getFullPhone() ?>
                        </a>
                        <a href="mail:<? echo $DEFAULT['email_for_site'] ?>">
                            <? echo $DEFAULT['email_for_site'] ?>
                        </a>
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
