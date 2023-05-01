<?
function drawTopForm($title)
{
?>
    <form action="" class="form-style" id="contact_form">
        <div id="contact_body">
            <div class="popup_title"><? echo $title ?></div>
            <?
            drawDateField();
            drawSelectFromField();
            drawSelectToField();
            drawFieldName();
            drawFieldPhone();
            drawFieldEmail();
            drawFieldMessage();
            drawButtonSend();
            ?>
        </div>
        <div id="contact_results"></div>
    </form>
<?
}

function drawContactForm()
{
?>
    <form id="contact_form_2" method="POST" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-6">
                <input type="text" class="form-control mob_control" id="phone" name="phone" placeholder="Ваш телефон">
            </div>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="e_mail" name="email" placeholder="Ваш Email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <textarea name="message" class="form-control" rows="4" cols="50" placeholder="Ваше сообщение"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center mb30">
                <button class="btn theme_btn">ОТПРАВИТЬ СООБЩЕНИЕ</button>
            </div>
        </div>
    </form>
<?
}

function drawDateField()
{
?>
    <label class="flatpickr flatpickr-input" alt="Select Date and Time *" readonly="readonly">
        <input class="input-field flatpickr flatpickr-input" data-enabletime="true" data-time_24hr="true" data-timeformat="H:i" name="date" type="text" placeholder="Выберите Дату и Время *" readonly>
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
        <input type="text" name="name" id="name" required class="input-field" placeholder="Имя *">
        <i class="fa fa-user-o form-icon" aria-hidden="true"></i>
    </label>
<?
}

function drawFieldPhone()
{
?>
    <label>
        <input type="text" name="phones" maxlength="19" required placeholder="Телефон *" class="tel-number-field long">
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
        <input type="submit" id="submit_btn" class="btn " value="Забронировать">
    </label>
<?
}
