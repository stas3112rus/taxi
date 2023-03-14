<?
function updateTextFieldValue($post)
{
    $update = updateTextField($post);
    if ($update != 'Ok')
        return  drawAlert($update, "alert-danger");


    return drawAlert("Текстовое поле обновлено", "alert-success");
}

function deleteTextFieldValue($id)
{
    $delete = deleteTextField($id);
    if ($delete != 'Ok')
        return  drawAlert($delete, "alert-danger");


    return drawAlert("Текстовое поле удалено", "alert-success");
}

function addTextFieldValue($post)
{
    $add = addTextField($post);
    if ($add != 'Ok')
        return  drawAlert($add, "alert-danger");


    return drawAlert("Текстовое поле добавлено", "alert-success");
}
