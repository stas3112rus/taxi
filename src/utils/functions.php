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

function getProtocol()
{
    $protocol = '';

    if (
        isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
    ) {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }

    return $protocol;
}

function getMainUrl($eng, $isMain = false)
{
    $protocol = getProtocol();

    if ($isMain) {
        return $protocol . getSubDomainName($eng, true) . "/";
    }

    return $protocol . getSubDomainName($eng, false) . "/";
}

function isNotPublicMainInDirections()
{
    return !!getDefaultValueByName('not_public_main_in_directions');
}
