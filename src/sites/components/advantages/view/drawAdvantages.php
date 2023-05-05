<?
function drawAdvantages()
{
    global $TXT;
?>
    <section class="page-section dark" id="thumbnail">
        <div class="container">
            <div class="row">
                <?
                drawAdvantagesItem("fa-shield", $TXT['advantage_title_1'], $TXT['advantage_subtitle_1']);
                drawAdvantagesItem("fa-calendar", $TXT['advantage_title_2'], $TXT['advantage_subtitle_2']);
                drawAdvantagesItem("fa-random", $TXT['advantage_title_3'], $TXT['advantage_subtitle_3']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawAdvantagesItem($icon, $title, $subtitle)
{
?>
    <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s">
        <div class="thumbnail thumbnail-featured no-border no-padding">
            <div class="media">
                <a class="media-link custom-scroll" href="#price-table">
                    <div class="caption">
                        <div class="caption-wrapper div-table">
                            <div class="caption-inner div-cell">
                                <div class="caption-icon"><i class="fa <? echo $icon ?>"></i></div>
                                <h4 class="caption-title"><? echo $title ?></h4>
                                <div class="caption-text"><? echo $subtitle ?></div>
                                <div class="buttons">
                                    <span class="btn btn-theme ripple-effect btn-theme-transparent custom-scroll">узнать стоимость</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="caption hovered">
                        <div class="caption-wrapper div-table">
                            <div class="caption-inner div-cell">
                                <div class="caption-icon"><i class="fa <? echo $icon ?>"></i></div>
                                <h4 class="caption-title"><? echo $title ?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?
}
