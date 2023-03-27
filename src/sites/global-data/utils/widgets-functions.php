<?
function upgradedWidgets($showInHeader = false)
{
    $widgets = getWidgets($showInHeader);
    $divorcedWidgets = getDivorcedWidgetsByTypes($widgets);

    return  geCurrentWidgets($divorcedWidgets);
}

function getDivorcedWidgetsByTypes($widgets)
{
    $result = [];

    foreach ($widgets as $widget) {
        $result[$widget['widget_type']][$widget['main_city'] ? 'main' : 'current'] = $widget['widget_code'];
    }
    return $result;
}

function geCurrentWidgets($widgets)
{
    $result = [];

    foreach ($widgets as $widget) {
        if ($widget['current']) {
            array_push($result, $widget['current']);
            continue;
        }
        if ($widget['main'])
            array_push($result, $widget['main']);
    }

    return $result;
}
