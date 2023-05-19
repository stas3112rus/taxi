<?
function drawTopForm($id)
{
    global $TXT;
?>
    <form action="" class="form-style" id="<? echo $id ?>">
        <div id="contact_body">
            <div class="popup_title"><? echo $TXT['top_form_title'] ?></div>

            <?
            drawDateField();
            drawTimeField();
            drawSelectFromField();
            drawSelectToField();
            drawCLassTaxiField();
            drawFieldName();
            drawFieldPhone();
            drawFieldMessage();
            drawButtonSend();
            ?>
        </div>
        <div id="contact_results"></div>
        
        <input type="hidden" id="<? echo $id == "contact_form" ? "g-recaptcha-response" : "g-recaptcha-response-2" ?>" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">
    </form>
<?
}

function drawContactForm()
{
?>
    <form class='ajax-question' id="contact-form" method="post">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-md-12">
                    <? drawFieldPhone(false) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <? drawFieldEmail(false) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <? drawFieldMessage(false) ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <? drawFieldCheck() ?>
                </div>
                <div class="col-md-12">
                    <p><input type="submit" class="btn btn-warning" value="Отправить сообщение"></p>
                </div>
            </div>
        </div>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">
    </form>
<?
}

function drawDateField()
{
?>
    <label class="flatpickr" alt="Когда подать авто *">
        <select class="select-field" name="date">
            <option value="">Когда подать авто</option>

            <?php

            for ($i = 0; $i <= 180; $i++) {
                $date = getRusDate($i);
            ?>
                <option value="<?php echo $date ?>"><?php echo $date ?></option>
            <?php } ?>
        </select>
    </label>
<?
}

function drawTimeField()
{
?>
    <label class="flatpickr" alt="Время подачи  *">
        <select class="select-field" name="mmm">
            <option value="">Время подачи</option>
            <? foreach (getTime() as $time) {
            ?>
                <option value="<?php echo $time ?>"><?php echo $time ?></option>

            <?  } ?>
        </select>
    </label>
<?
}

function getRusDate($plus_day)
{
    global $MONTHS;

    $mes_pod = date('n', strtotime('+' . $plus_day . ' day'));
    $day_pod = date('d', strtotime('+' . $plus_day . ' day'));
    $year_pod = date('Y', strtotime('+' . $plus_day . ' day'));

    $mes_pod_name = $MONTHS[$mes_pod  - 1];

    return $day_pod . " " . $mes_pod_name . " " . $year_pod;
}

function getTime()
{
    $result = [];

    for ($hour = 0; $hour <= 23; $hour++) {
        $full_hours = $hour < 10 ? "0" . $hour : $hour;

        array_push($result, $full_hours . ":00", $full_hours . ":30");
    }

    return $result;
}

function drawSelectFromField()
{
    global $CITY_FROM;
?>
    <label for="subject">
        <select name="subject-from" class="select-field">
            <option value="">Откуда</option>
            <? drawCitiesOptions($CITY_FROM) ?>
        </select>
        <i class="fa fa-globe form-icon" aria-hidden="true"></i>
    </label>
<?
}

function drawSelectToField()
{
    global $CITY_TO;

?>
    <label for="subject">
        <select name="subject-to" class="select-field">
            <option value="">Куда</option>
            <? drawCitiesOptions($CITY_TO) ?>
        </select>

        <i class="fa fa-globe form-icon" aria-hidden="true"></i>
    </label>
<?
}

function drawCitiesOptions($city)
{
    global $ALL_CITIES;

    foreach ($ALL_CITIES as $value) {

        $select = "";

        if ($city['id_city'] == $value['id_city'])
            $select = "selected='selected'";

        echo "<option value='$value[im]' $select>$value[im]</option>";
    }
}

function drawCLassTaxiField()
{
?>
    <label for="taxi" class="taxi">
        <select name="taxi2">
            <option value="">Выберите класс Такси</option>
            <option value="Эконом">Эконом</option>
            <option value="Комфорт">Комфорт</option>
            <option value="Бизнес">Бизнес</option>
            <option value="Микроавтобус">Микроавтобус</option>
        </select>
        <i class="fa fa-car form-icon" aria-hidden="true"></i>
    </label>
<?
}

function drawFieldName()
{
?>

    <label alt="Name *">
        <input type="text" name="name" id="name" required class="input-field" placeholder="Имя *" />
        <i class="fa fa-user-o form-icon" aria-hidden="true"></i>
    </label>
<?
}

function drawFieldPhone()
{
?>
    <label>
        <input type="text" name="phones" maxlength="19" required placeholder="Телефон *" class="tel-number-field long" />
        <i class="fa fa-phone form-icon" aria-hidden="true"></i>
    </label>
<?
}

function drawFieldEmail($icon = true)
{
?>
    <label>
        <input name="email" class="input-field" placeholder="E-mail" type="email">

        <? if ($icon) { ?>
            <i class="fa fa-envelope-o form-icon" aria-hidden="true"></i>
        <? } ?>

    </label>
<?
}

function drawFieldMessage()
{
?>
    <label for="field5">
        <textarea name="message" id="message" class="textarea-field" placeholder="Ваше сообщение *"></textarea>
        <i class="fa fa-commenting-o form-icon" aria-hidden="true"></i>

    </label>
<?
}

function drawFieldCheck()
{
?>
    <label for="field6">
        <input name="check" class="input-field" placeholder="1+1=" type="text">
    </label>
<?
}

function drawButtonSend()
{
?>
    <label>
        <input type="submit" id="submit_btn" class="btn " value="Забронировать" />
    </label>
<?
}
