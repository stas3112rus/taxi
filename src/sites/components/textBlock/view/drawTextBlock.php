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

function drawBottomTextBlock()
{
    global $TXT, $LEVEL;
?>
    <div class="container-fluid fourth_scr">
        <div class="container">
            <div class="row marg_top_90">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center header_4_scr" style="color: white;">
                    <h3>
                        <? echo $TXT['text_bottom_title'] ?>
                    </h3>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center header_4_scr">
                    <hr />
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center header_4_scr">
                    <p><? echo $TXT['text_bottom_subtitle'] ?></p>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row marg_top_60">
                <div class="col-md-12 text-center">
                    <a href="#o-nas">
                        <img src="<? echo $LEVEL ?>images/circle_down.png" alt="<? echo $TXT['text_bottom_alt'] ?>" title="<? echo $TXT['text_bottom_alt'] ?>" />
                    </a>
                </div>
            </div>
        </div>
    </div>
<?
}
