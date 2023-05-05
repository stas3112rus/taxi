<?
function drawMainBlock()
{
    global $TXT;
?>
    <div class="content-area">
        <section class="page-section no-padding slider">
            <div class="container full-width">
                <div class="main-slider">
                    <div class="item slide2 ver2">
                        <div class="caption">
                            <div class="container">
                                <div class="div-table">
                                    <div class="div-cell">
                                        <div class="caption-content">
                                            <div class="col-lg-7 col-sm-12">
                                                <h1 class="caption-subtitle"><? echo mb_strtoupper($TXT['main_block_h1'])  ?></h1>
                                                <p class="caption-text">
                                                    <? echo $TXT['main_block_subtitle'] ?>
                                                </p>
                                                <p class="caption-text text-center">
                                                    <a class="btn btn-theme ripple-effect btn-theme-md custom-scroll" href="#thumbnail">
                                                        <? echo $TXT['main_block_btn'] ?>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-lg-5 col-sm-12">
                                                <div class="form-search light">
                                                    <? drawTopForm() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?
}
