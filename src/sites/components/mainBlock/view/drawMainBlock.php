<?
function drawMainBlock($mail = false)
{
    global $TXT;
?>
    <div class="container-fluid first_scr">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left header1">
                    <h1><? echo $mail ? "Заявка отправлена" :  $TXT['H1'] ?></h1>
                </div>
                <div class="col-md-5 text-left header1 header2 hide_mob">
                    <span style="font-size: 150%;">
                        <? echo $mail ?
                            "Спасибо за обращение <br>
                            Свяжемся с вами в ближайшее время" :
                            $TXT['main_block_subtitle'] ?>
                    </span>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row first_scr_row">
                <div class="col-md-8 text-left">
                    <div class="row">
                        <?
                        if (!$mail) {
                            drawSmDots($TXT['main_block_col_1'], 3);
                            drawSmDots($TXT['main_block_col_2'], 2);
                            drawSmDots($TXT['main_block_col_3'], 2);
                            drawSmDots($TXT['main_block_col_4'], 3);
                            drawSmDots($TXT['main_block_col_5'], 2, true);
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row marg_top_90">
                <div class="col-md-2">
                    <? if (!$mail) { ?>
                        <button type="button" class="btn btn-warning zakaz_but" onclick="location.href='#zakazat_taxi'">
                            <? echo $TXT['main_block_button'] ?>
                        </button>
                    <? } ?>
                </div>
                <div class="col-md-10"></div>
            </div>
        </div>
    </div>
    <?
}

function drawSmDots($text, $md, $bold_wh = false)
{
    if ($text) {
    ?>

        <div class="col-md-<? echo $md ?> 
        <? echo $bold_wh ? "bold_wh" : "bord_right" ?>       
        ">
            <p><span class="sm_dots">• </span>
                <? echo $text ?>
            </p>
        </div>
<?
    }
}
