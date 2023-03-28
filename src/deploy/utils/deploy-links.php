<?
function deployLink($city)
{
    $target = getFullPathToDomain($city); // Это уже существующий файл
    $link = getFullPathToDomainWithWWW($city); // Это файл, который вы хотите привязать к первому
    $result = symlink($target, $link);
    if (!$result)
        return "Не удалось создать ссылку для города $city[im]";

    return "Ok";
}
