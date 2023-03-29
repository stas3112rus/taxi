<?
function drawCitiesTable()
{
?>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th scope='col'>№</th>
                <th scope='col' class='cities__mainSiteCol'>Главный сайт</th>
                <th scope='col'>Город</th>
            </tr>
        </thead>
        <tbody>
            <? drawCityRows() ?>
        </tbody>
    </table>
<?
}

function drawCityRows()
{
    $rows = "";
    $count = 1;

    foreach (getAllCities() as $city) {
        $rows .= drawOneCityRow(
            $city,
            $city['main_city'] == '+' ? "checked" : "",
            $count
        );

        $count++;
    }

    return $rows;
}

function drawOneCityRow($city, $checked, $number)
{
    global $routs;
?>
    <tr>
        <th scope='row'>
            <? echo $number ?>
        </th>
        <th scope='row'>
            <input type='radio' class='form-check-input' id='radio<? echo $city['id_city'] ?>' name='main_city' value='<? echo $city['id_city'] ?>' <? echo $checked ?> disabled>
            <label class='form-check-label' for='radio<? echo $city['id_city'] ?>'>Главный сайт</label>
        </th>
        <td>
            <div class='cities__cellWrapper'>
                <div class='cities__cellItem'>
                    <a href="<? echo getMainUrl($city['eng'], $city['main_city']) ?>" target="_blank" class="link-info">
                        <? echo $city['im'] ?>

                    </a>

                </div>
                <div class='cities__cellItem'>
                    <a href='<? echo $routs['engEdit'] ?>?id=<? echo $city['id_city'] ?>' role='button' aria-pressed='true' class='btn btn-primary'>Eng</a>
                    <a href='<? echo $routs['cityEdit'] ?>?id=<? echo $city['id_city'] ?>' role='button' aria-pressed='true' class='btn btn-success'>Редактировать</a>
                    <a href='<? echo $routs['tariffs'] ?>?id=<? echo $city['id_city'] ?>' role='button' aria-pressed='true' class='btn btn-danger'>Тарифы</a>
                    <a href='<? echo $routs['not_published_cities'] ?>?id=<? echo $city['id_city'] ?>' role='button' aria-pressed='true' class='btn btn-warning'>Города, где не публикуем</a>
                </div>
            </div>
        </td>
    </tr>
<?
}
