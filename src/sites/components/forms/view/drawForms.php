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
