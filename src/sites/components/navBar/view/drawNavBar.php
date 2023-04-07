<?
function drawNavBarTop()
{
    global $TXT, $DEFAULT, $LEVEL;
?>
    <section class="sub_header_dark">
        <div class="container">
            <div class="row">
                <div class="col-3 hide-on-mobile hide-on-table">
                    <div class="left_block">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a class="" href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a>
                    </div>
                </div>
                <div class="col-3 text-center hide-on-mobile hide-on-table">
                    <a href="#home" class="logo" data-scroll>
                        <img src="<? echo $LEVEL ?>img/logo.png" title="<? echo $TXT['navbar_alt'] ?>" alt="<? echo $TXT['navbar_alt'] ?>">
                    </a>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right_block"> <i class="fa fa-mobile" aria-hidden="true"></i>
                        <p class="editContent"> <a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
<?
}

function drawNavBarBottom()
{
    global $TXT;
?>
    <section class="scroll_header ">
        <div class="container relative">
            <a href="#home" class="logo" data-scroll>
                <h1><? echo $TXT['H1'] ?></h1>
            </a>
            <span id="nav-toggle">
                <div></div>
                <div></div>
                <div></div>
            </span>
            <nav class="nav-collapse">
                <ul>
                    <li class="menu-item"><a href="#what-we-do" data-scroll>О Нас</a></li>
                    <li class="menu-item"><a href="#price-table" data-scroll>Тарифы</a></li>
                    <li class="menu-item"><a href="#taxi-class" data-scroll>Классы Такси</a></li>
                    <li class="menu-item"><a href="#learn-mone" data-scroll>Сервис</a></li>
                    <li class="menu-item"><a href="#why_choose_certified_service" data-scroll>ЧАВО</a></li>
                    <li class="menu-item"><a href="#reviews" data-scroll>Отзывы</a></li>
                    <li class="menu-item"><a href="#contact" data-scroll>Контакты</a></li>

                </ul>
                <div class="clear"></div>
            </nav>
            <div class="clear"></div>
        </div>
    </section>
<?
}
