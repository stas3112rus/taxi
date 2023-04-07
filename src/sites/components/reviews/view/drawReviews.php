<?
function drawReviews()
{
    global $TXT;
?>
    <section class="rewiev gray_bg" id="reviews">
        <div class="title-black ">Отзывы О Нас</div>
        <div class="line-orange "></div>
        <div class="rewiev_about_us">
            <?
            drawReview("airport-taxi-1.jpg", $TXT['review-alt-1'], $TXT['review-name-1'], $TXT['review-text-1']);
            drawReview("airport-taxi-2.jpg", $TXT['review-alt-2'], $TXT['review-name-2'], $TXT['review-text-2']);
            drawReview("airport-taxi-3.jpg", $TXT['review-alt-3'], $TXT['review-name-3'], $TXT['review-text-3']);
            ?>
        </div>
        <div class="clear"></div>
    </section>
<?
}

function drawReview($img, $alt, $name, $review)
{
    global $LEVEL;
?>
    <div class="item_block">
        <img src="<? echo $LEVEL ?>img/<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>" class="aligncenter">
        <div class="item_content">
            <div class="title"><b><? echo $name ?></b></div>
            <div class="line-orange text_left line-left  "></div>
            <div class="subtitle">
                <? echo $review ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
<?
}
