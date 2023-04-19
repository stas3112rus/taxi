<?
function drawMainBlock()
{
    global $TXT, $LEVEL;
?>
    <div id="homepage-block-2" class="bgMove" style="background-image: url(<? echo $LEVEL ?>assets/images/bg.jpg);">
        <div class="container">
            <h1><?php echo mb_strtoupper($TXT['main_block_title']) ?></h1>
            <h3><?php echo mb_strtoupper($TXT['main_block_subtitle']) ?></h3>
            <? drawTopForm() ?>
        </div>
    </div>
<?
}
