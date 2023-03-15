<?
function getWidgetsByCityId($city_id)
{
    $sql = "SELECT * FROM `widgets` WHERE `city_ref` = '$city_id'";
    return getAllRowsFromDataBase($sql);
}

function deleteWidgetsByCityId($city_id)
{
    $sql = "DELETE 
    FROM `widgets`
    WHERE `city_ref` = '$city_id';
    ";

    return changeDataBaseRequest($sql, "Ошибка при удалении виджета по id города");
}

function addWidget($value)
{

    $sql = "INSERT 
    INTO 
    `widgets`
        (`city_ref`, `widget_type_ref`, `widget_code`) 
    VALUES 
        ('$value[city_id]', '$value[widget_type_id]', '$value[widget_code]')";

    return changeDataBaseRequest($sql, "Ошибка создании виджета");
}
