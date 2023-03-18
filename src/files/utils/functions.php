<?
function getRootDirection($domain){
    $dir = $_SERVER['DOCUMENT_ROOT'];     

    $dir = str_replace("/www/admin.$domain",'',$dir);
    $dir = str_replace("taxi2023/www",'taxi2023/',$dir);

    return $dir;
}

function getSubDomainName($eng, $domain, $isMain = false){
    if ($isMain){
        return $domain;
    } else {
        return $eng.".".$domain;
    }
}

function createFolderDomain($eng, $domain, $isMain = false){
    $dir = getRootDirection($domain) ."www/".getSubDomainName($eng, $domain, $isMain);
    
    echo $dir;

    if (mkdir($dir)){
        return "Ok";
    } else {
        return "Не удалось создать папку для домена";
    }
}