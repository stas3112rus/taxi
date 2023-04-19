<?
function drawTextBlock()
{
    global $LEVEL, $TXT;
?>
    <section id="car-block">
        <hr class="lg">
        <div class="car-right animation-block">
            <img src="<? echo $LEVEL ?>assets\images\_car-big-side.png" title="<? echo $TXT['text_block_alt'] ?>" alt="<? echo $TXT['text_block_alt'] ?>" class="slideleft">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="yellow"><? echo $TXT['text_block_subtitle'] ?></h4>
                    <h2 class="h1"><? echo $TXT['text_block_title'] ?></h2>
                </div>
                <div class="col-md-6">
                    <? echo $TXT['text_block_text_first'] ?>
                </div>
                <div class='col-md-12'>
                    <div class="round accordion_title btn btn-yellow btn-bg-white btn-lg">читать дальше</div>
                    <div class="accordion_hide" style="display: none" ;>
                        <? echo $TXT['text_block_text_second'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
