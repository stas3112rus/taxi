<?
function drawFooterTop()
{
    global $DEFAULT, $ADDRESS;
?>
    <div class="container contact_container">
        <div class="row">
            <div class="footer_data">
                <div class="col-sm-4 col-xs-12">
                    <ul class="client_data">
                        <li>
                            <span class="contact"></span>
                            <div class="client_detail">
                                <h4>КОНТАКТЫ</h4>
                                <span><a href="tel:<? echo $DEFAULT['phone'] ?>"><? echo getFullPhone() ?></a></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul class="client_data">
                        <li>
                            <span class="email"></span>
                            <div class="client_detail">
                                <h4>EMAIL</h4>
                                <span><a href="mailto:<? echo $DEFAULT['email_for_site'] ?>"><? echo $DEFAULT['email_for_site'] ?></a></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <ul class="client_data">
                        <li>
                            <span class="location"></span>
                            <div class="client_detail">
                                <h4>АДРЕС</h4>
                                <span><? echo $ADDRESS ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?
}
