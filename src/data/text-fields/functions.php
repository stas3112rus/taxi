<?
function getAllTextFields()
{
    $sql = "SELECT 
    *
    FROM `text_fields`
    ";

    return getAllRowsFromDataBase($sql);
}

function deleteTextField($id)
{
    $sql = "DELETE 
    FROM `text_fields`
    WHERE `id_text_field` = '$id';
    ";
    return changeDataBaseRequest($sql, "Ошибка при удалении текстового поля");
}

function updateTextField($value)
{
    $value = trimValues($value);

    $sql = "UPDATE `text_fields` SET 
    `field_name`= '$value[field_name]',
    `comment`='$value[comment]'

    WHERE `id_text_field` = '$value[id_text_field]'";

    return changeDataBaseRequest($sql, "Ошибка при обновлении текстового поля");
}

function addTextField($value)
{
    $value = trimValues($value);

    $sql = "INSERT 
    INTO 
    `text_fields`
        (`field_name`,  `comment`) 
    VALUES 
        ('$value[field_name]', '$value[comment]')";
    return changeDataBaseRequest($sql, "Ошибка создании текстового поля");
}

function migrationTextFields($values)
{
    $sql = "INSERT INTO `text_fields` (`id_text_field`,  `field_name`)  VALUES ";

    $count = 0;

    foreach ($values as $value) {
        $count++;

        $value = trimValues($value);
        $sql .= "($value[id_text_field], '$value[field_name]')";

        $sql .= $count == count($values) ? ";" : ",";
    }

    echo changeDataBaseRequest($sql, "Ошибка создании текстового поля");
}
