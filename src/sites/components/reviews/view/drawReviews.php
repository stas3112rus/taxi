<?
function drawReviews()
{
    global $TXT;
?>
    <div class="container-fluid" id="otzivi">
        <div class="container nine_scr">
            <div class="row">
                <div class="col-md-12 text-left six_scr_h3">
                    <h3><? echo $TXT['reviews_title'] ?></h3>
                </div>
            </div>
            <div class="row marg_top_90">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="cd-testimonials-wrapper cd-container">
                        <ul class="cd-testimonials">
                            <?
                            drawReview('olga.png', $TXT['reviews_alt_1'], $TXT['reviews_text_1']);
                            drawReview('pavel.png', $TXT['reviews_alt_2'], $TXT['reviews_text_2']);
                            drawReview('igor.png', $TXT['reviews_alt_3'], $TXT['reviews_text_3']);
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
<?
}

function drawReview($img, $alt, $text)
{
    global $LEVEL;
?>
    <li>
        <div class="row">
            <div class="col-md-3 text-center testimonial_foto">
                <img src="<? echo $LEVEL ?>images/<? echo $img ?>" alt="<? echo $alt ?>" title="<? echo $alt ?>">
            </div>
            <div class="col-md-9 text-left ">
                <? echo $text ?>
            </div>
        </div>
    </li>
<?
}
