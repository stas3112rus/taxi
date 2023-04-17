<?
function drawMainBlock()
{
    global $TXT;
?>
    <section class="home  home-taxi " id="home">
        <div class="container relative header-home">
            <div>
                <h2><? echo mb_strtoupper($TXT['main_block_title'])  ?></h2>
            </div>
            <div class="white-popup-block-right">
                <? drawTopForm("contact_form") ?>
                <div class="clear"></div>
            </div>
        </div>
    </section>
<?
}
