<?
function drawHeroArea()
{
    global $TXT;
?>
    <div class="hero-area text-left">
        <div class="hero-text">
            <h1><?php echo mb_strtoupper($TXT['H1']) ?></h1>
            <p><strong><?php echo mb_strtoupper($TXT['main_subtitle']) ?></strong></p>
        </div>
        <div class="welcome-btn">
            <a href="#price-table" class="carspace-btn page-scroll">
                <? echo mb_strtoupper($TXT['main_button']) ?>
            </a>
        </div>
    </div>
<?
}
