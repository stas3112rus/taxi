<?
function drawTopForm()
{
    global  $TXT;
?>
    <form method="POST" class="order-form">
        <div class="row">
            <div class="col-lg-12">
                <h3><? echo $TXT['top_form_title'] ?></h3>
            </div>
            <div class="col-lg-12">
                <div class="form-group has-icon ">
                    <? drawSelectFromField() ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group has-icon ">
                    <? drawSelectToField() ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group has-icon ">
                    <? drawCLassTaxiField() ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group has-icon ">
                    <? drawDatePicker() ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="form-group ">
                        <? drawFieldName() ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <? drawFieldPhone() ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <? drawFieldEmail() ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <? drawFieldMessage() ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="picking-btn text-center">
                    <? drawButtonSend() ?>
                </div>
            </div>
        </div>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">
    </form>
<?
}

function drawContactForm()
{
?>
    <form class="cmxform" id="contact-form-footer" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ваше имя" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ваш телефон" name="tel" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Ваш email" name="email" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <textarea class="form-control" rows="6" placeholder="Сообщение" name="message" required></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="confirm">
                    <button type="submit" class="carspace-btn submit" value="submit">Отправить</button>
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
    <input class="input-field  form-control flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="date" type="text" placeholder="Выберите Дату и Время *">

<?
}

function drawSelectFromField()
{
    global $CITY_FROM;
?>
    <select name="subject-from" class="form-control moz-select">
        <option value="">Откуда</option>
        <? drawCitiesOptions($CITY_FROM) ?>
    </select>
<?
}

function drawSelectToField()
{
    global $CITY_TO;

?>
    <select name="subject-to" class="form-control moz-select">
        <option value="">Куда</option>
        <? drawCitiesOptions($CITY_TO) ?>
    </select>
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
    <select name="taxi" class="form-control moz-select">
        <option value=''>Выберите класс Такси</option>
        <option value='Econom'>Эконом</option>
        <option value='Komfot'>Комфорт</option>
        <option value='Bussines'>Бизнес</option>
        <option value='Mini-bus'>Микроавтобус</option>
    </select>
<?
}



function drawFieldName()
{
?>
    <input type="text" name='name' class="form-control" id="formSearchUpDate2" placeholder="Имя *">

<?
}
function drawFieldPhone()
{
?>
    <input type="text" name='phones' class="form-control input-phone" id="formSearchUpDate2" placeholder="Телефон *">
<?
}
function drawFieldEmail()
{
?>
    <input type="text" name='email' class="form-control" id="formSearchUpDate2" placeholder="Email *">
<?
}
function drawFieldMessage()
{
?>
    <textarea class="form-control" name='message' cols="58" rows="5" placeholder="Ваше сообщение *"></textarea>
<?
}

function drawButtonSend()
{
?>
    <button type="submit" class="carspace-btn">Заказать такси</button>
<?
}
