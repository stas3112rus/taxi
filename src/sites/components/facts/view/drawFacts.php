<?
function drawFacts()
{
    global $TXT, $LEVEL;
?>
    <div class="container  position-relative text-center">
        <h2 class="box-header text-shadow"><? echo $TXT['facts_title'] ?></h2>
        <div class="row">
            <?
            drawFact("fa-plane", $TXT['facts_count_1'], $TXT['facts_fact_1']);
            drawFact("fa-smile-o", $TXT['facts_count_2'], $TXT['facts_fact_2']);
            drawFact("fa-taxi", $TXT['facts_count_3'], $TXT['facts_fact_3']);
            drawFact("fa-users", $TXT['facts_count_4'], $TXT['facts_fact_4']);
            ?>
        </div>
    </div>
    <section id="facts" class="counter-section parallax position-relative" style="background-image: url(<? echo $LEVEL ?>images/section_bg.jpg); color:#fff;">
        <div class="opacity-dark bg-black"></div>
    </section>
<?
}

function drawFact($icon, $count, $fact)
{
?>
    <div class="col-sm-3 counter-item"> <i class="fa <? echo $icon ?>" aria-hidden="true"></i> <br>
        <span class="number"><? echo $count ?></span> <br>
        <? echo $fact ?>
    </div>
<?
}
