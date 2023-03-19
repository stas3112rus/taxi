<?
function getRootDirection($domain)
{
    $dir = $_SERVER['DOCUMENT_ROOT'];

    $dir = str_replace("/www/admin.$domain", '', $dir);
    $dir = str_replace("taxi2023/www", 'taxi2023/', $dir);

    return $dir;
}

function getSubDomainName($eng, $domain, $isMain = false)
{
    if ($isMain) {
        return $domain;
    } else {
        return $eng . "." . $domain;
    }
}

function getFullDirectionToDomain($eng, $domain, $isMain = false)
{
    return getRootDirection($domain) . "www/" . getSubDomainName($eng, $domain, $isMain) . "/";
}

function createFolder($dir)
{

    if (mkdir($dir)) {
        return "Ok";
    } else {
        return "Не удалось создать папку: " . $dir;
    }
}
