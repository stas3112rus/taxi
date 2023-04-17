<?
function drawTextBlock()
{
    global $TXT;
?>
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="title">
                    <div class="col-sm-12">
                        <h2 class="text-center"><?php echo $TXT['text_block_title'] ?></h2>
                    </div>
                </div>
                <div class="col-sm-12 accordion">

                    <img class="comfort-img" src="assets/images/comfort.png" style="float: right;" title="<? echo $TXT['text_block_alt'] ?>" alt="<? echo $TXT['text_block_alt'] ?>">
                    <? echo $TXT['text_block_text_first'] ?>
                    <a class="fd-link collapsed" data-toggle="collapse" data-parent="#only-one" href="#collapse10" aria-expanded="false">читать далее</a>
                    </p>
                    <div id="collapse10" class="panel-collapse collapse">
                        <? echo $TXT['text_block_text_second'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
