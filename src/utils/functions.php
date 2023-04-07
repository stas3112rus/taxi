<?
function getDomain()
{
    $domain = getDefaultValueByName('domain');
    if (!$domain)   throw new Exception('В константах не задан domain');

    return  $domain;
}

function getRootPath()
{
    $domain = getDomain();

    $dir = $_SERVER['DOCUMENT_ROOT'];

    $dir = str_replace("/www/admin.$domain", '', $dir);
    $dir = str_replace("taxi2023/www", 'taxi2023', $dir);

    return $dir."/";
}

function getSubDomainName($eng, $isMain = false)
{
    $domain = getDomain();

    if ($isMain) {
        return $domain;
    } else {
        return $eng . "." . $domain;
    }
}


function getMainUrl($eng, $isMain = false)
{
    if ($isMain) {
        return "http://" . getSubDomainName($eng, true) . "/";
    }

    return "http://" . getSubDomainName($eng, false) . "/";
}

function isNotPublicMainInDirections()
{
    return !!getDefaultValueByName('not_public_main_in_directions');
}
