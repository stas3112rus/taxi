<?
function updateWidgetTypeValue($post)
{
    $update = updateWidgetType($post);
    if ($update != 'Ok')
        return  drawAlert($update, "alert-danger");


    return drawAlert("Тип виджета обновлен", "alert-success");
}

function deleteWidgetTypeValue($id)
{
    $delete = deleteWidgetType($id);
    if ($delete != 'Ok')
        return  drawAlert($delete, "alert-danger");


    return drawAlert("Тип виджета удален", "alert-success");
}

function addWidgetTypeValue($post)
{
    $add = addWidgetType($post);
    if ($add != 'Ok')
        return  drawAlert($add, "alert-danger");


    return drawAlert("Тип виджета добавлен", "alert-success");
}
