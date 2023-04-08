<?
function drawCountSection()
{
    global $TXT;
?>
    <section class="countdown-area section-padding">
        <div class="carspace-overlay"></div>
        <div class="container">
            <div class="row">
                <?
                drawCountBlock("users", $TXT['counter-value-1'], $TXT['counter-title-1']);
                drawCountBlock("car", $TXT['counter-value-2'], $TXT['counter-title-2']);
                drawCountBlock("exchange", $TXT['counter-value-3'], $TXT['counter-title-3']);
                drawCountBlock("comments-o", $TXT['counter-value-4'], $TXT['counter-title-4']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawCountBlock($icon, $value, $title)
{
?>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="countdown text-center">
            <i class="fa fa-<? echo  $icon ?>"></i>
            <h1 class="counter"><? echo $value ?></h1>
            <h5><? echo $title ?></h5>
        </div>
    </div>
<?
}
