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

function getMainCity($base)
{
    $sql = "SELECT 
    *
    FROM `cities`
    WHERE main_city = '+'
    ";
    $res = $base->query($sql);

    return $res->fetch_assoc();
}

function getCityById($id, $base)
{
    $sql = "SELECT 
    *
    FROM `cities`
    WHERE id_city = '$id'
    ";
    $res = $base->query($sql);

    return $res->fetch_assoc();
}

function deleteMainCity($base)
{
    $sql = "UPDATE `cities` SET `main_city`= NULL";
    if ($base->query($sql)) {
        return "Ok";
    } else {
        return "Ошибка при удалении главного сайта: " . "<br>" . $base->error;
    }
}

function createMainCity($id, $base)
{
    $sql = "UPDATE `cities` SET `main_city`= '+' WHERE `id_city` = '$id'";
    if ($base->query($sql)) {
        return "Ok";
    } else {
        return "Ошибка при внесении главного сайта: " . "<br>" . $base->error;
    }
}

function updateCity($city, $base)
{
    $sql = "UPDATE `cities` SET 
    `im`= '$city[im]',
    `rod`='$city[rod]',
    `dat`='$city[dat]',
    `vin`='$city[vin]',
    `tvor`='$city[tvor]',
    `pred`='$city[pred]'

    WHERE `id_city` = '$city[id_city]'";

    if ($base->query($sql)) {
        return "Ok";
    } else {
        return "Ошибка при обновлении данных города: " . "<br>" . $base->error;
    }
}
