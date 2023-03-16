<?
function drawNotPublishedForm($city_from_id)
{
?>
    <form method="post">
        <? drawNotPublishedTable($city_from_id) ?>
        <input type="hidden" name="id_city" value="<? echo $city_from_id?>">
        <input class="btn btn-primary" type="submit" value="Города, где не публикуем">
    </form>
<?
}

function drawNotPublishedTable($city_from_id)
{
?>
    <table class='table table-striped'>
        <tbody>
            <? drawNotPublishedRows(
                getNotPublishedList($city_from_id)
            ) ?>
        </tbody>
    </table>
    <?
}


function drawNotPublishedRows($cities)
{
    foreach ($cities as $city) {
    ?>
        <tr>
            <th scope='row'>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<? echo $city['id'] ?>" id="flexCheckDefault" name="not_published[]" <? if ($city['not_public']) echo "checked" ?>>
                    <label class="form-check-label" for="flexCheckDefault">
                        <? echo $city['im'] ?>
                    </label>
                </div>
            </th>
        </tr>
<? }
}
