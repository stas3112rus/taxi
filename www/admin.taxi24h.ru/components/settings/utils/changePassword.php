<?
function changePassword($password)
{
    $changePasswords = changePasswordRequest($_SESSION['id_user'], $password);
    if ($changePasswords != 'Ok') {
        return drawAlert($changePasswords, "alert-danger");
    }
    return drawAlert("Пароль обновлен", "alert-success");
}
