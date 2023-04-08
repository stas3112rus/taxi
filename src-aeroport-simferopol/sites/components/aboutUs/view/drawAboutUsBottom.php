<?
function drawAboutUsBottom()
{
    global $TXT;
?>
    <div class="main counter-parallax">
        <div class="section">
            <div class="row" style="display:flex; align-items: stretch;">
                <div class="col-sm-3 col-md-3">
                    <circle-counter style="height: 100%;">
                        <div class="counter-icon">
                            <i class="fa fa-taxi" aria-hidden="true"></i>
                        </div>
                        <span class="counter circle"><? echo $TXT['about_us_bottom_value_1'] ?></span>
                        <h4><? echo $TXT['about_us_bottom_title_1'] ?></h4>
                    </circle-counter>
                </div>
                <div class="col-sm-3 col-md-3">
                    <circle-counter style="height: 100%;">
                        <div class="counter-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <span class="counter circle"><? echo $TXT['about_us_bottom_value_2'] ?></span>
                        <h4><? echo $TXT['about_us_bottom_title_2'] ?></h4>
                    </circle-counter>
                </div>
                <div class="col-sm-3 col-md-3">
                    <circle-counter style="height: 100%;">
                        <div class="counter-icon">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                        </div>
                        <span class="counter circle"><? echo $TXT['about_us_bottom_value_3'] ?></span>
                        <h4><? echo $TXT['about_us_bottom_title_3'] ?></h4>
                    </circle-counter>
                </div>
                <div class="col-sm-3 col-md-3">
                    <circle-counter style="height: 100%;">
                        <div class="counter-icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <span class="counter circle"><? echo $TXT['about_us_bottom_value_4'] ?></span>
                        <h4><? echo $TXT['about_us_bottom_title_4'] ?></h4>
                    </circle-counter>
                </div>
            </div>
        </div>
    </div>
<?
}
