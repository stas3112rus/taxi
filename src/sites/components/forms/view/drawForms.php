<?
function drawTopForm()
{
?>
    <form method="post" class="ajax-contact-form contact_form form-style" id="contact_form-1" action="mail.php">
        <div id="contact_body">
            <label class="flatpickr" alt="Select Date and Time *">
                <input class="input-field flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="date" type="text" placeholder="Выберите дату и время *">
                <i class="fa fa-calendar form-icon" aria-hidden="true"></i>
            </label>
            <label for="subject">
                <select name="subject-from" class="select-field">
                    <option value="">Откуда</option>
                    <option value="Симферополь">Симферополь (аэропорт - город)</option>
                    <option value="Ай-Даниль">Ай-Даниль</option>
                    <option value="Алупка">Алупка</option>
                    <option value="Алушта">Алушта</option>
                    <option value="Армянск">Армянск</option>
                    <option value="Балаклава">Балаклава</option>
                    <option value="Бахчисарай">Бахчисарай</option>
                    <option value="Белогорск">Белогорск</option>
                    <option value="Гаспра">Гаспра</option>
                    <option value="Гурзуф">Гурзуф</option>
                    <option value="Евпатория">Евпатория</option>
                    <option value="Кастрополь">Кастрополь</option>
                    <option value="Кацивели">Кацивели</option>
                    <option value="Кача">Кача</option>
                    <option value="Керчь">Керчь</option>
                    <option value="Коктебель">Коктебель</option>
                    <option value="Курпаты">Курпаты</option>
                    <option value="Ласпи">Ласпи</option>
                    <option value="Ливадия">Ливадия</option>
                    <option value="Любимовка">Любимовка</option>
                    <option value="Малореченское">Малореченское</option>
                    <option value="Меллас">Меллас</option>
                    <option value="Мисхор">Мисхор</option>
                    <option value="Мрия">СКК Мрия Резорт</option>
                    <option value="Николаевка">Николаевка</option>
                    <option value="Новый Свет">Новый Свет</option>
                    <option value="Оползневое">Оползневое (отель Мрия)</option>
                    <option value="Орджоникидзе">Орджоникидзе</option>
                    <option value="Орлиное">Орлиное</option>
                    <option value="Парковое">Парковое</option>
                    <option value="Партенит">Партенит</option>
                    <option value="Понизовка">Понизовка</option>
                    <option value="Поповка">Поповка (Казантип)</option>
                    <option value="Приморский">Приморский (Феодосия)</option>
                    <option value="Рыбачье">Рыбачье</option>
                    <option value="Саки">Саки</option>
                    <option value="Санаторное">Санаторное</option>
                    <option value="Севастополь">Севастополь</option>
                    <option value="Симеиз">Симеиз</option>
                    <option value="Солнечногорское">Солнечногорское</option>
                    <option value="Судак">Судак</option>
                    <option value="Утес">Утес</option>
                    <option value="Учкуевка">Учкуевка</option>
                    <option value="Феодосия">Феодосия</option>
                    <option value="Форос">Форос</option>
                    <option value="Черноморское">Черноморское</option>
                    <option value="Чонгар">Чонгар</option>
                    <option value="Щелкино">Щелкино</option>
                    <option value="Ялта">Ялта</option>
                </select>
            </label>
            <label for="subject">
                <select name="subject-to" class="select-field">
                    <option value="">Куда</option>
                    <option value="Симферополь">Симферополь (аэропорт - город)</option>
                    <option value="Ай-Даниль">Ай-Даниль</option>
                    <option value="Алупка">Алупка</option>
                    <option value="Алушта">Алушта</option>
                    <option value="Армянск">Армянск</option>
                    <option value="Балаклава">Балаклава</option>
                    <option value="Бахчисарай">Бахчисарай</option>
                    <option value="Белогорск">Белогорск</option>
                    <option value="Гаспра">Гаспра</option>
                    <option value="Гурзуф">Гурзуф</option>
                    <option value="Евпатория">Евпатория</option>
                    <option value="Керчь">Керчь</option>
                    <option value="Кастрополь">Кастрополь</option>
                    <option value="Кацивели">Кацивели</option>
                    <option value="Кача">Кача</option>
                    <option value="Коктебель">Коктебель</option>
                    <option value="Курпаты">Курпаты</option>
                    <option value="Ласпи">Ласпи</option>
                    <option value="Ливадия">Ливадия</option>
                    <option value="Любимовка">Любимовка</option>
                    <option value="Малореченское">Малореченское</option>
                    <option value="Меллас">Меллас</option>
                    <option value="Мисхор">Мисхор</option>
                    <option value="Мрия">СКК Мрия Резорт</option>
                    <option value="Николаевка">Николаевка</option>
                    <option value="Новый Свет">Новый Свет</option>
                    <option value="Оползневое">Оползневое (отель Мрия)</option>
                    <option value="Орджоникидзе">Орджоникидзе</option>
                    <option value="Орлиное">Орлиное</option>
                    <option value="Парковое">Парковое</option>
                    <option value="Партенит">Партенит</option>
                    <option value="Понизовка">Понизовка</option>
                    <option value="Поповка">Поповка (Казантип)</option>
                    <option value="Приморский">Приморский (Феодосия)</option>
                    <option value="Рыбачье">Рыбачье</option>
                    <option value="Саки">Саки</option>
                    <option value="Санаторное">Санаторное</option>
                    <option value="Севастополь">Севастополь</option>
                    <option value="Симеиз">Симеиз</option>
                    <option value="Солнечногорское">Солнечногорское</option>
                    <option value="Судак">Судак</option>
                    <option value="Утес">Утес</option>
                    <option value="Учкуевка">Учкуевка</option>
                    <option value="Феодосия">Феодосия</option>
                    <option value="Форос">Форос</option>
                    <option value="Черноморское">Черноморское</option>
                    <option value="Чонгар">Чонгар</option>
                    <option value="Щелкино">Щелкино</option>
                    <option value="Ялта">Ялта</option>
                </select>
            </label>
            <label for="taxi" class="taxi">
                <select name="taxi">
                    <option value="">Выберите класс такси</option>
                    <option value="Standart">Эконом</option>
                    <option value="Komfort">Комфорт</option>
                    <option value="Biznes">Бизнес</option>
                    <option value="BUS-MINIVAN">Микроавтобус</option>
                </select>
            </label>
            <label alt="Name *">
                <input type="text" name="name" id="name" required class="input-field" placeholder="Имя *" />
                <i class="fa fa-user form-icon" aria-hidden="true"></i>
            </label>
            <label>
                <input type="text" name="phones" maxlength="19" required placeholder="Телефон *" class="tel-number-field long" />
                <i class="fa fa-phone form-icon" aria-hidden="true"></i>
            </label>
            <label>
                <input name="email" class="input-field" placeholder="E-mail" type="email">
                <i class="fa fa-envelope-o form-icon" aria-hidden="true"></i>
            </label>
            <label for="field5">
                <textarea name="message" id="message" class="textarea-field" placeholder="Ваше сообщение *"></textarea>
                <i class="fa fa-commenting-o form-icon" aria-hidden="true"></i>
            </label>
            <label for="field6">
                <input name="check" class="input-field" placeholder="1+1=" type="text">
            </label>
            <label>
                <input type="submit" id="submit_btn" class="wbutton" value="ЗАБРОНИРОВАТЬ" />
            </label>
        </div>
    </form>
<?
}
