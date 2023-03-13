<?
function getAllCities()
{
    $sql = "SELECT 
    *
    FROM `cities`
    ORDER BY main_city  DESC 
    ";

    return getAllRowsFromDataBase($sql);
}

function getAllWithoutOneCities($id)
{
    $sql = "SELECT 
    *
    FROM `cities`
    WHERE 
        `id_city` <> '$id'
    ORDER BY main_city  DESC 
    ";

    return getAllRowsFromDataBase($sql);
}

function getMainCity()
{
    $sql = "SELECT 
    *
    FROM `cities`
    WHERE main_city = '+'
    ";

    return getOneRowFromDataBase($sql);
}

function getCityById($id)
{
    $sql = "SELECT 
    *
    FROM `cities`
    WHERE id_city = '$id'
    ";
    return getOneRowFromDataBase($sql);
}

function deleteMainCity()
{
    $sql = "UPDATE `cities` SET `main_city`= NULL";

    return changeDataBaseRequest($sql, "Ошибка при удалении главного сайта");
}

function createMainCity($id)
{
    $sql = "UPDATE `cities` SET `main_city`= '+' WHERE `id_city` = '$id'";

    return changeDataBaseRequest($sql, "Ошибка при внесении главного сайта");
}

function updateCity($city)
{
    $sql = "UPDATE `cities` SET 
    `im`= '$city[im]',
    `rod`='$city[rod]',
    `dat`='$city[dat]',
    `vin`='$city[vin]',
    `tvor`='$city[tvor]',
    `pred`='$city[pred]'

    WHERE `id_city` = '$city[id_city]'";

    return changeDataBaseRequest($sql, "Ошибка при обновлении данных города");
}
