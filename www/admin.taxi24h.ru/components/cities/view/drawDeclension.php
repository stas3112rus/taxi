<?
function drawDeclensionForm($city)
{
?>
    <form action="" method="post">
        <? drawDeclensionCityTable($city) ?>
        <input type="hidden" name="type" value="declensions">
        <input type="hidden" name="id_city" value="<? echo $city['id_city'] ?>">
        <input class="btn btn-primary" type="submit" value="Обновить склонения">
    </form>
<?
}

function drawDeclensionCityTable($city)
{
?>
    <table class='table table-striped'>
        <tbody>
            <tr>
                <th scope='row' style='width: 200px;'>Именительный</th>
                <td>
                    <input type='text' class='form-control' placeholder='Именительный' aria-label='Именительный' aria-describedby='basic-addon1' name='im' value='<? echo $city['im'] ?? '' ?>'>
                </td>
            </tr>
            <tr>
                <th scope='row'>Родительный</th>
                <td>
                    <input type='text' class='form-control' placeholder='Родительный' aria-label='Родительный' aria-describedby='basic-addon1' name='rod' value='<? echo $city['rod'] ?? '' ?>'>
                </td>
            </tr>
            <tr>
                <th scope='row'>Дательный</th>
                <td>
                    <input type='text' class='form-control' placeholder='Дательный' aria-label='Дательный' aria-describedby='basic-addon1' name='dat' value='<? echo $city['dat'] ?? '' ?>'>
                </td>
            </tr>
            <tr>
                <th scope='row'>Винительный</th>
                <td>
                    <input type='text' class='form-control' placeholder='Винительный' aria-label='Винительный' aria-describedby='basic-addon1' name='vin' value='<? echo $city['vin'] ?? '' ?>'>
                </td>
            </tr>
            <tr>
                <th scope='row'>Творительный</th>
                <td>
                    <input type='text' class='form-control' placeholder='Именительный' aria-label='Именительный' aria-describedby='basic-addon1' name='tvor' value='<? echo $city['tvor'] ?? '' ?>'>
                </td>
            </tr>
            <tr>
                <th scope='row'>Предложный</th>
                <td>
                    <input type='text' class='form-control' placeholder='Предложный' aria-label='Предложный' aria-describedby='basic-addon1' name='pred' value='<? echo $city['pred'] ?? '' ?>'>
                </td>
            </tr>
        </tbody>
    </table>
<?
}
