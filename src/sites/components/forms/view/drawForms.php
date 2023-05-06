<?
function drawTopForm($popup = false)
{
?>
    <form class="contact_form form-style <? echo $popup ? "mfp-hide white-popup-block" : "" ?> " id="contact_form">
        <div id="contact_body">
            <?
            drawDateField();
            drawSelectFromField();
            drawSelectToField();
            drawCLassTaxiField();
            drawFieldName();
            drawFieldPhone();
            drawFieldEmail();
            drawFieldMessage();
            drawButtonSend();
            ?>
        </div>
        <div id="contact_results"></div>
        </div>
    </form>
<?
}

function drawContactForm()
{
?>
    <form name="contact-form" method="post" class="contact-form" id="contact-form3">

        <div class="row">
            <div class="col-md-6">

                <div class="outer">
                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="name">Имя</label>
                        <input type="text" name="name" id="name" placeholder="Имя" value="" size="30" data-toggle="tooltip" title="Name is required" class="form-control placeholder">
                        <span class="form-control-icon"><i class="fa fa-user"></i></span>
                    </div>
                </div>

            </div>
            <div class="col-md-6">

                <div class="outer">
                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" class="form-control placeholder">
                        <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group af-inner has-icon">
            <label class="sr-only" for="input-message">Ваш вопрос</label>
            <textarea name="message" id="input-message" placeholder="Ваш вопрос" rows="5" data-toggle="tooltip" title="Message is required" class="form-control placeholder"></textarea>
            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
        </div>

        <div class="outer required">
            <div class="form-group af-inner">
                <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark" id="submit_btn" value="Задать вопрос">
            </div>
        </div>
        <input type="hidden" id="g-recaptcha-response-2" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">


    </form>
<?
}



function drawDateField()
{
?>
    <label class="flatpickr" alt="Select Date and Time *">
        <input class="input-field flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="date" type="text" placeholder="Выберите Дату и Время *">
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
        <select name="taxi">
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
        <input type="text" name="phones" maxlength="19" required placeholder="Телефон *" class="tel-number-field long input-phone" />
        <i class="fa fa-phone form-icon" aria-hidden="true"></i>
    </label>
<?
}

function drawFieldEmail()
{
?>
    <label>
        <input name="email" class="input-field" placeholder="E-mail" type="email">
        <i class="fa fa-envelope-o form-icon" aria-hidden="true"></i>
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



function drawButtonSend()
{
?>
    <label>
        <input type="submit" id="submit_btn" class="btn" value="ЗАБРОНИРОВАТЬ" />
    </label>
<?
}

function drawButtonSendModal()
{
?>

    <div class='form-group'>
        <button type="submit" id="formSearchSubmit2" class="btn btn-submit ripple-effect btn-theme">Отправить</button>
    </div>
<?
}
