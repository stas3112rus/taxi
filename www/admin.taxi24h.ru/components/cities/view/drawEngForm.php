<?
function drawEngForm($city)
{
?>
    <form action="" method="post">
        <table class='table table-striped'>
            <tbody>
                <tr>
                    <th scope='row' style='width: 200px;'>ENG</th>
                    <td>
                        <input type='text' class='form-control' placeholder='ENG' aria-label='ENG' aria-describedby='basic-addon1' name='new_city_eng' value='<? echo $city['eng'] ?? '' ?>' required>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="old_city_eng" value="<? echo $city['eng'] ?>">

        <input type="hidden" name="id_city" value="<? echo $city['id_city'] ?>">
        <input class="btn btn-primary" type="submit" value="Обновить ENG">
    </form>
<?
}
