<?
function drawEditCityForm($city)
{
?>
    <form action="" method="post">
        <table class='table table-striped'>
            <tbody>
                <? drawDeclensionCityRows($city) ?>
            </tbody>
        </table>

        <input type="hidden" name="type" value="declensions">
        <input type="hidden" name="id_city" value="<? echo $city['id_city'] ?>">
        <input class="btn btn-primary" type="submit" value="Обновить склонения">
    </form>
<?
}

function drawAddCityForm()
{
?>
    <form action="" method="post">
        <table class='table table-striped'>
            <tbody>
                <? drawAddRows() ?>
                <? drawDeclensionCityRows() ?>
            </tbody>
        </table>

        <input class="btn btn-primary" type="submit" value="Добавить город">
    </form>
<?
}

function drawDeclensionCityRows($city = [])
{
?>
    <tr>
        <th scope='row' style='width: 200px;'>Именительный <br>(Кто? Что?)</th>
        <td>
            <input type='text' class='form-control' placeholder='Именительный' aria-label='Именительный' aria-describedby='basic-addon1' name='im' value='<? echo $city['im'] ?? '' ?>' required>
        </td>
    </tr>
    <tr>
        <th scope='row'>Родительный <br>(Кого? Чего?)</th>
        <td>
            <input type='text' class='form-control' placeholder='Родительный' aria-label='Родительный' aria-describedby='basic-addon1' name='rod' value='<? echo $city['rod'] ?? '' ?>' required>
        </td>
    </tr>
    <tr>
        <th scope='row'>Дательный <br>(Кому? Чему?)</th>
        <td>
            <input type='text' class='form-control' placeholder='Дательный' aria-label='Дательный' aria-describedby='basic-addon1' name='dat' value='<? echo $city['dat'] ?? '' ?>' required>
        </td>
    </tr>
    <tr>
        <th scope='row'>Винительный <br>(Кого? Что?)</th>
        <td>
            <input type='text' class='form-control' placeholder='Винительный' aria-label='Винительный' aria-describedby='basic-addon1' name='vin' value='<? echo $city['vin'] ?? '' ?>' required>
        </td>
    </tr>
    <tr>
        <th scope='row'>Творительный <br>(Кем? Чем?)</th>
        <td>
            <input type='text' class='form-control' placeholder='Именительный' aria-label='Именительный' aria-describedby='basic-addon1' name='tvor' value='<? echo $city['tvor'] ?? '' ?>' required>
        </td>
    </tr>
    <tr>
        <th scope='row'>Предложный <br>(О ком? О Чём?)</th>
        <td>
            <input type='text' class='form-control' placeholder='Предложный' aria-label='Предложный' aria-describedby='basic-addon1' name='pred' value='<? echo $city['pred'] ?? '' ?>' required>
        </td>
    </tr>
    <tr>
        <th scope='row'>Улица</th>
        <td>
            <input type='text' class='form-control' placeholder='Улица' aria-label='Улица' aria-describedby='basic-addon1' name='street' value='<? echo $city['street'] ?? '' ?>'>
        </td>
    </tr>
<?
}

function drawAddRows()
{
?>
    <tr>
        <th scope='row'>Город для основы тарифов</th>
        <td>
            <? drawBasicCitySelectOption() ?>
        </td>
    </tr>
    <tr>
        <th scope='row'>English</th>
        <td>
            <input type='text' class='form-control' placeholder='English' aria-label='English' aria-describedby='basic-addon1' name='eng' required>
        </td>
    </tr>
<?
}

function drawBasicCitySelectOption()
{
?>
    <select class="form-control" name="basic-city-id">
        <option value="">Без базового города</option>
        <? foreach (getAllCities() as $city) { ?>
            <option value="<? echo $city['id_city'] ?>">
                <? echo $city['im'] ?>
            </option>
        <? } ?>
    </select>
<?
}
