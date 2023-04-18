<?
function drawReviews()
{
    global $TXT;
?>
    <section id="our_clients">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h5 class="text-center"><? echo $TXT['reviews_title'] ?></h5>
                    <div class="col-xs-12 text-center">
                        <p><? echo $TXT['reviews_subtitle'] ?></p>
                    </div>
                </div>
            </div>
            <div class="review">
                <?
                drawReviewItem($TXT['reviews_review_1'], $TXT['reviews_review_1'], "client1.png", $TXT['reviews_name_1']);
                drawReviewItem($TXT['reviews_review_2'], $TXT['reviews_review_2'], "client2.png", $TXT['reviews_name_2']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawReviewItem($review, $alt, $img, $name)
{
    global $LEVEL;
?>
    <div class="item">
        <div class="client_comment mb40 text-center">
            <?php echo $review ?>
        </div>
        <ul class="client_data">
            <li>
                <div class="client_img">
                    <img class="img-responsive" src="<? echo $LEVEL ?>assets/images/<? echo $img ?>" alt="<? echo $alt ?>" title="<? echo $alt ?>">
                </div>
                <div class="client_detail">
                    <span><? echo $name ?></span>
                </div>
            </li>
        </ul>
    </div>
<?
}
