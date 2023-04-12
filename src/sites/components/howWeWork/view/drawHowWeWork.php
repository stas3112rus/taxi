<?
function drawHowWeWork()
{
    global $TXT;
?>
    <div class="container-fluid" id="shema-raboti">
        <div class="container eight_scr">
            <div class="row">
                <div class="col-md-12 text-left six_scr_h3">
                    <h3><? echo $TXT['how_we_work_title'] ?></h3>
                </div>
            </div>
            <?
            drawHowWeWorkPoint("1.png", $TXT['how_we_work_alt_1'], $TXT['how_we_work_text_1']);
            drawHowWeWorkPoint("2.png", $TXT['how_we_work_alt_2'], $TXT['how_we_work_text_2']);
            drawHowWeWorkPoint("3.png", $TXT['how_we_work_alt_3'], $TXT['how_we_work_text_3']);
            drawHowWeWorkPoint("4.png", $TXT['how_we_work_alt_4'], $TXT['how_we_work_text_4']);
            ?>
        </div>
    </div>
<?
}

function drawHowWeWorkPoint($img, $alt, $text)
{
    global $LEVEL;
?>
    <div class="row pad_left_30">
        <div class="col-md-1 text-center ">
            <img src="<? echo $LEVEL ?>images/<? echo $img ?>" alt="<? echo $alt ?>" title="<? echo $alt ?>">
        </div>
        <div class="col-md-8 text-left center_mob media-middle">
            <p><? echo $text ?></p>
        </div>
        <div class="col-md-3"></div>
    </div>
<?
}
