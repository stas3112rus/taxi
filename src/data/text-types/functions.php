<?
function getAllTextTypes()
{
    $sql = "SELECT 
    *
    FROM `text_types`
    ";

    return getAllRowsFromDataBase($sql);
}

function isTextTypes($id)
{
    $sql = "SELECT 
    *
    FROM `text_types`
    WHERE `id_text_type` = '$id'
    ";

    return isExist($sql);
}

function getTextType($id)
{
    $sql = "SELECT 
    *
    FROM `text_types`
    WHERE `id_text_type` = '$id'
    ";

    return getOneRowFromDataBase($sql);
}
