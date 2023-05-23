<?
function getNotPublishedCities($city_from_id)
{
    $sql = "SELECT 
    *
    FROM `not_published_cities`
    WHERE `city_from_ref` = '$city_from_id'
    ";

    return getAllRowsFromDataBase($sql);
}


function deleteNotPublishedCities($from)
{
    $sql = "DELETE FROM 
        `not_published_cities` 
        WHERE `city_from_ref` = '$from';
        ";
    return changeDataBaseRequest($sql, "Ошибка при удалении неопубликованных сайтов");
}

function createNotPublishedCities($from, $to)
{
    $sql = "INSERT 
        INTO 
        `not_published_cities`
            (`city_from_ref`, `city_to_ref`) 
        VALUES 
            ('$from','$to')";
    return changeDataBaseRequest($sql, "Ошибка создании неопубликованных сайтов");
}

function getAllNotPublishedCitiesForApi()
{
    $sql = "SELECT 
    cityFrom.im as cityFrom,
    cityTo.im as cityTo

    FROM `not_published_cities`
    JOIN cities cityFrom ON cityFrom.id_city = not_published_cities.city_from_ref
	JOIN cities cityTo ON cityTo.id_city = not_published_cities.city_to_ref
    ";

    return getAllRowsFromDataBase($sql);
}
