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

                        <? drawTopForm() ?>
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
        <button type="submit" class="btn btn-submit btn-theme btn-block pull-right">Заказать</button>
    </div>
<?
}
