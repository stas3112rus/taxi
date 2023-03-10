<?
function updateMainCityByGet($base)
{

    $result_update = "";

    $main_city = $_GET['main_city'];

    if ($main_city) {
        $main_city_in_base = getMainCity($base);

        if ($main_city_in_base['id_city'] != $main_city) {
            $result_update = updateMainCity($main_city, $base);
        }
    }

    return $result_update;
}

function updateMainCity($idMain, $base)
{
    $delete = deleteMainCity($base);
    if ($delete != "Ok")
        return drawAlert($delete, "alert-danger");

    $create = createMainCity($idMain, $base);
    if ($create != "Ok")
        return drawAlert($create, "alert-danger");

    return drawAlert("Главный сайт обновлён успешно", "alert-success");
}
