<?
function getAllTextTypes()
{
    $sql = "SELECT 
    *
    FROM `text_types`
    ";

    return getAllRowsFromDataBase($sql);
}
