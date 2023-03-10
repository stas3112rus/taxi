<?
function editCity($city, $base)
{
    $result = updateCity($city, $base);
    if ($result != "Ok")
        return drawAlert($result, "alert-danger");

    return drawAlert("Данные обновлены", "alert-success");
}
