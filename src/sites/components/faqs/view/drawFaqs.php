<?
function drawFaqs()
{
    global $TXT;
?>
    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h5 class="text-center"><? echo $TXT['faqs_title'] ?></h5>
                    <div class="col-xs-12 text-center">
                    </div>
                </div>
            </div>
            <div class="row valign_wrapper">
                <div class="col-sm-12">
                    <div class="accordion" id="only-one">
                        <?
                        drawFaqItem($TXT['faqs_question_1'], $TXT['faqs_answer_1'], 1, false);
                        drawFaqItem($TXT['faqs_question_2'], $TXT['faqs_answer_2'], 2);
                        drawFaqItem($TXT['faqs_question_3'], $TXT['faqs_answer_3'], 3);
                        drawFaqItem($TXT['faqs_question_4'], $TXT['faqs_answer_4'], 4);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}

function drawFaqItem($question, $answer, $id, $default = true)
{
?>
    <div class="panel<? if ($default) echo " panel-default" ?>">
        <div class="title">
            <a data-toggle="collapse" data-parent="#only-one" href="#collapse<? echo $id ?>" <? if (!$default) echo 'aria-expanded="true"'  ?>><?php echo $question ?></a>
        </div>
        <div id="collapse<? echo $id ?>" class="panel-collapse collapse in">
            <div class="panel-body desc">
                <p>
                    <?php echo $answer ?>
                </p>
            </div>
        </div>
    </div>
<?
}
