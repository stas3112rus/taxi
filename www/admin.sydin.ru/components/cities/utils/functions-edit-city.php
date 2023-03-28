<?
function editCity($city)
{
    $result = updateCity($city);
    if ($result != "Ok")
        return drawAlert($result, "alert-danger");

    return drawAlert("Данные обновлены", "alert-success");
}
