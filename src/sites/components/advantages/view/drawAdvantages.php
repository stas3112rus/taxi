<?
function drawAdvantages()
{
    global $TXT, $LEVEL;
?>
    <section id="features_3">
        <div class="container">
            <div class="row m-b-40">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <h2><? echo $TXT['advantages_title'] ?></h2>
                    <p class="lead"><? echo $TXT['advantages_subtitle'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 left-content wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms" ">
				
                    <img src=" <? echo $LEVEL ?>img/comfort.png" title="<? echo $TXT['advantages_alt'] ?>" alt="<? echo $TXT['advantages_alt'] ?>">
                    <a href="#contact_form" class="btn popup-with-form"><? echo $TXT['advantages_btn'] ?></a>
                </div>
                <div class="col-md-7">
                    <?
                    drawAdvantagesItem(400, "fa-users", $TXT['advantages_item_title_1'], $TXT['advantages_item_subtitle_1']);
                    drawAdvantagesItem(600, "fa-random", $TXT['advantages_item_title_2'], $TXT['advantages_item_subtitle_2']);
                    drawAdvantagesItem(400, "fa-taxi", $TXT['advantages_item_title_3'], $TXT['advantages_item_subtitle_3']);
                    drawAdvantagesItem(600, "fa-bus", $TXT['advantages_item_title_4'], $TXT['advantages_item_subtitle_4']);
                    ?>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawAdvantagesItem($duration, $icon, $title, $subtitle)
{
?>
    <div class="col-sm-6 m-b-20 wow fadeInRight" data-wow-delay="<? echo $duration ?>ms" data-wow-duration="1500ms">
        <div class="f-body">
            <div class="f-icon"><span class="fa <? echo $icon ?>"></span></div>
            <div class="f-text">
                <h5><? echo $title ?></h5>
                <p><? echo $subtitle ?></p>
            </div>
        </div>
    </div>
<?
}
