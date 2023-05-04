<?
function drawTopForm()
{
?>
    <form id="form">
        <div class="">
            <div class="col-md-5">
                <? drawSelectFromField() ?>
            </div>
            <div class="col-md-5">
                <? drawSelectToField() ?>
            </div>
            <div class="col-md-5">
                <? drawClassAutoField() ?>
            </div>
            <div class="col-md-5">
                <? drawDataTimePickerField() ?>
            </div>

            <div class="col-md-5">
                <? drawPhoneField() ?>
            </div>
            <div class="col-md-5">
                <? drawMailField() ?>
            </div>
            <div class="col-md-6">
                <? drawMessageField() ?>
            </div>
            <div class="btn-send">
                <? drawButtonSend() ?>
            </div>
        </div>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">
    </form>
<?
}

function drawBottomForm()
{
?>
    <form id="form2">
        <div class="">
            <div class="col-md-5">
                <? drawSelectFromField() ?>
            </div>

            <div class="col-md-5">
                <? drawSelectToField() ?>
            </div>

            <div class="col-md-5">
                <? drawPhoneField() ?>
            </div>

            <div class="col-md-5">
                <? drawDataTimePickerField() ?>
            </div>
            <div class="col-md-12">
                <? drawClassAutoField() ?>
            </div>

            <div class="col-md-12">
                <? drawMessageField() ?>
            </div>
            <div class="col-md-12">
                <p class="send">
                    <? drawButtonSend() ?>
                </p>
            </div>


        </div>
        <input type="hidden" id="g-recaptcha-response-2" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">
    </form>
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

function drawSelectFromField()
{
    global $CITY_FROM;
?>
    <label>
        <span class="address">
            <select name="from" class="select-field">
                <option value="">Откуда</option>
                <?
                drawCitiesOptions($CITY_FROM)
                ?>
            </select>
        </span>
    </label>
<?
}

function drawSelectToField()
{
    global $CITY_TO;

?>
    <label>
        <span class="address">
            <select name="too" class="select-field">
                <option value="">Куда</option>
                <?
                drawCitiesOptions($CITY_TO)
                ?>
            </select>
        </span>
    </label>
<?
}

function drawClassAutoField()
{
?>
    <label>
        <span class="address class-auto">
            <select name="car" class="select-field">
                <option value="">Класс Авто</option>
                <option value="Эконом">Эконом</option>
                <option value="Комфорт">Комфорт</option>
                <option value="Минивен">Минивен</option>
                <option value="Бизнес">Бизнес</option>
                <option value="VIP">VIP</option>
            </select>
        </span>
    </label>
<?
}

function drawDataTimePickerField()
{
?>
    <label>
        <span class="date">
            <input class="flatpickr flatpickr-input" id="flatpickr" data-enabletime="true" data-time_24hr="true" data-timeformat="H:i" name="date" type="text" placeholder="Дата и время выезда *" readonly="readonly">
        </span>
    </label>
<?
}

function drawPhoneField()
{
?>
    <label>
        <span class="phone">
            <input type="text" required name="phone" value="" size="40" placeholder="Ваш телефон">
        </span>
    </label>
<?
}

function drawMessageField()
{
?>
    <label>
        <span class="message">
            <textarea name="msg" type="text" placeholder="Ваше сообщение"></textarea>
        </span>
    </label>
<?
}

function drawMailField()
{
?>
    <label>
        <span class="email">
            <input type="text" name="email" value="" size="40" placeholder="Ваш Email">
        </span>
    </label>
<?
}

function drawButtonSend()
{
?>
    <button class="submit" type="submit">
        <i class="fa fa-send"></i>
        Заказать такси
    </button>
<?
}
