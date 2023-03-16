<?
function drawDefaults()
{
?>
    <table class='table table-striped'>
        <tbody>
            <?
            foreach (getAllDefaults() as $default) {
                drawDefaultForm($default);
            }
            ?>
        </tbody>
    </table>
<?
}

function drawAddDefault()
{
?>
    <table class='table table-striped'>
        <tbody>
            <form method="post">
                <tr>
                    <? drawDefaultFields() ?>
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

function drawDefaultForm($default)
{
?>
    <form method="post">
        <tr>
            <? drawDefaultFields($default) ?>
            <th scope='row' class="buttons">
                <div class="buttons__block">
                    <input type="hidden" name="id_default" value="<? echo $default['id_default'] ?>">
                    <input type="hidden" name="type" value="update">
                    <input class="btn btn-primary" type="submit" value="Изменить">
                    <a href="./?type=delete&id_default=<? echo $default['id_default'] ?>" role="button" aria-pressed="true" class="btn btn-danger">Удалить</a>
                </div>
            </th>
        </tr>
    </form>
<?
}

function drawDefaultFields($default = [])
{
?>
    <th scope='row'>
        <label for="default_name">Название константы ENG</label>
        <input type="text" value="<? echo $default['default_name'] ?>" class="form-control" id="default_name" name="default_name" aria-describedby="defaultName" placeholder="Название константы ENG" required>

    </th>
    <th scope='row'>
        <label for="default_value">Значение Константы</label>
        <input type="text" value="<? echo $default['default_value'] ?>" class="form-control" id="default_value" name="default_value" aria-describedby="defaultValue" placeholder="Значение Константы" r required>
    </th>
    <th scope='row'>
        <label for="comment">Комментарий</label>
        <input type="text" value="<? echo $default['comment'] ?>" class="form-control" id="comment" name="comment" aria-describedby="comment" placeholder="Комментарий">
    </th>
<?
}
