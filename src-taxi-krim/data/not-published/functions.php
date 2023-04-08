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

function getNotPublishingCitiesForSite($city)
{
    $sql = "SELECT 
    city_from_ref as id_city
    FROM `not_published_cities`
    WHERE `city_to_ref` = '$city[id_city]'
    ";

    return getAllRowsFromDataBase($sql);
}