<?
function drawTopForm()
{
?>
    <form class="form-validate" id="contact-form">
        <div class="row forms">
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
        <? drawButtonSend() ?>
        <input type="hidden" id="type" name="type" value="2" class="ajaxField">
    </form>
<?
}

function drawContactForm()
{
    global $CITY_FROM, $CITY_TO;
?>
    <div id="order-time" class="white-popup-block mfp-hide">
        <form action="" class="form-style" id="contact_form_2">
            <div id="contact_body_2">
                <div class="popup_title">Забронировать сейчас</div>
                <label class="flatpickr" alt="Select Date and Time *">
                    <input class="input-field flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="date" type="text" placeholder="Выберите Дату и Время *">
                    <i class="fa fa-calendar form-icon" aria-hidden="true"></i>
                </label>


                <label for="subject-from">
                    <select class='myselect' name='subject-from'>
                        <option value="">Откуда</option>
                        <? drawCitiesOptions($CITY_FROM) ?>
                    </select>
                    <i class="fa fa-map-marker form-icon" aria-hidden="true"></i>
                </label>
                <label for="subject-to">
                    <select class='myselect' name="subject-to">
                        <option value="">Куда</option>
                        <? drawCitiesOptions($CITY_TO) ?>
                    </select>
                    <i class="fa fa-map-marker form-icon" aria-hidden="true"></i>
                </label>
                <label alt="Name *">
                    <select name="taxi" class="myselect">
                        <option value=''>Выберите класс Такси</option>
                        <option value='Standart'>Эконом</option>
                        <option value='Komfort'>Комфорт</option>
                        <option value='Biznes'>Бизнес</option>
                        <option value='BUS-MINIVAN'>Микроавтобус</option>
                    </select>
                    <i class="fa fa-car form-icon" aria-hidden="true"></i>
                </label>

                <label alt="Name *">
                    <input type="text" name="name" id="name" class="input-field" placeholder="Имя *" />
                    <i class="fa fa-user form-icon" aria-hidden="true"></i>
                </label>
                <label>
                    <input type="text" name="phones" maxlength="19" required placeholder="Телефон *" class="tel-number-field long" />
                    <i class="fa fa-phone form-icon" aria-hidden="true"></i>
                </label>

                <label>
                    <input name="email" class="input-field" placeholder="E-mail *" type="email">
                    <i class="fa fa-envelope form-icon" aria-hidden="true"></i>
                </label>
                <label for="field5">
                    <textarea name="message" id="message" class="textarea-field" placeholder="Сообщение *"></textarea>
                    <i class="fa fa-commenting form-icon" aria-hidden="true"></i>
                </label>
                <label>
                    <input type="submit" id="submit_btn_2" class="btn" value="Забронировать" /> </label>
            </div>
            <div id="contact_results_2"></div>
        </form>
    </div>
<?
}

function drawDateField()
{
?>
    <div class="col-md-4">
        <input class="input-field flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="date" type="text" placeholder="Выберите Дату и Время *" style="margin-bottom: 24px;">
        <i class="fa fa-calendar form-icon" aria-hidden="true"></i>
    </div>
<?
}

function  drawSelectFromField()
{
    global $CITY_FROM;
?>
    <div class="col-md-4">
        <div class="form-group">
            <select name="subject-from">
                <option value="">Откуда такси</option>
                <? drawCitiesOptions($CITY_FROM) ?>
            </select>
            <span class="fa fa-map-marker"></span>
        </div>
    </div>
<?
}

function drawSelectToField()
{
    global $CITY_TO;
?>
    <div class="col-md-4">
        <div class="form-group">
            <select name="subject-to">
                <option value="">Куда такси</option>
                <? drawCitiesOptions($CITY_TO) ?>
            </select>
            <span class="fa fa-map-marker"></span>
        </div>
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

function drawCLassTaxiField()
{
?>
    <div class="col-md-4">
        <div class="form-group">

            <select name="taxi">
                <option value=''>Выберите класс Такси</option>
                <option value='Standart'>Эконом</option>
                <option value='Komfort'>Комфорт</option>
                <option value='Biznes'>Бизнес</option>
                <option value='BUS-MINIVAN'>Микроавтобус</option>
            </select>
            <span class="fa fa-car"></span>
        </div>
    </div>
<?
}

function drawFieldName()
{
?>
    <div class="col-md-4">
        <div class="form-group">
            <input type="text" value="" name="name" placeholder="Имя" class="ajaxField required"><span class="fa fa-user"></span>
        </div>
    </div>
<?
}

function drawFieldPhone()
{
?>
    <div class="col-md-4">
        <div class="form-group">
            <input type="text" value="" name="phones" placeholder="Телефон" class="ajaxField required"><span class="fa fa-phone"></span>
        </div>
    </div>
<?
}

function drawFieldEmail()
{
?>
    <div class="col-md-4">
        <div class="form-group">
            <input type="email" value="" name="email" placeholder="Email" class="ajaxField"><span class="fa fa-envelope"></span>
        </div>
    </div>
<?
}

function drawFieldMessage()
{
?>
    <div class="col-md-8">
        <div class="form-group">
            <input type="text" value="" name="message" placeholder="Ваше сообщение" class="ajaxField"><span class="fa fa-car"></span>
        </div>
    </div>
<?
}

function drawButtonSend()
{
?>
    <input type="submit" class="btn btn-yellow btn-bg-dark btn-lg" value="Узнать стоимость">
<?
}
