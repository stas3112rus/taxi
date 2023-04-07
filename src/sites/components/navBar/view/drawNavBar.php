<?
function drawNavBar()
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
