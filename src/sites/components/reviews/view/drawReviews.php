<?
function drawReviews()
{
    global $TXT;

    if ($TXT['reviews_show_reviews']) {
?>
        <section id="reviews" class="page-section testimonials">
            <div class="container wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
                <div class="testimonials-carousel">
                    <div class="owl-carousel" id="testimonials">
                        <?
                        drawReviewItem("testimonial-140x140x1.jpg", $TXT['reviews_alt_1'], $TXT['reviews_text_1'],  $TXT['reviews_name_1'], $TXT['reviews_position_1']);
                        drawReviewItem("testimonial-140x140x2.jpg", $TXT['reviews_alt_2'], $TXT['reviews_text_2'],  $TXT['reviews_name_2'], $TXT['reviews_position_2']);
                        drawReviewItem("testimonial-140x140x3.jpg", $TXT['reviews_alt_3'], $TXT['reviews_text_3'],  $TXT['reviews_name_3'], $TXT['reviews_position_3']);
                        drawReviewItem("testimonial-140x140x4.jpg", $TXT['reviews_alt_4'], $TXT['reviews_text_4'],  $TXT['reviews_name_4'], $TXT['reviews_position_4']);
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?
    }
}

function drawReviewItem($img, $alt, $review, $name, $position)
{
    global $LEVEL;
    ?>
    <div class="testimonial">
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object testimonial-avatar" src="<? echo $LEVEL ?>assets\img\preview\avatars\<? echo $img ?>" title="<? echo $alt ?>" alt="<? echo $alt ?>">
                </a>
            </div>
            <div class="media-body">
                <div class="testimonial-text"><? echo $review ?></div>
                <div class="testimonial-name"><? echo $name ?> <span class="testimonial-position"><? echo $position ?></span></div>
            </div>
        </div>
    </div>
<?
}
