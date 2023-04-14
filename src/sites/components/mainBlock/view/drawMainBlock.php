<?
function drawMainBlock()
{
    global $TXT, $LEVEL;
?>
    <section class="banner fix-background parallax" style="background-image:url(<? echo $LEVEL ?>images/section_bg.jpg)">
        <div class="opacity-dark bg-black"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div class="banner-text menuMenu">

                        <h1>
                            <?php echo $TXT['main_block_h1'] ?>
                        </h1>
                        <p class="text-shadow">
                            <?php echo $TXT['main_block_subtitle'] ?>
                        </p>
                        <a href="#price-table">
                            <button class="wbutton-bordered white">
                                <?php echo $TXT['main_block_button'] ?>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="signup-box">
                        <div class="signup-box-headling">
                            <h2>
                                <?php echo $TXT['main_block_form_title'] ?>
                            </h2>
                            <span class="arrow-down"></span>
                        </div>
                        <div class="signup-box-body">
                            <? drawTopForm() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
