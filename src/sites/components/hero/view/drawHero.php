<?
function drawHero()
{
    global $TXT;

?>
    <section id="hero" class="hero-section bg1 bg-cover window-height light-text">
        <div class="container">
            <h1><? echo $TXT["h1"] ?></h1>
            <div class="hero-section_preheder">
                <? echo $TXT["hero_section_preheder"] ?>
            </div>
            <div class="top-form">
                <div class="screen-reader-response"></div>
                <? drawTopForm() ?>
            </div>
        </div>
        <div class="msg">Оператор свяжется с вами в ближайшее время!</div>
    </section>
<?

}
