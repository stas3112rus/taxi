<?
function drawCitiesTable($cities, $routs)
{

    $rows = "";

    foreach ($cities as $city) {
        $rows .= drawCityRow(
            $city,
            $city['main_city'] == '+' ? "checked" : "",
            $routs
        );
    }

    return ("
            <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col' class='cities__mainSiteCol'>Главный сайт</th>
                    <th scope='col'>Город</th>
                </tr>
            </thead>
            <tbody>            
                $rows
            </tbody>
        </table>
            "
    );
}

function drawCityRow($city, $checked, $routs)
{
    return ("
                <tr>
                    <th scope='row'>
                        <input 
                            type='radio' 
                            class='form-check-input' 
                            id='radio$city[id_city]' 
                            name='main_city' 
                            value='$city[id_city]'
                            $checked
                            >
                        <label class='form-check-label' for='radio$city[id_city]'>Главный сайт</label>
                    </th>
                    <td>
                        <div class='cities__cellWrapper'>
                            <div class='cities__cellItem'>
                                $city[im]
                            </div>
                            <div class='cities__cellItem'>
                                <a href='$routs[engEdit]?id=$city[id_city]' role='button' aria-pressed='true' class='btn btn-primary'>Eng</a>
                                <a href='$routs[cityEdit]?id=$city[id_city]' role='button' aria-pressed='true' class='btn btn-success'>Редактировать</a>
                                <a href='$routs[tariffs]?id=$city[id_city]' role='button' aria-pressed='true' class='btn btn-danger'>Тарифы</a>
                                <a href='$routs[not_published_cities]?id=$city[id_city]' role='button' aria-pressed='true' class='btn btn-warning'>Города, где не публикуем</a>
                            </div>
                        </div>
                    </td>
                </tr>
            "
    );
}
