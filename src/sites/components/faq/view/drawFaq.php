<?
function drawFaq()
{
    global $TXT;
?>
    <section id="faq" class="page-section">
        <div class="container">
            <div class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                <small><? echo $TXT['faq_subtitle_small'] ?></small>
                <span><? echo $TXT['faq_title'] ?></span>
            </div>

            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                    <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <?
                        drawFaqItem(1, $TXT['faq_question_1'], $TXT['faq_answer_1'], true);
                        drawFaqItem(2, $TXT['faq_question_2'], $TXT['faq_answer_2']);
                        ?>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">
                    <div class="panel-group accordion" id="accordion2" role="tablist" aria-multiselectable="true">
                        <?
                        drawFaqItem(21, $TXT['faq_question_3'], $TXT['faq_answer_3']);
                        drawFaqItem(22, $TXT['faq_question_4'], $TXT['faq_answer_4'], true);
                        drawFaqItem(3, $TXT['faq_question_5'], $TXT['faq_answer_5']);
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?
}

function drawFaqItem($id, $question, $answer, $expanded = false)
{
?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<? echo $id ?>">
            <h4 class="panel-title">
                <a <? echo $expanded ? "" : "class=\"collapsed\"" ?> data-toggle="collapse" data-parent="#accordion" href="#collapse<? echo $id ?>" aria-expanded="<? echo $expanded ? "true" : "false" ?>" aria-controls="collapse<? echo $id ?>">
                    <span class="dot"></span>
                    <? echo $question ?>
                </a>
            </h4>
        </div>
        <div id="collapse<? echo $id ?>" class="panel-collapse collapse <? echo $expanded ? "in" : "" ?>" role="tabpanel" aria-labelledby="heading<? echo $id ?>">
            <div class="panel-body">
                <? echo $answer ?>
            </div>
        </div>
    </div>


<?
}
