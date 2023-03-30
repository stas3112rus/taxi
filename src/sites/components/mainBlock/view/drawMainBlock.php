<?
function drawMainBlock()
{
    global $TXT;
?>
    <section class="banner fix-background parallax" style="background-image:url(img/section__bg.jpg)">
        <div class="opacity-dark bg-black"></div>
        <div class="section">
            <div class="col-md-8 col-sm-12">
                <div class="banner-text menuMenu scroll">
                    <h1><?php echo strtoupper($TXT['h1']) ?></h1>
                    <p class="text-shadow">
                        <? echo strtoupper($TXT['subtitle_main']) ?>
                    </p>
                    <a href="#class-taxi">
                        <button class="wbutton-bordered white">
                            <? echo strtoupper($TXT['button_main']) ?>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-search">
                    <h6>
                        <? echo strtoupper(strtoupper($TXT['top_form_title'])) ?>
                    </h6>
                    <hr class="form-line">
                    <div class="signup-box-body">
                        <? drawTopForm() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
