<?
function drawService()
{
    global $TXT, $LEVEL;
?>
    <section id="working">
        <div class="container">
            <div class="row">
                <div class="title">
                    <div class="col-sm-6">
                        <h5><? echo $TXT['service_title'] ?></h5>
                    </div>
                </div>
            </div>
            <div class="working_snap">
                <img class="img-responsive hidden-xs animate_top_60" src="<? echo $LEVEL ?>assets/images/elit.png" title="<? echo $TXT['service_alt'] ?>" alt="<? echo $TXT['service_alt'] ?>">
            </div>
            <div class="row">
                <?
                drawServiceItem("ti-crown", $TXT['service_title_1'], $TXT['service_description_1'], 5);
                ?>
            </div>
            <div class="row">
                <?
                drawServiceItem("ti-timer", $TXT['service_title_2'], $TXT['service_description_2']);
                drawServiceItem("ti-face-smile", $TXT['service_title_3'], $TXT['service_description_3']);
                drawServiceItem("ti-thumb-up", $TXT['service_title_4'], $TXT['service_description_4']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawServiceItem($img, $title, $description, $sm = 4)
{
?>
    <div class="col-sm-<? echo $sm ?> working_space">
        <div class="system_font_color">
            <h4>
                <span class="<? echo $img ?> mr10"></span>
                <? echo $title ?>
            </h4>
        </div>
        <p><? echo $description ?></p>
    </div>
<?
}
