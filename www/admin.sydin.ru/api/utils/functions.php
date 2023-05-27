<?
function printJsonFromArray($array)
{
    echo json_encode($array, JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE);
}

function getJsonArray($url)
{
    $data = @file_get_contents($url);

    if (!empty($data)) {

        return json_decode(html_entity_decode($data), TRUE);
    } else {
        return array(
            "error" => "Не удалось получить данные по url: $url"
        );
    }
}

function getArrayByKey($array, $key)
{
    $result = [];

    foreach ($array as $line) {
        $result[$line[$key]] = $line;
    }

    return $result;
}

function getArrayByTwoKey($array, $key1, $key2)
{
    $result = [];

    foreach ($array as $line) {
        $result[$line[$key1] . " - " . $line[$key2]] = $line;
    }

    return $result;
}

function getArrayWithAbsentValues($array_1, $array_2)
{
    $result = [];

    foreach ($array_2 as $key => $value) {
        if (!$array_1[$key]) {
            array_push($result, $value);
        }
    }

    return $result;
}
