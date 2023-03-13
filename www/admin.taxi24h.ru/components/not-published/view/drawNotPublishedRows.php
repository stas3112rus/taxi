<?
function drawNotPublishedRows($cities)
{
    foreach ($cities as $city) {
?>
        <tr>
            <th scope='row'>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<? echo $city['id']?>" id="flexCheckDefault" name="not_published[]" <? if ($city['not_public']) echo "checked"?>>
                    <label class="form-check-label" for="flexCheckDefault">
                        <?echo $city['im']?>
                    </label>
                </div>
            </th>
        </tr>
<? }
}
