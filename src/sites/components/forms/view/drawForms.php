<?
function drawTopForm($recaptcha_id = "")
{
?>
    <form class="contact_form form-style" id="contact_form">
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
        <input type="hidden" id="g-recaptcha-response<? echo $recaptcha_id ?>" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">
    </form>
<?
}

function drawContactForm()
{
    global $TXT, $LEVEL;
?>
    <section class="counter-section parallax position-relative" style="background-image: url(<? echo $LEVEL ?>images/section_bg.jpg); color:#fff;">
        <div class="opacity-dark bg-black"></div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="signup-box">
                    <div class="signup-box-headling">
                        <h2><? echo  $TXT['bottom_form_title'] ?></h2>
                        <span class="arrow-down"></span>
                    </div>
                    <div class="signup-box-body">

                        <? drawTopForm(2) ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

            </div>
        </div>
    </section>
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
            <option value="Standart">Эконом</option>
            <option value="Komfort">Комфорт</option>
            <option value="Biznes">Бизнес</option>
            <option value="BUS-MINIVAN">Микроавтобус</option>
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
        <input type="submit" id="submit_btn" class="wbutton" value="ЗАБРОНИРОВАТЬ" />
    </label>
<?
}
