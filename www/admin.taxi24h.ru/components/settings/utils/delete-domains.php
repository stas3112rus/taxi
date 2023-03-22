<?
function deleteDomains()
{
    $domains = getListOfDomains();

    foreach ($domains as $domain) {
        if ($domain) {
            deleteFolder($domain);
        }
    }

    return drawAlert("Файлы удалены", "alert-success");
}
