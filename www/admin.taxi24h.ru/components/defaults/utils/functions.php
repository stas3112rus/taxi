<?
function updateDefaultValue($post)
{
    $update = updateDefault($post);
    if ($update != 'Ok')
        return  drawAlert($update, "alert-danger");


    return drawAlert("Значения по умолчанию обновлено", "alert-success");
}

function deleteDefaultValue($id)
{
    $delete = deleteDefault($id);
    if ( $delete != 'Ok')
        return  drawAlert( $delete, "alert-danger");


    return drawAlert("Значения по умолчанию удалено", "alert-success");
}

function addDefaultValue($post)
{
    $add = addDefault($post);
    if ( $add != 'Ok')
        return  drawAlert(  $add, "alert-danger");


    return drawAlert("Значения по умолчанию добавлено", "alert-success");
}