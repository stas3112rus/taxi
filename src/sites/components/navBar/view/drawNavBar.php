<?
function drawNavBar()
{
    global $DEFAULT, $LEVEL, $TXT;
?>
    <header>
        <nav class="navbar navbar-fixed-top nav-base dark" id="minify_nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#hero_10" class="navbar-brand logo-default">
                        <img src="<? echo $LEVEL ?>img\logo.png" title="<? echo $TXT['navbar_logo_alt'] ?>" alt="<? echo $TXT['navbar_logo_alt'] ?>">
                    </a>
                    <a href="#hero_10" class="navbar-brand logo-alt">
                        <img src="<? echo $LEVEL ?>img\logo-dark.jpg" title="<? echo $TXT['navbar_logo_alt'] ?>" alt="<? echo $TXT['navbar_logo_alt'] ?>">
                    </a>
                    <div class="contact-information mob">
                        <div class="contact-information__phone flexbox">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <p class="editContent"> <a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a></p>
                        </div>
                        <div class="contact-information__email flexbox">
                            <p class="editContent"> <a href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a></p>
                        </div>
                    </div>
                </div>
                <div id="navigation" class="collapse navbar-collapse flexbox">
                    <ul class="nav navbar-nav navbar-right">
                        <? drawMenu() ?>
                        <li><a href="#contact_form" class="btn btn-secondary popup-with-form">забронировать</a></li>
                    </ul>
                    <div class="contact-information">
                        <div class="contact-information__phone flexbox">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <p class="editContent"> <a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a></p>
                        </div>
                        <div class="contact-information__email flexbox">
                            <p class="editContent"> <a href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<?
}
