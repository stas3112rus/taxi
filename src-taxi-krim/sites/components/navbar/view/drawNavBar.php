<?
function drawNavBar()
{
    global $DEFAULT,  $LEVEL;
?>
    <header id="header-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <? drawTopLogo() ?>

                <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="page-scroll nav-link" href="#about">О нас</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#price-table">прайс</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#car">классы такси</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#service">сервис</a></li>                       
                        <li class="nav-item"><a class="page-scroll nav-link" href="#testimonial">отзывы</a></li>
                        <li class="nav-item"><a class="page-scroll nav-link" href="#contact">контакты</a></li>
                    </ul>
                </div>
                <div class="contact-information">
                    <div class="contact-information__phone flexbox">
                        <div style="display: flex; gap: 8px">
                            <a href="https://wa.me/<? echo str_replace('+', '', $DEFAULT['phone']) ?>" target="_blank">
                                <img src="<? echo $LEVEL ?>assets/img/whatsapp.svg" alt="whatsapp <? echo getFullPhone() ?>" title="whatsapp <? echo getFullPhone() ?>" width="20" height="20">
                            </a>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <p class="editContent"> <a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a></p>
                    </div>
                    <div class="contact-information__phone flexbox">
                        <div style="display: flex; gap: 8px">
                            <a href="https://t.me/<? echo $DEFAULT['phone_2'] ?>" target="_blank">
                                <img src="<? echo $LEVEL ?>assets/img/telegram.svg" alt="telegram <? echo getFullPhone() ?>" title="telegram <? echo getFullPhone() ?>" width="20" height="20">
                            </a>
                            <i class="fa fa-mobile" aria-hidden="true"></i>

                        </div>
                        <p class="editContent"> <a href="tel:<? echo $DEFAULT['phone_2'] ?>"><? echo getFullPhone($DEFAULT['phone_2']) ?></a></p>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span></button>
            </div>
        </nav>
    </header>
<?
}
