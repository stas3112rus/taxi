<?
function updateMainCityByGet()
{

    $result_update = "";

    $main_city = $_GET['main_city'];

    if ($main_city) {
        $main_city_in_base = getMainCity();

        if ($main_city_in_base['id_city'] != $main_city) {
            $result_update = updateMainCity($main_city);
        }
    }

    return $result_update;
}

function updateMainCity($idMain)
{
    $delete = deleteMainCity();
    if ($delete != "Ok")
        return drawAlert($delete, "alert-danger");

    $create = createMainCity($idMain);
    if ($create != "Ok")
        return drawAlert($create, "alert-danger");

    return drawAlert("Главный сайт обновлён успешно", "alert-success");
}
