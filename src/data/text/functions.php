<?
function getTextsByType($text_type_id)
{
    $sql = "SELECT * FROM `texts` WHERE `text_type_ref` = '$text_type_id'";
    return getAllRowsFromDataBase($sql);
}

function deleteTextsByTextType($text_type_id)
{
    $sql = "DELETE 
    FROM `texts`
    WHERE `text_type_ref` = '$text_type_id';
    ";

    return changeDataBaseRequest($sql, "Ошибка при удалении текстов по типу");
}

function deleteTextsByField($text_field_id)
{
    $sql = "DELETE 
    FROM `texts`
    WHERE `text_field_ref` = '$text_field_id';
    ";

    return changeDataBaseRequest($sql, "Ошибка при удалении текстов по полю");
}

function addText($value)
{
    $value = trimValues($value);

    $sql = "INSERT 
    INTO 
    `texts`
        (`text_field_ref`, `text_type_ref`, `value`) 
    VALUES 
        ('$value[text_field_id]', '$value[text_type_id]', '$value[value]')";

    return changeDataBaseRequest($sql, "Ошибка внесении текста");
}

function migrationText($values)
{
    $sql = "INSERT INTO `texts` (`text_field_ref`, `text_type_ref`, `value`)  VALUES ";

    $count = 0;

    foreach ($values as $value) {
        $count++;

        $value = trimValues($value);
        $sql .= "($value[text_field_ref], '$value[text_type_ref]', '$value[value]')";

        $sql .= $count == count($values) ? ";" : ",";
    }

    echo changeDataBaseRequest($sql, "Ошибка создании текстового поля");
}
