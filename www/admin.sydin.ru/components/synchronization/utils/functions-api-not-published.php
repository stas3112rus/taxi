<?
function makeSynchronizationNotPublished()
{
    global $SITES_API_ROUTES;

    $notPublishedFromApi = getJsonArray($SITES_API_ROUTES[$_POST['site']]['notPublished']);

    if ($notPublishedFromApi['error'])
        return drawAlert($notPublishedFromApi['error'], "alert-danger");

    switch ($_POST['not_published_type']) {
        case "full":
            $synchronizationResult = synchronizationNotPublishedFull($notPublishedFromApi);
            break;
        case "add_new_values":
            $synchronizationResult = synchronizationNotPublishedNewValues($notPublishedFromApi);
            break;
    }

    if ($synchronizationResult != "Ok") {
        return drawAlert($synchronizationResult, "alert-danger");
    }

    return drawAlert("Непубликуемые направления успешно синхронизированы", "alert-success");
}

function synchronizationNotPublishedFull($notPublishedFromApi)
{
    $deleteAllNotPublishedCities = deleteAllNotPublishedCities();
    if ($deleteAllNotPublishedCities != "Ok")
        return $deleteAllNotPublishedCities;

    $notPublishedIds = prepareArrayNotPublishedForInsert($notPublishedFromApi);

    $createNotPublishedCitiesWithArray = createNotPublishedCitiesWithArray($notPublishedIds);
    if ($createNotPublishedCitiesWithArray != "Ok")
        return $createNotPublishedCitiesWithArray;

    return "Ok";
}

function synchronizationNotPublishedNewValues($notPublishedFromApi)
{
    return "Ok";
}

function prepareArrayNotPublishedForInsert($array)
{
    $cities = getArrayByKey(getAllCities(), 'im');
    $result = [];

    foreach ($array as $key => $array_line) {

        $city_from_id = $cities[$array_line['cityFrom']]['id_city'];
        $city_to_id = $cities[$array_line['cityTo']]['id_city'];

        if ($city_from_id && $city_to_id) {
            array_push(
                $result,
                array(
                    "city_from_ref" => "$city_from_id",
                    "city_to_ref" => "$city_to_id",
                )
            );
        }
    }

    return $result;
}
