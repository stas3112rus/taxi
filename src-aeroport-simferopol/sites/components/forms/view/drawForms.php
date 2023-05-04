<?
function drawTopForm()
{
?>
    <form method="post" class="ajax-contact-form contact_form form-style" id="contact_form-1" action="mail.php">
        <div id="contact_body">
            <?
            drawDatePicker();
            drawSelectFromField();
            drawSelectToField();
            drawCLassTaxiField();
            drawFieldName();
            drawFieldPhone();
            drawFieldEmail();
            drawFieldMessage();
            drawFieldCheck();
            drawButtonSend();

            ?>
        </div>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
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
        <input type="hidden" id="g-recaptcha-response-2" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">

    </form>
<?
}

function drawDatePicker()
{
?>
    <label class="flatpickr" alt="Select Date and Time *">
        <input class="input-field flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="date" type="text" placeholder="Выберите дату и время *">
        <i class="fa fa-calendar form-icon" aria-hidden="true"></i>
    </label>
<?
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
        <select name="taxi">
            <option value="">Выберите класс такси</option>
            <option value="Standart">Эконом</option>
            <option value="Komfort">Комфорт</option>
            <option value="Biznes">Бизнес</option>
            <option value="BUS-MINIVAN">Микроавтобус</option>
            <option value="VIP">VIP</option>
        </select>
    </label>
<?
}



function drawFieldName()
{
?>
    <label alt="Name *">
        <input type="text" name="name" id="name" required class="input-field" placeholder="Имя *" />
        <i class="fa fa-user form-icon" aria-hidden="true"></i>
    </label>
<?
}
function drawFieldPhone($icon = true)
{
?>
    <label>
        <input type="text" name="phones" maxlength="19" required placeholder="Телефон *" class="tel-number-field long" />
        <? if ($icon) { ?>
            <i class="fa fa-phone form-icon" aria-hidden="true"></i>
        <? } ?>
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
function drawFieldMessage($icon = true)
{
?>
    <label for="field5">
        <textarea name="message" id="message" class="textarea-field" placeholder="Ваше сообщение *"></textarea>
        <? if ($icon) { ?>
            <i class="fa fa-commenting-o form-icon" aria-hidden="true"></i>
        <? } ?>
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
        <input type="submit" id="submit_btn" class="wbutton" value="ЗАБРОНИРОВАТЬ" />
    </label>
<?
}
