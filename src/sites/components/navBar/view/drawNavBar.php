<?
function drawNavBar()
{
    global $TXT, $LEVEL, $DEFAULT;
?>
    <header class="header fixed">
        <div class="header-wrapper">
            <div class="container">

                <div class="logo">
                    <a href="#">
                        <img src="<? echo $LEVEL ?>assets\img\logo-feodosiya-taxi.png" title="<? echo $TXT['navbar_logo_alt'] ?>" alt="<? echo $TXT['navbar_logo_alt'] ?>">
                    </a>
                </div>

                <a href="#" class="menu-toggle btn ripple-effect btn-theme-transparent">
                    <i class="fa fa-bars"></i>
                </a>
                <div class='mob-contacts'>
                    <span>
                        <? echo $DEFAULT['email_for_site'] ?><br>
                        <? echo getFullPhone() ?>
                    </span>
                </div>
                <nav class="navigation closed clearfix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <li><a href="#thumbnail">Преимущества</a></li>
                                <li><a href="#price-table">Прайс</a></li>
                                <li><a href="#class-taxi">Классы такси</a></li>
                                <li><a href="#reviews">Отзывы</a></li>
                                <li><a href="#faq">ЧАВО</a></li>
                                <li><a href="#contact">Контакты</a></li>
                                <li>
                                    <div class='custom-contacts'>
                                        <a href="mailto:<? echo $DEFAULT['email_for_site'] ?>">
                                            <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                <? echo $DEFAULT['email_for_site'] ?>
                                            </span></a>
                                        <a href="tel:<? echo $DEFAULT['phone'] ?>">
                                            <span>
                                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                                <? echo getFullPhone() ?>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </nav>
            </div>
        </div>
    </header>
<?
}
