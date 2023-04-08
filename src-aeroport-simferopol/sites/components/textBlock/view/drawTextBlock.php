<?
function drawTextBlock()
{
    global $CURRENT_SITE, $TXT;
?>
    <div class="main seo">
        <div class="section ">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-front" style="padding-top: 75px;">

                        <h2><?php echo mb_strtoupper($TXT['h2_text_block']) ?></h2>
                        <hr class="short">

                        <?php echo $TXT['text_first_part'] ?>

                        <div class="hidden-text-more">
                            <?php echo  $TXT['text_second_part'] ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="auto-front-img">
                        <img src="<? echo $CURRENT_SITE ?>img/images/autos/auto.jpg" title="<? echo $TXT['alt_text_block'] ?>" alt="<? echo $TXT['alt_text_block'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="wbutton">ЧИТАТЬ ДАЛЬШЕ</button>
            </div>
        </div>
    </div>
<?
}
