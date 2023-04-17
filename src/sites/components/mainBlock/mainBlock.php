<?
function drawMainBlock()
{
    global $TXT;
?>
    <header id="header" class="jarallax big_screen">
        <div class="container">
            <div class="row">
                <section id="home">
                    <div class="container">
                        <div class="row">
                            <div class="layout3 text-center">
                                <h1><?php echo $TXT['main_block_h1'] ?></h1>
                                <h2 class="mb40"><?php echo $TXT['main_block_subtitle'] ?></h2>
                            </div>
                            <div class="col-md-offset-8 col-sm-12 col-md-4">
                                <div class="white-popup-block-right">
                                    <? drawTopForm($TXT['main_block_form_title']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </header>
<?
}
