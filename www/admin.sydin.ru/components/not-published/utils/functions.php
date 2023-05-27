<?
function getNotPublishedList($city_from_id)
{
    $cities =  getAllWithoutOneCities($city_from_id);

    $notPublishedList = [];

    foreach ($cities as $city) {
        $notPublishedList[$city['id_city']] = [
            'id' => $city['id_city'],
            'im' => $city['im'],
            'not_public' => false,
        ];
    }

    $notPublishedCities = getNotPublishedCities($city_from_id);

    foreach ($notPublishedCities as $notPublishedCity) {
        $city_to_id = $notPublishedCity['city_to_ref'];

       $notPublishedList[$city_to_id]['not_public'] = true;
    }

    return $notPublishedList;
}

function updateNotPublishedCities($post)
{
    $delete = deleteNotPublishedCities($post['id_city']);

    if ($delete != 'Ok') {
        return  drawAlert($delete, "alert-danger");
    }

    if (count($post['not_published']) > 0) {
        foreach ($post['not_published'] as $id_city_to) {
            $create = createNotPublishedCities($post['id_city'], $id_city_to);

            if ($create != 'Ok') {
                return  drawAlert($create, "alert-danger");
            }
        }
    }

    return drawAlert("Города, где не публикуем обновлены", "alert-success");
}

function setAllNotPublished($new_city){
    $allCities = getAllWithoutOneCities($new_city['id_city']);

    $notPublishedCities = [];

    foreach($allCities as $old_city){
        array_push($notPublishedCities,[
            "city_from_ref" => $old_city['id_city'],
            "city_to_ref" => $new_city['id_city']
        ]);
    }

    return createNotPublishedCitiesWithArray($notPublishedCities);
}