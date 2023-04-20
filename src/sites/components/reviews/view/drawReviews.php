<?
function drawReviews()
{
    global $TXT;
?>
    <section id="testimonials">
        <hr class="lg">
        <div class="container">
            <h2 class="h1"><? echo $TXT['reviews_title'] ?></h2>
            <h4 class="yellow"><? echo $TXT['reviews_subtitle'] ?></h4>
            <div class="swiper-container row" id="testimonials-slider">
                <div class="swiper-wrapper">
                    <?
                    drawReviewItem($TXT['reviews_review_1'], $TXT['reviews_name_1'], $TXT['reviews_alt_1'], "_client-1.jpg");
                    drawReviewItem($TXT['reviews_review_2'], $TXT['reviews_name_2'], $TXT['reviews_alt_2'], "_client-2.jpg");
                    drawReviewItem($TXT['reviews_review_3'], $TXT['reviews_name_3'], $TXT['reviews_alt_3'], "_client-3.jpg");
                    drawReviewItem($TXT['reviews_review_4'], $TXT['reviews_name_4'], $TXT['reviews_alt_4'], "_client-4.jpg");
                    ?>
                </div>
                <div class="arrows">
                    <a href="#" class="arrow-left fa fa-caret-left"></a>
                    <a href="#" class="arrow-right fa fa-caret-right"></a>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawReviewItem($review, $name, $alt, $img)
{
    global $LEVEL;
?>
    <div class="col-md-4 col-sm-6 swiper-slide">
        <div class="inner matchHeight">
            <div class="text">
                <p><? echo $review ?></p>
            </div>
            <div class="quote">
                <span class="fa fa-quote-left"></span>
                <div class="name"><? echo $name ?></div>
                <img src="<? echo $LEVEL ?>assets\images\<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
            </div>
        </div>
    </div>
<?
}
