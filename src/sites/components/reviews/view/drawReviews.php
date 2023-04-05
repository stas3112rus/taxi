<?
function drawReviews()
{
    global $TXT;
?>
    <section class="testimonial section-padding" id="testimonial">
        <div class="carspace-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carspace-header overlay-text text-center">
                        <div class="title"><? echo $TXT['review_title'] ?></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="review-slide owl-carousel">
                        <?
                        drawReview("testimonial-1.jpg", $TXT['review_alt_1'],  $TXT['review_name_1'], $TXT['review_text_1']);
                        drawReview("testimonial-2.jpg", $TXT['review_alt_2'],  $TXT['review_name_2'], $TXT['review_text_2']);
                        drawReview("testimonial-3.jpg", $TXT['review_alt_3'],  $TXT['review_name_3'], $TXT['review_text_3']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawReview($img, $alt, $name, $review)
{
    global $LEVEL;
?>
    <div class="testimonial-area text-center">
        <div class="member">
            <img src="<? echo $LEVEL ?>assets/img/<? echo $img ?>" class="img-fluid" title="<? echo $alt ?>" alt="<? echo $alt ?>">
            <h5><? echo $name ?></h5>
        </div>
        <div class="review-text">
            <?php echo $review ?>
        </div>
    </div>
<?
}
