<?
function editEng($data)
{
    if ($data['new_city_eng'] == $data['old_city_eng']) {
        return drawAlert("Старое значение Eng равно новому", "alert-danger");
    }

    $old_city = getCityWithIndependentEng($data['id_city'], $data['old_city_eng']);
    $new_city = getCityWithIndependentEng($data['id_city'], $data['new_city_eng']);

    $updateDataBase = updateCityEng($new_city);
    if ($updateDataBase != 'Ok')
        return drawAlert($updateDataBase, "alert-danger");

    $renameAll = renameAll($old_city, $new_city);
    if ($renameAll != 'Ok')
        return drawAlert($renameAll, "alert-danger");

    $deploySitemap = deploySitemaps();
    if ($deploySitemap != "Ok")
        return drawAlert($deploySitemap, "alert-danger");

    $robotDeploy = deployRobot($new_city);
    if ($robotDeploy != "Ok")
        return $robotDeploy;

    $htacces =  deployHtacces($new_city);
    if ($htacces != "Ok")
        return $htacces;

    return drawAlert("ENG обновлен", "alert-success");
}

function getCityWithIndependentEng($id, $eng)
{
    $city = getCityById($id);
    $city['eng'] = trim(mb_strtolower($eng));

    return $city;
}

function renameAll($old_city, $new_city)
{
    //Переименовываем домен
    $renameBasic = rename(
        getFullPathToDomain($old_city),
        getFullPathToDomain($new_city)
    );
    if (!$renameBasic) {
        return "Не удалось переименовать базовый домен";
    }

    //Переименовываем вхождения
    foreach (getAllWithoutOneCities($new_city['id_city']) as $city) {
        rename(
            getFullPathDirectionFolder($city, $old_city),
            getFullPathDirectionFolder($city, $new_city)
        );

        rename(
            getFullPathTransferFolder($city, $old_city),
            getFullPathTransferFolder($city, $new_city)
        );
    }

    return "Ok";
}
