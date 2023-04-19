<?
function drawTopForm()
{
    global $TXT, $LEVEL;
?>
    <div id="zakazat_taxi"></div>
    <div class="" id="homepage-block-2">
        <div class="container">
            <h3 style="font-weight: 600;"><? echo $TXT['form_title'] ?></h3>
            <form class="forms form-validate" id="contact-form" action="<? echo $LEVEL ?>mail.php" method="post">
                <div class="form__grid">
                    <?
                    drawDateField();
                    drawSelectFromField();
                    drawSelectToField();
                    drawFieldName();
                    drawFieldPhone();
                    drawFieldEmail();
                    drawCLassTaxiField();
                    drawFieldMessage();
                    ?>
                </div>
                <? drawButtonSend($TXT['form_button']) ?>
            </form>
        </div>
    </div>
<?
}

function drawDateField()
{
?>
    <div class="form__item">
        <input class="input-field flatpickr flatpickr-input" data-enabletime="true" data-time_24hr="true" data-timeformat="H:i" name="date_poezdki" type="text" placeholder="Выберите Дату и Время *" readonly>

        <span class="fa fa-calendar form-icon"></span>
    </div>
<?
}


function drawSelectFromField()
{
    global $CITY_FROM;
?>
    <div class="form__item">
        <select name="poezdka_from">
            <option value="">Откуда такси</option>
            <optgroup label="Основные направления">
                <? drawMainDirection() ?>
            </optgroup>
            <optgroup label="Другие направления">
                <? drawCitiesOptions($CITY_FROM) ?>
            </optgroup>
        </select>
        <span class="fa fa-map-marker"></span>
    </div>
<?
}

function drawSelectToField()
{
    global $CITY_TO;

?>
    <div class="form__item">
        <select name="poezdka_to">
            <option value="">Куда такси</option>
            <optgroup label="Основные направления">
                <? drawMainDirection() ?>
            </optgroup>
            <optgroup label="Другие направления">
                <? drawCitiesOptions($CITY_TO) ?>
            </optgroup>
        </select>
        <span class="fa fa-map-marker"></span>
    </div>
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

function drawMainDirection()
{
    global $CITY_FROM, $CITY_TO;
?>
    <option value="<? echo $CITY_FROM['im'] ?>"><? echo $CITY_FROM['im'] ?></option>
    <?
    if ($CITY_TO) {
    ?>
        <option value="<? echo $CITY_TO['im'] ?>"><? echo $CITY_TO['im'] ?></option>
    <?
    }
}

function drawCLassTaxiField()
{
    ?>
    <div class="form__item">
        <select name="klass_avto">
            <option value="">Выберите класс Такси</option>
            <option value="Стандарт">Стандарт</option>
            <option value="Комфорт">Комфорт</option>
            <option value="Бизнес">Бизнес</option>
            <option value="МИНИВЕН">Микроавтобус</option>
        </select>
        <span class="fa fa-car"></span>
    </div>
<?
}

function drawFieldName()
{
?>
    <div class="form__item">
        <input type="text" value="" name="name" placeholder="Имя" class="ajaxField" required>
        <span class="fa fa-user"></span>
    </div>
<?
}

function drawFieldPhone()
{
?>
    <div class="form__item">
        <input type="text" value="" name="phones" placeholder="Телефон" class="ajaxField" required>
        <span class="fa fa-phone"></span>
    </div>
<?
}

function drawFieldEmail()
{
?>
    <div class="form__item">
        <input type="text" value="" name="email" placeholder="Email" class="ajaxField">
        <span class="fa fa-envelope"></span>
    </div>
<?
}

function drawFieldMessage()
{
?>
    <div class="form__item form__message">
        <input type="text" value="" name="message" placeholder="Ваше сообщение" class="ajaxField">
        <span class="fa fa-car"></span>
    </div>
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

function drawButtonSend($text)
{
?>
    <input type="submit" class="btn btn-yellow btn-bg-dark btn-lg form__btn" value="<? echo $text ?>">
<?
}
