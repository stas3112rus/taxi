<?
function drawFaqs()
{
    global $TXT;
?>
    <section id="faq" class="faq section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carspace-header text-center">
                        <div class="title"><? echo $TXT['faq_title'] ?></div>
                        <p><? echo $TXT['faq_subtitle'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-area">
                        <div id="accordion">
                            <?
                            drawFaqBlock("One", $TXT['faq_question_1'], $TXT['faq_answer_1']);
                            drawFaqBlock("Two", $TXT['faq_question_2'], $TXT['faq_answer_2']);
                            drawFaqBlock("Three", $TXT['faq_question_3'], $TXT['faq_answer_3']);
                            drawFaqBlock("Four", $TXT['faq_question_4'], $TXT['faq_answer_4']);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawFaqBlock($mark, $question, $answer)
{
?>
    <div class="card f-bottom">
        <div class="card-header" id="heading<? echo $mark ?>">
            <h5 class="mb-0">
                <a class="btn collapsed" data-toggle="collapse" data-target="#collapse<? echo $mark ?>" aria-expanded="false" aria-controls="collapse<? echo $mark ?>">

                    <?php echo $question ?>

                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </a>
            </h5>
        </div>
        <div id="collapse<? echo $mark ?>" class="collapse" aria-labelledby="heading<? echo $mark ?>" data-parent="#accordion">
            <div class="card-body">
                <?php echo $answer ?>
            </div>
        </div>
    </div>
<?
}
