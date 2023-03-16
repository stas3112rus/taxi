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
    $deleteWidgetsByType= deleteWidgetsByTypeId($id);

    if ($deleteWidgetsByType != 'Ok'){
        return  drawAlert($deleteWidgetsByType, "alert-danger");
    }
    
    $deleteWidgetType = deleteWidgetType($id);
    if ($deleteWidgetType != 'Ok')
        return  drawAlert($deleteWidgetType, "alert-danger");


    return drawAlert("Тип виджета удален", "alert-success");
}

function addWidgetTypeValue($post)
{
    $add = addWidgetType($post);
    if ($add != 'Ok')
        return  drawAlert($add, "alert-danger");


    return drawAlert("Тип виджета добавлен", "alert-success");
}
