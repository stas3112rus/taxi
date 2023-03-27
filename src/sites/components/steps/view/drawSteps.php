<?
function drawSteps()
{
    global $TXT, $CURRENT_SITE;
?>
    <section class="steps" id="how">
        <div class="container">
            <div class="heading">
                <h2><? echo $TXT["steps_h2"] ?></h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="block-step">
                        <div class="col-md-2">
                            <h5>01.</h5>
                        </div>

                        <div class="col-md-10">
                            <div class="wpb_wrapper">
                                <? echo $TXT["steps_1"] ?>
                            </div>
                        </div>
                    </div>

                    <div class="block-step">
                        <div class="col-md-2">
                            <h5>02.</h5>
                        </div>

                        <div class="col-md-10">
                            <div class="wpb_wrapper">
                                <? echo $TXT["steps_2"] ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="<? echo $CURRENT_SITE ?>img/mob.png">
                </div>

                <div class="col-md-4">
                    <div class="block-step bs-right">
                        <div class="col-md-2">
                            <h5>03.</h5>
                        </div>

                        <div class="col-md-10">
                            <div class="wpb_wrapper">
                                <? echo $TXT["steps_3"] ?>
                            </div>
                        </div>
                    </div>
                    <div class="block-step bs-right">
                        <div class="col-md-2">
                            <h5>04.</h5>
                        </div>
                        <div class="col-md-10">
                            <div class="wpb_wrapper">
                                <? echo $TXT["steps_4"] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
