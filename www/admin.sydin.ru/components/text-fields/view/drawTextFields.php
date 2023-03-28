<?
function drawTextFields()
{
?>
    <table class='table table-striped'>
        <tbody>
            <?
            foreach (getAllTextFields() as $value) {
                drawTextFieldForm($value);
            }
            ?>
        </tbody>
    </table>
<?
}

function drawAddTextField()
{
?>
    <table class='table table-striped'>
        <tbody>
            <form method="post">
                <tr>
                    <? drawTextFieldFields() ?>
                    <th scope='row' class="buttons">
                        <div class="buttons__block">

                            <input type="hidden" name="type" value="add">
                            <input class="btn btn-primary" type="submit" value="Добавить">
                        </div>
                    </th>
                </tr>
            </form>
        </tbody>
    </table>
<?
}

function drawTextFieldForm($value)
{
?>
    <form method="post">
        <tr>
            <? drawTextFieldFields($value) ?>
            <th scope='row' class="buttons">
                <div class="buttons__block">
                    <input type="hidden" name="id_text_field" value="<? echo $value['id_text_field'] ?>">
                    <input type="hidden" name="type" value="update">
                    <input class="btn btn-primary" type="submit" value="Изменить">
                    <a href="./?type=delete&id_text_field=<? echo $value['id_text_field'] ?>" role="button" aria-pressed="true" class="btn btn-danger">Удалить</a>
                </div>
            </th>
        </tr>
    </form>
<?
}

function drawTextFieldFields($value = [])
{
?>

    <th scope='row'>
        <label for="field_name">Имя поля (eng)</label>
        <input type="text" value="<? echo $value['field_name'] ?>" class="form-control" id="field_name" name="field_name" aria-describedby="fieldName" placeholder="Имя поля (eng)" required>

    </th>
    <th scope='row'>
        <label for="comment">Комментарий</label>
        <input type="text" value="<? echo $value['comment'] ?>" class="form-control" id="comment" name="comment" aria-describedby="constantComment" placeholder="Комментарий">
    </th>

<?
}
