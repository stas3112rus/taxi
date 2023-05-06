<?
function drawTextBlock()
{
    global $LEVEL, $TXT;
?>
    <section id="product" class="light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-ing left-wrapper-photo">
                        <img src="<? echo $LEVEL ?>img/bg.jpg" title="<? echo $TXT['text_block_alt'] ?>" alt="<? echo $TXT['text_block_alt'] ?>" class="img-responsive">
                    </div>
                    <!-- Large title -->
                    <h2><? echo $TXT['text_block_title'] ?></h2>

                    <!-- Info -->
                    <div class="lead">
                        <? echo $TXT['text_block_text_first'] ?>
                        <div class="lead hidden-text-more">
                            <? echo $TXT['text_block_text_second'] ?>
                        </div>
                        <a href="#" class="wbutton btn">
                            <? echo $TXT['text_block_btn'] ?>
                        </a>
                    </div>
                </div>
            </div>
    </section>
<?
}
