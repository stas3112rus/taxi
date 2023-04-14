<?
function drawTextBlock()
{
    global $TXT, $LEVEL;
?>
    <section class="bg-grey text-description" id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-justify">
                    <h2 class="box-header left"><?php echo $TXT['text_block_title'] ?></h2>
                    <div class="car-img">
                        <img src="<? echo $LEVEL ?>images/busines.png" title="<?php echo $TXT['text_block_alt'] ?>" alt="<?php echo $TXT['text_block_alt'] ?>">
                    </div>
                    <?php echo $TXT['text_block_text_first'] ?>
                    <div class="hidden-text-more">
                        <?php echo $TXT['text_block_text_second'] ?>
                    </div>
                </div>

            </div>
            <div class="row">
                <button class="wbutton">
                    <?php echo $TXT['text_block_button'] ?>
                </button>
            </div>
        </div>
    </section>
<?
}
