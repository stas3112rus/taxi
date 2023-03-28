<?
function drawWidgetForm($city_id)
{
?>
    <form method="post">
        <? drawWidgetTable($city_id) ?>
        <input type="hidden" name="type" value="editWidgets">
        <input type="hidden" name="city_id" value="<? echo $city_id ?>">
        <input class="btn btn-primary" type="submit" value="Обновить">
    </form>
<?
}

function drawWidgetTable($city_id)
{
    $widgetsCodeList = getWidgetCodeListByType(getWidgetsByCityId($city_id));
?> <table class='table table-striped'>
        <tbody>
            <?
            foreach (getAllWidgetsTypes() as $widgetType) {
                drawWidgetRow($widgetType, $widgetsCodeList[$widgetType['id_widget_type']]);
            }
            ?>
        </tbody>
    </table>
<?

}

function drawWidgetRow($widgetType = [], $widgetCode = "")
{
?>
    <tr>
        <th scope='row'>
            <label for="widget_code">
                <? echo $widgetType['widget_name'] ?>
                <? if ($widgetType['comment'])
                    echo "($widgetType[comment])";
                ?>
                (В ХЕДЕРЕ: <? echo $widgetType['showInHeader'] ?  "ДА" :  "НЕТ" ?>)
            </label>
            <textarea class="form-control" name="<? echo $widgetType['id_widget_type'] ?>" id="widget_code" rows="3"><? echo $widgetCode ?></textarea>
        </th>
    </tr>
<?
}
