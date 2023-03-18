<?
function getAllDefaults()
{
    $sql = "SELECT 
    *
    FROM `defaults`
    ";

    return getAllRowsFromDataBase($sql);
}

function deleteDefault($id)
{
    $sql = "DELETE 
    FROM `defaults`
    WHERE `id_default` = '$id';
    ";
    return changeDataBaseRequest($sql, "Ошибка при удалении значения по умолчанию");
}

function updateDefault($default)
{
    $default = trimValues($default);
    $sql = "UPDATE `defaults` SET 
    `default_name`= '$default[default_name]',
    `default_value`='$default[default_value]',
    `comment`='$default[comment]'

    WHERE `id_default` = '$default[id_default]'";

    return changeDataBaseRequest($sql, "Ошибка при обновлении значения по умолчанию");
}

function addDefault($default)
{
    $default = trimValues($default);
    $sql = "INSERT 
    INTO 
    `defaults`
        (`default_name`, `default_value`, `comment`) 
    VALUES 
        ('$default[default_name]','$default[default_value]', '$default[comment]')";
    return changeDataBaseRequest($sql, "Ошибка создании значения по умолчанию");
}
