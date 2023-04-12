<?
function drawReasons()
{
    global $TXT, $LEVEL;
?>
    <div class="container-fluid " id="preimuschestva">
        <div class="container six_scr">
            <div class="row">
                <div class="col-md-12 text-left six_scr_h3">
                    <h3><? echo $TXT['reason_title'] ?></h3>
                </div>
            </div>
            <div class="row marg_top_90">
                <div class="col-md-3 text-center ">
                    <img src="<? echo $LEVEL ?>images/ceni.png" alt="><? echo $TXT['reason_alt_1'] ?>" title="><? echo $TXT['reason_alt_1'] ?>" />
                    <? echo $TXT['reason_text_1'] ?>
                </div>
                <div class="col-md-1 "></div>
                <div class="col-md-4 text-center marg_top_sm_30">
                    <img src="<? echo $LEVEL ?>images/bezopasnost.png" alt="><? echo $TXT['reason_alt_2'] ?>" title="><? echo $TXT['reason_alt_2'] ?>" />
                    <? echo $TXT['reason_text_2'] ?>
                </div>
                <div class="col-md-1 "></div>
                <div class="col-md-3 text-center marg_top_sm_30">
                    <img src="<? echo $LEVEL ?>images/vstrecha.png" alt="><? echo $TXT['reason_alt_3'] ?>" title="><? echo $TXT['reason_alt_3'] ?>" />
                    <? echo $TXT['reason_text_3'] ?>
                </div>
            </div>
            <div class="row marg_top_60">
                <div class="col-md-3 text-center ">
                    <img src="<? echo $LEVEL ?>images/bagazh.png" alt="><? echo $TXT['reason_alt_4'] ?>" title="><? echo $TXT['reason_alt_4'] ?>" />
                    <? echo $TXT['reason_text_4'] ?>
                </div>
                <div class="col-md-1 "></div>
                <div class="col-md-4 text-center marg_top_sm_30">
                    <img src="<? echo $LEVEL ?>images/oplata.png" alt="><? echo $TXT['reason_alt_5'] ?>" title="><? echo $TXT['reason_alt_5'] ?>" />
                    <? echo $TXT['reason_text_5'] ?>
                </div>
                <div class="col-md-1 "></div>
                <div class="col-md-3 text-center marg_top_sm_30">
                    <img src="<? echo $LEVEL ?>images/skidka.png" alt="><? echo $TXT['reason_alt_6'] ?>" title="><? echo $TXT['reason_alt_6'] ?>" />
                    <? echo $TXT['reason_text_6'] ?>
                </div>
            </div>
        </div>
    </div>
<?
}
