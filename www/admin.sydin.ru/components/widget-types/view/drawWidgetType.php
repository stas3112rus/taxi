<?
function drawWidgetTypes()
{
?>
    <table class='table table-striped'>
        <tbody>
            <?
            foreach (getAllWidgetsTypes() as $value) {
                drawWidgetTypeForm($value);
            }
            ?>
        </tbody>
    </table>
<?
}

function drawAddWidgetType()
{
?>
    <table class='table table-striped'>
        <tbody>
            <form method="post">
                <tr>
                    <? drawWidgetTypeFields() ?>
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

function drawWidgetTypeForm($value)
{
?>
    <form method="post">
        <tr>
            <? drawWidgetTypeFields($value) ?>
            <th scope='row' class="buttons">
                <div class="buttons__block">
                    <input type="hidden" name="id_widget_type" value="<? echo $value['id_widget_type'] ?>">
                    <input type="hidden" name="type" value="update">
                    <input class="btn btn-primary" type="submit" value="Изменить">
                    <a href="./?type=delete&id_widget_type=<? echo $value['id_widget_type'] ?>" role="button" aria-pressed="true" class="btn btn-danger">Удалить</a>
                </div>
            </th>
        </tr>
    </form>
<?
}

function drawWidgetTypeFields($value = [])
{
?>
    <th scope='row'>

        <input class="form-check-input" type="checkbox" id="showInHeader_<? echo $value['id_widget_type'] ?>" name="showInHeader" <? if ($value['showInHeader']) echo "checked" ?>> <br>
        <label class="form-check-label" for="showInHeader_<? echo  $value['id_widget_type'] ?>">
            В хедере
        </label>
    </th>
    <th scope='row'>
        <label for="widget_name">Название типа виджета</label>
        <input type="text" value="<? echo $value['widget_name'] ?>" class="form-control" id="widget_name" name="widget_name" aria-describedby="widgetName" placeholder="Название типа виджета" required>

    </th>
    <th scope='row'>
        <label for="comment">Комментарий</label>
        <input type="text" value="<? echo $value['comment'] ?>" class="form-control" id="comment" name="comment" aria-describedby="constantComment" placeholder="Комментарий">
    </th>

<?
}
