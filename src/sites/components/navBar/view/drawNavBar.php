<?
function drawNavBar()
{
    global $TXT, $MAIN_SITE, $DEFAULT, $LEVEL;
?>
    <div class="navbar-dark-transparent">
        <div class="nav-wrapper" id="nav-wrapper">
            <nav class="navbar navbar-static navbar-affix" data-spy="affix">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <a class='logo' href="<? echo $MAIN_SITE ?>">
                            <img src="<? echo $LEVEL ?>assets/images/logo-2.png" alt="<? echo $TXT['navbar_alt'] ?>" title="<? echo $TXT['navbar_alt'] ?>">
                        </a>

                    </div>
                    <div class="contact-information">
                        <div class='contact-block'>
                            <p><a href="tel:<? echo $DEFAULT['phone'] ?>"><span class="fa fa-phone"></span>
                                    <? echo getFullPhone() ?>
                                </a>
                            </p>
                        </div>
                        <div class='contact-block'>
                            <p><a href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a></p>
                        </div>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <button type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <ul class="nav navbar-nav">
                            <li><a href="#car-block" class="scrolling">О Нас</a></li>
                            <li><a href="#price-table" class="scrolling">Тарифы</a></li>
                            <li><a href="#tariffs" class="scrolling">Классы Такси</a></li>
                            <li><a href="#services" class="scrolling">Наши преимущества</a></li>
                            <li><a href="#testimonials" class="scrolling">Отзывы</a></li>
                            <li><a href="#block-footer" class="scrolling">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
<?
}
