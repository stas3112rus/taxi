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
    $deleteTexts = deleteTextsByField($id);

    if ($deleteTexts != 'Ok')
        return  drawAlert($deleteTexts, "alert-danger");

    $deleteTextField = deleteTextField($id);
    if ($deleteTextField != 'Ok')
        return  drawAlert($deleteTextField, "alert-danger");


    return drawAlert("Текстовое поле удалено", "alert-success");
}

function addTextFieldValue($post)
{
    $add = addTextField($post);
    if ($add != 'Ok')
        return  drawAlert($add, "alert-danger");


    return drawAlert("Текстовое поле добавлено", "alert-success");
}
