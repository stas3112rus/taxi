<?
function drawWhy()
{
    global $CURRENT_SITE,  $TXT;
?>
    <section class="why" id="why">
        <div class="col-md-4">
            <img src="<? echo $CURRENT_SITE ?>img/service.png" alt="<? echo $TXT["why_alt"] ?>" title="<? echo $TXT["why_alt"] ?>">
        </div>
        <div class="container">
            <div class="col-md-8">
                <div class="heading">
                    <h2><? echo $TXT["why_h2"] ?></h2>
                </div>
                <? echo $TXT["why_txt"] ?>
            </div>
        </div>
    </section>

    <hr class="lg">
<?
}
