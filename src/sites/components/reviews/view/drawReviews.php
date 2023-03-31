<?
function drawReviews()
{
    global $TXT, $CURRENT_SITE;
?>
    <div class="main" id="rev">
        <div class="section">
            <div class="section-title">
                <h3><? echo $TXT['reviews_title'] ?></h3>
                <hr class="short">
            </div>
            <div class="main-gallery">
                <div class="gallery-cell">
                    <div class="testimonial-section">
                        <div class="avatar"><img src="<?echo $CURRENT_SITE?>img\images\avatar1.jpg" title="<?echo $TXT['review_1_alt']?>" alt="<?echo $TXT['review_1_alt']?>"></div>
                        <div class="testimonial-quote">
                            <p>"<?echo $TXT['review_1_value']?>"</p>
                        </div>
                        <div class="autor">
                            <h5><?echo $TXT['review_1_name']?></h5>
                        </div>
                    </div>
                </div>
                <div class="gallery-cell">
                    <div class="testimonial-section">
                        <div class="avatar"><img src="<?echo $CURRENT_SITE?>img\images\avatar2.jpg" title="<?echo $TXT['review_1_alt']?>" alt="<?echo $TXT['review_1_alt']?>"></div>
                        <div class="testimonial-quote">
                            <p>"<?echo $TXT['review_1_value']?>"</p>
                        </div>
                        <div class="autor">
                            <h5><?echo $TXT['review_1_name']?></h5>
                        </div>
                    </div>
                </div>
                <div class="gallery-cell">
                    <div class="testimonial-section">
                        <div class="avatar"><img src="<?echo $CURRENT_SITE?>img\images\avatar3.jpg" title="<?echo $TXT['review_1_alt']?>" alt="<?echo $TXT['review_1_alt']?>"></div>
                        <div class="testimonial-quote">
                            <p>"<?echo $TXT['review_1_value']?>"</p>
                        </div>
                        <div class="autor">
                            <h5><?echo $TXT['review_1_name']?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?
}
