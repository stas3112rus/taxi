<?
function getAllCities($base)
{
    $sql = "SELECT 
    *
    FROM `cities`
    ORDER BY main_city  DESC 
    ";
    $res = $base->query($sql);

    return ($res->fetch_all(MYSQLI_ASSOC));
}
