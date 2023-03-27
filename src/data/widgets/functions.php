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

function deleteWidgetsByTypeId($widget_type)
{
    $sql = "DELETE 
    FROM `widgets`
    WHERE `widget_type_ref` = '$widget_type';
    ";

    return changeDataBaseRequest($sql, "Ошибка при удалении виджета по id типа");
}

function addWidget($value)
{
    $value = trimValues($value);

    $sql = "INSERT 
    INTO 
    `widgets`
        (`city_ref`, `widget_type_ref`, `widget_code`) 
    VALUES 
        ('$value[city_id]', '$value[widget_type_id]', '$value[widget_code]')";

    return changeDataBaseRequest($sql, "Ошибка создании виджета");
}

function getWidgets($showInHeader = false)
{
    global $CITY_FROM, $MAIN_CITY;

    $sqlShowInHeader = $showInHeader ? " AND showInHeader = 1" : " AND showInHeader = 0";

    $sql = "SELECT 
        widget_code,
        main_city,
        widget_type_ref as widget_type
        FROM `widgets` 
        INNER JOIN cities ON city_ref = id_city
        INNER JOIN widgets_types ON widget_type_ref = id_widget_type  
    WHERE (`city_ref` = '$CITY_FROM[id_city]' OR `city_ref` = '$MAIN_CITY[id_city]') $sqlShowInHeader";

    return getAllRowsFromDataBase($sql);
}
