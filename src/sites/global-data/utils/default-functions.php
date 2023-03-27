<?
function getDefaults()
{
    $result = [];

    foreach (getAllDefaults() as $default) {
        $result[$default['default_name']] = $default['default_value'];
    }

    return $result;
}
