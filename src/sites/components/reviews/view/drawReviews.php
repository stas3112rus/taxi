<?
function drawReviews()
{
    global $TXT;
?>
    <section id="reviews">
        <div class="container">
            <div class="row m-b-40">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <h2><? echo $TXT['reviews_title'] ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 left-content">
                    <div class="testimonial-carousel owl-carousel owl-theme text-center">
                        <?
                        drawReviewsItem("testimonial-icon-1.jpg", $TXT['reviews_alt_1'], $TXT['reviews_review_1'], $TXT['reviews_name_1']);
                        drawReviewsItem("testimonial-icon-2.jpg", $TXT['reviews_alt_2'], $TXT['reviews_review_2'], $TXT['reviews_name_2']);
                        drawReviewsItem("testimonial-icon-3.jpg", $TXT['reviews_alt_3'], $TXT['reviews_review_3'], $TXT['reviews_name_3']);
                        ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="grey-bg p-30">
                        <h4 class="m-b-10"><? echo $TXT['reviews_subtitle'] ?></h4>
                        <p class="m-b-20"><? echo $TXT['reviews_description'] ?></p>
                        <a href="#contact_form" class="btn btn-sm popup-with-form btn-secondary radius green-2">
                            <? echo $TXT['reviews_btn'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawReviewsItem($img, $alt, $reviews, $name)
{
    global $LEVEL;
?>
    <div class="item testimonial">
        <div class="t-icon">
            <img src="<? echo $LEVEL ?>img/<? echo $img ?>" class="img-circle" title="<? echo $alt ?>" alt="<? echo $alt ?>">
        </div>
        <div class="t-content">
            <p class="m-b-20"><?php echo $reviews ?></p>
            <div class="font-20"><? echo $name ?></div>
        </div>
    </div>
<?
}
