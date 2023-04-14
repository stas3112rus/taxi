<?
function drawReviews()
{
    global $TXT;
?>
    <section id="reviews" class="testimonial bg-grey">
        <div class="container position-relative">
            <h2 class="box-header"><? echo $TXT['reviews_title'] ?></h2>
            <div class="box-item">
                <?
                drawReview("client2.jpg", $TXT['reviews_alt_1'], $TXT['reviews_review_1'], $TXT['reviews_name_1']);
                drawReview("client.jpg", $TXT['reviews_alt_2'], $TXT['reviews_review_2'], $TXT['reviews_name_2']);
                drawReview("client3.jpg", $TXT['reviews_alt_3'], $TXT['reviews_review_3'], $TXT['reviews_name_3']);
                ?>
            </div>
    </section>
<?
}

function drawReview($img, $alt, $review, $name)
{
    global $LEVEL;
?>
    <div class="item">
        <div class="testimonial-photo">
            <img src="<? echo $LEVEL ?>images/<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
        </div>
        <div class="testimonial-text">
            <i class="fa fa-quote-left"></i>
            <?php echo $review ?>
            <i class="fa fa-quote-right"></i>
        </div>
        <div class="testimonial-author" style="font-size: 180%;">
            <? echo $name ?>
        </div>
    </div>
<?
}
