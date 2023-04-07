<?
function drawDiscountBlock()
{
    global $TXT, $STOP_DISCOUNT_FOR_TIMER;
?>
    <section class="discont-1 select_transparent no_padding gray_bg flex overflow-hidden">
        <div class="six no_padding no_margin line-height0">
            <div class="airport-taxi "></div>
            <div class="clear"></div>
        </div>
        <div class="six no_margin content_text text_center">
            <div class="title-black  text_style relative">
                <? echo $TXT['discount_title'] ?>
            </div>
            <div class="subtitle-black  text_style">
                <? echo $TXT['discount_subtitle'] ?>
            </div>

            <div class="timer">
                <div class="stop_timer" style="display: none;"><? echo $STOP_DISCOUNT_FOR_TIMER ?></div>
                <div class="day_block">
                    <div class="day">00</div>
                    <div class="desc">Дней</div>
                </div>
                <div class="hour_block">
                    <div class="hour">00</div>
                    <div class="desc">Часов</div>
                </div>
                <div class="min_block">
                    <div class="min">00</div>
                    <div class="desc">Минут</div>
                </div>
                <div class="sec_block">
                    <div class="sec">00</div>
                    <div class="desc">Секунд</div>
                </div>
            </div>

            <div class="clear space50"></div>
            <div class="text_center"><a class="btn popup-modal" href="#order-time">
                    <? echo $TXT['discount_button'] ?>
                </a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </section>
<?
}
