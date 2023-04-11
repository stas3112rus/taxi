<?
function drawTextBlock()
{
    global $TXT;
?>
    <div class="container-fluid" id="o-nas">
        <div class="container fifth_scr">
            <div class="row">
                <div class="col-md-12 text-center text_5_scr six_scr_h3">
                    <h2 style='color:black;'>
                        <? echo $TXT['text_block_title'] ?>
                    </h2>
                    <? echo $TXT['text_block_text'] ?>
                </div>
            </div>

        </div>
    </div>
<?
}
