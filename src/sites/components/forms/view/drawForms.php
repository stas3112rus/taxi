<?
function drawTopForm()
{
    global $TXT;
?>
    <form action="#" id='contact-form'>
        <div class="form-title">
            <i class="fa fa-globe"></i>
            <h3><? echo $TXT['main_block_form_title'] ?></h3>
        </div>

        <div class="row row-inputs">
            <div class="container-fluid">
                <?
                drawDateField();
                drawSelectFromField();
                drawSelectToField();
                drawCLassTaxiField();
                drawFieldName();
                drawFieldPhone();
                drawFieldEmail();
                ?>
                <div class="col-sm-12">
                    <?
                    drawFieldMessage();
                    drawButtonSend();
                    ?>
                </div>
            </div>
        </div>
        <div class="row row-submit">
            <div class="container-fluid">
            </div>
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

    </form>
<?
}

function drawModalForm()
{
?>
    <form action="#" id='contact-form2'>
        <div class="row row-inputs">
            <div class="container-fluid">
                <?
                drawDateField();
                drawSelectFromField();
                drawSelectToField();
                drawCLassTaxiField();
                drawFieldName();
                drawFieldPhone();
                drawFieldEmail();
                ?>
                <div class='col-sm-12'>
                    <?
                    drawFieldMessage();
                    drawButtonSendModal();
                    ?>
                </div>

            </div>
        </div>
        <div class="row row-submit">
            <div class="container-fluid">
            </div>
        </div>
    </form>
<?
}

function drawDateField()
{
?>
    <div class="col-sm-12">
        <div class="form-group has-icon ">
            <input class="input-field  form-control flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="date" type="text" placeholder="Выберите Дату и Время *">
            <span class="form-control-icon"><i class="fa fa-calendar form-icon" aria-hidden="true"></i></span>
        </div>
    </div>
<?
}

function drawSelectFromField()
{
    global $CITY_FROM;
?>
    <div class="col-sm-12">
        <div class="form-group has-icon ">
            <select name="subject-from" class="form-control moz-select">
                <option value="">Откуда такси</option>
                <? drawCitiesOptions($CITY_FROM) ?>
            </select>
            <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
        </div>
    </div>
<?
}

function drawSelectToField()
{
    global $CITY_TO;

?>
    <div class="col-sm-12">
        <div class="form-group has-icon ">
            <select name="subject-to" class="form-control moz-select">
                <option value="">Куда</option>
                <? drawCitiesOptions($CITY_TO) ?>
            </select>
            <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
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
    <div class="col-sm-12">
        <div class="form-group has-icon ">
            <select name="taxi" class="form-control moz-select">
                <option value=''>Выберите класс Такси</option>
                <option value='Econom'>Эконом</option>
                <option value='Komfot'>Комфорт</option>
                <option value='Bussines'>Бизнес</option>
                <option value='Mini-bus'>Микроавтобус</option>
            </select>

            <span class="form-control-icon"><i class="fa fa-car"></i></span>
        </div>
    </div>
<?
}

function drawFieldName()
{
?>
    <div class="col-sm-12">
        <div class="form-group ">
            <input type="text" name='name' class="form-control" id="formSearchUpDate2" placeholder="Имя *">
        </div>
    </div>
<?
}

function drawFieldPhone()
{
?>
    <div class="col-sm-12">
        <div class="form-group has-icon ">
            <!--<label for="formSearchOffLocation2">Телефон</label>-->
            <input type="text" name='phones' class="form-control input-phone" id="formSearchUpDate2" placeholder="Телефон *">
            <span class="form-control-icon"><i class="fa fa-phone"></i></span>
        </div>
    </div>
<?
}

function drawFieldEmail()
{
?>
    <div class="col-sm-12">
        <div class="form-group has-icon ">
            <input type="text" name='email' class="form-control" id="formSearchUpDate2" placeholder="Email *">
            <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
        </div>
    </div>
<?
}

function drawFieldMessage()
{
?>
    <div class="form-group has-icon ">
        <textarea name='message' cols="58" rows="5" placeholder="Ваше сообщение *"></textarea>
        <span class="form-control-icon"><i class="fa fa-comment-o "></i></span>
    </div>
<?
}



function drawButtonSend()
{
?>
    <div class="form-group">
        <button type="submit" class="btn btn-submit ripple-effect btn-theme">Заказать</button>
    </div>
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
