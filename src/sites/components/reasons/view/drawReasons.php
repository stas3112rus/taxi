<?
function drawReasons()
{
    global $TXT;
?>
    <div class="container-fluid " id="preimuschestva">
        <div class="container six_scr">
            <div class="row">
                <div class="col-md-12 text-left six_scr_h3">
                    <h3><? echo $TXT['reason_title'] ?></h3>
                </div>
            </div>
            <div class="row marg_top_90" style="display:flex; justify-content: space-between;">
                <?
                drawReason("ceni.png", $TXT['reason_alt_1'], $TXT['reason_text_1']);
                drawReason("bezopasnost.png", $TXT['reason_alt_2'], $TXT['reason_text_2']);
                drawReason("vstrecha.png", $TXT['reason_alt_3'], $TXT['reason_text_3']);
                ?>
            </div>
            <div class="row marg_top_60" style="display:flex; justify-content: space-between;">
                <?
                drawReason("bagazh.png", $TXT['reason_alt_1'], $TXT['reason_text_1']);
                drawReason("oplata.png", $TXT['reason_alt_2'], $TXT['reason_text_2']);
                drawReason("skidka.png", $TXT['reason_alt_3'], $TXT['reason_text_3']);
                ?>
            </div>
        </div>
    </div>
<?
}

function drawReason($img, $alt, $text)
{
?>
    <div class="col-md-3 text-center ">
        <img src="images/<? echo $img ?>" alt="<? echo $alt ?>" title="<? echo $alt ?>" />
        <? echo $text ?>
    </div>
<?
}
