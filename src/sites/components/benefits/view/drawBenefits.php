<?
function drawBenefits()
{
    global $TXT, $LEVEL;
?>
    <section class="bg-grey features">
        <div class="container text-center">
            <div class="row section-header">
                <h2 class="box-header"><? echo $TXT['benefits_title'] ?></h2>
                <div class="description col-md-8 col-md-offset-2">
                    <? echo $TXT['benefits_subtitle'] ?>
                </div>
            </div>
            <div class="row">
                <?
                drawBenefit("delivery-man.svg", $TXT['benefit_title-1'], $TXT['benefit_subtitle-1'], $TXT['benefit_alt_1']);
                drawBenefit("icon.svg", $TXT['benefit_title-2'], $TXT['benefit_subtitle-2'], $TXT['benefit_alt_2']);
                drawBenefit("stopwatch.svg", $TXT['benefit_title-3'], $TXT['benefit_subtitle-3'], $TXT['benefit_alt_3']);
                drawBenefit("no-smoking.svg", $TXT['benefit_title-4'], $TXT['benefit_subtitle-4'], $TXT['benefit_alt_4']);
                ?>
            </div>
            <div class="row">
                <img src="<? echo $LEVEL ?>images/comfort.png" title="<? echo $TXT['benefits_alt'] ?>" alt="<? echo $TXT['benefits_alt'] ?>">
            </div>
        </div>
    </section>
<?
}

function drawBenefit($img, $title, $subtitle, $alt = false)
{
    global $LEVEL;
?>
    <div class="col-sm-3 benefit">
        <span class="icon-features"><img src="<? echo $LEVEL ?>images/<? echo $img ?>" alt="<? echo $alt ?>"></span>
        <h3><? echo $title ?></h3>
        <p><? echo $subtitle ?></p>
    </div>
<?
}
