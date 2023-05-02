<?
function drawTextBlock()
{
    global $TXT, $LEVEL;
?>
    <section class="page-section post">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="100ms">
                    <div class="section-title text-left">
                        <small><? echo $TXT['text_block_subtitle_small'] ?></small>
                    </div>
                    <h2 class="section-title text-left">
                        <span>
                            <? echo $TXT['text_block_title'] ?>
                        </span>
                    </h2>
                    <? echo $TXT['text_block_text_first'] ?>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="300ms">
                    <img src="<? echo $LEVEL ?>assets\img\preview\cars\auto.png" title=" <? echo $TXT['text_block_alt'] ?>" alt=" <? echo $TXT['text_block_alt'] ?>">
                </div>
            </div>
            <div>
                <div class="round accordion_title btn btn-yellow btn-bg-white btn-lg btn btn-theme ripple-effect btn-theme-md">
                    <? echo $TXT['text_block_read_more'] ?>
                </div>
                <div class="accordion_hide" style="display: none">
                    <? echo $TXT['text_block_text_second'] ?>
                </div>
            </div>
        </div>
    </section>
<?
}
