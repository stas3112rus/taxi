<?

function getYandexVerification($url)
{
    $pagestr = file_get_contents($url);
    $pagejson = json_encode($pagestr);
    header('Cache-Control: no-cache, must-revalidate');
    header('Content-type: application/json; charset=utf-8');

    $start_exist = stripos($pagejson, '<meta name=\"yandex-verification\"');
    $pre_result = mb_substr($pagejson, $start_exist);
    $finish_exist = stripos($pre_result, '>');

    $result = mb_substr($pre_result, 0, $finish_exist + 1);
    $result = str_replace("\\", '', $result);

    $result = trim($result);

    return $result ?? false;
}


