<?
function drawTextBlock()
{
    global $TXT,  $TEXT_TYPE_INDEX, $LEVEL;
    $img = $TEXT_TYPE_INDEX == 5 ? 'transfer.jpg' : 'airport-taxi.jpg';
?>
    <section id="what-we-do" class="what-we-do gray_bg">
        <div class="container">
            <div class="title-black">О Нас</div>
            <div class="line-orange"></div>
            <div class="clear"></div>
            <div class="what-we-do-block flex">
                <div class="col-2 order-last">
                    <div class="what-we-do-title">
                        <h2><? echo $TXT['text_title'] ?></h2>
                    </div>
                    <div class="what-we-do-desc">
                        <div class="accordion-wrapp">
                            <? echo $TXT['text_first'] ?>

                            <div class="round accordion_title">читать дальше..</div>
                            <div class="accordion_hide" style="display: none" ;>
                                <? echo $TXT['text_second'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 order-first">
                    <img src="<? echo $LEVEL ?>img/<? echo $img ?>" width="400" height="auto" class="aligncenter" title="<? echo $TXT['text_alt'] ?>" alt="<? echo $TXT['text_alt'] ?>" />
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
<?
}
