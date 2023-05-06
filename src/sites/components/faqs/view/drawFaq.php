<?
function drawFaq()
{
    global $TXT;
?>
    <section id="faq" class="light-bg">
        <div class="container">
            <div class="row m-b-40">
                <div class="col-md-8 col-sm-12 col-md-offset-2 text-center">
                    <h2><? echo $TXT['faq_title'] ?></h2>
                    <p class="lead">
                        <? echo $TXT['faq_subtitle'] ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <?
                drawFaqItem($TXT['faq_question_1'], $TXT['faq_answer_1']);
                drawFaqItem($TXT['faq_question_2'], $TXT['faq_answer_2']);
                ?>
            </div>
            <div class="row">
                <?
                drawFaqItem($TXT['faq_question_3'], $TXT['faq_answer_3']);
                drawFaqItem($TXT['faq_question_4'], $TXT['faq_answer_4']);
                ?>
            </div>
        </div>
    </section>
<?
}

function drawFaqItem($question, $answer)
{
?>
    <div class="col-md-6">
        <h5 class="no-m-b"><?php echo $question ?></h5>
        <p class="lead"><?php echo $answer ?></p>
    </div>
<?
}
