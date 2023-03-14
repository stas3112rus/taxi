<?
function getAllWidgetsTypes()
{
    $sql = "SELECT 
    *
    FROM `widgets_types`
    ";

    return getAllRowsFromDataBase($sql);
}

function deleteWidgetType($id)
{
    $sql = "DELETE 
    FROM `widgets_types`
    WHERE `id_widget` = '$id';
    ";

    return changeDataBaseRequest($sql, "Ошибка при удалении типа виджета");
}

function updateWidgetType($value)
{
    $showInHeader = $value['showInHeader'] ? 1 : 0;

    $sql = "UPDATE `widgets_types` SET 
    `widget_name`= '$value[widget_name]',
    `showInHeader`=  $showInHeader,
    `comment`= '$value[comment]'

    WHERE `id_widget` = '$value[id_widget]'";

    return changeDataBaseRequest($sql, "Ошибка при обновлении типа виджета");
}

function addWidgetType($value)
{
    $showInHeader = $value['showInHeader'] ? 1 : 0;

    $sql = "INSERT 
    INTO 
    `widgets_types`
        (`widget_name`, `showInHeader`, `comment`) 
    VALUES 
        ('$value[widget_name]', $showInHeader, '$value[comment]')";


    return changeDataBaseRequest($sql, "Ошибка создании типа виджета");
}
