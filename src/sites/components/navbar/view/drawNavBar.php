<?
function drawNavBar()
{
    drawMobileMenu();
    drawNavbarSection("scroll_header");
    drawNavbarSection("scrollMenu");
}


function drawNavbarSection($wrapSection)
{
    global $DEFAULT, $LEVEL, $TXT;
?>
    <section class="<? echo $wrapSection ?>">
        <div class="container relative flexbox">
            <a href="#home" class="logo" data-scroll>
                <img src="<? echo $LEVEL ?>images/logo.png" title="<? echo $TXT['navbar_logo_alt'] ?>" alt="<? echo $TXT['navbar_logo_alt'] ?>">
            </a>
            <span id="nav-toggle" class="toggle-scroll-btn">
                <div></div>
                <div></div>
                <div></div>
            </span>
            <nav class="nav-collapse">
                <? drawMenuNavBar() ?>
                <div class="clear"></div>
            </nav>
            <div class="contact-information">
                <div class="contact-information__phone flexbox">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <p class="editContent">
                        <a href="tel:<? echo $DEFAULT['phone'] ?>">
                            <? echo getFullPhone() ?>
                        </a>
                    </p>
                </div>
                <div class="contact-information__email flexbox">
                    <p class="editContent">
                        <a href="mailto:<? echo $DEFAULT['email_for_site'] ?>">
                            <? echo $DEFAULT['email_for_site'] ?>
                        </a>
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
<?
}

function drawMobileMenu()
{
?>
    <nav class="wrp-menu-toggle">
        <div class="menu-toggle">
            <div class="wrapper">
                <div class="btn-close">x</div>
                <? drawMenuNavBar() ?>
            </div>
        </div>
    </nav>
<?
}

function drawMenuNavBar()
{
?>
    <ul class="menuMenu">
        <li class="menu-item"><a href="#what-we-do" data-scroll>О Нас</a></li>
        <li class="menu-item"><a href="#price-table" data-scroll>Тарифы</a></li>
        <li class="menu-item"><a href="#taxi-class" data-scroll>Классы Такси</a></li>
        <li class="menu-item"><a href="#facts" data-scroll>4 Факта</a></li>
        <li class="menu-item"><a href="#reviews" data-scroll>Отзывы</a></li>
    </ul>
<?
}
