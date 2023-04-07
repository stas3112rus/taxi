<?
function drawFaqs()
{
    global $TXT;
?>
    <section id="why_choose_certified_service" class="why_choose_certified_service extra7">
        <div class="container ">

            <div class="title-black"><? echo $TXT['faq_title'] ?></div>
            <div class="line-orange"></div>
            <div class="subtitle-black  eight center-block">
                <? echo $TXT['faq_subtitle'] ?>
            </div>

            <div class="accordion-wrapp">
                <?
                drawFaq($TXT['faq_question_1'], $TXT['faq_answer_1']);
                drawFaq($TXT['faq_question_2'], $TXT['faq_answer_2']);
                drawFaq($TXT['faq_question_3'], $TXT['faq_answer_3']);
                drawFaq($TXT['faq_question_4'], $TXT['faq_answer_4']);
                drawFaq($TXT['faq_question_5'], $TXT['faq_answer_5']);
                ?>
            </div>
            <div class="clear"></div>
        </div>
    </section>
<?
}

function drawFaq($question, $answer)
{
?>
    <div class="round accordion_title"><? echo $question ?></div>
    <div class="accordion_hide"><? echo $answer ?></div>
<?
}
