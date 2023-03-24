<?
function deleteDomains($password)
{
    if (checkPassword($password)) {
        $domains =  getListOfDomainsWithoutAdmin();

        foreach ($domains as $domain) {
            if ($domain) {
                deleteFolder($domain);
            }
        }

        return drawAlert("Файлы удалены", "alert-success");
    }

    return  drawAlert("Пароль не верен", "alert-danger");
}
