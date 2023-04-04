<?
function drawTextBlock()
{
    global $LEVEL, $TXT;
?>
    <section class="about-us section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carspace-header text-center">
                        <div class="title">
                            <span>
                                <? echo $TXT['section_text_title'] ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-info">
                        <h2><? echo $TXT['section_text_h2'] ?></h2>
                        <? echo $TXT['section_text_first_text'] ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <img src="<? echo $LEVEL ?>assets/img/car-3.png" class="img-fluid" title="<? echo $TXT['section_text_first_alt'] ?>" alt="<? echo $TXT['section_text_first_alt'] ?>">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hidden-text-more">
                        <? echo $TXT['section_text_first_text'] ?>
                    </div>
                    <a href="#" class="carspace-btn wbutton">
                        <? echo $TXT['section_text_button'] ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?
}
