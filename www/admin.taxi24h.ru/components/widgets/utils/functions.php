<?
function getWidgetCodeListByType($widgets)
{
    $result = [];

    foreach ($widgets as $widget) {
        $result[$widget['widget_type_ref']] = $widget['widget_code'];
    }

    return $result;
}

function updateWidgets($post)
{
    $delete = deleteWidgetsByCityId($post['city_id']);

    if ($delete != 'Ok') {
        return drawAlert($delete, "alert-danger");
    }

    $dataForWidgetUpdate = upgradeWidgetDataPost($post);

    foreach ($dataForWidgetUpdate as $value) {
        $addWidget = addWidget($value);

        if ($addWidget != 'Ok') {
            return drawAlert($addWidget, "alert-danger");
        }
    }

    return drawAlert("Виджеты обновлены", "alert-success");
}

function deleteWidgetsByCity($city_id){
    $delete = deleteWidgetsByCityId($city_id);
    if ($delete != 'Ok') {
        return drawAlert($delete, "alert-danger");
    }
    return drawAlert("Виджеты удалены", "alert-success");
}

function upgradeWidgetDataPost($post)
{
    $result = [];

    foreach ($post as $widgetDataKey => $widgetDataValue) {
        if ($widgetDataKey != 'city_id' && $widgetDataKey != 'type') {
            array_push($result, [
                'city_id' => $post['city_id'],
                'widget_type_id' => $widgetDataKey,
                'widget_code' => $widgetDataValue
            ]);
        }
    }

    return $result;
}
