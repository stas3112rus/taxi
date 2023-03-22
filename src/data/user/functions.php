<?
function isUserExist($user_name)
{
    $sql = "SELECT 
                *
                FROM `users`
                WHERE `user_name` = '$user_name'
            ";
    return isExist($sql);
}

function getUserByName($user_name)
{
    $sql = "SELECT
            *
        FROM `users`
        WHERE `user_name` = '$user_name'  
        ";

    return getOneRowFromDataBase($sql);
}

function getUserByID($user_id)
{
    $sql = "SELECT
            *
        FROM `users`
        WHERE `id_user` = '$user_id'  
        ";

    return getOneRowFromDataBase($sql);
}

function updatePassword($user, $password)
{
    if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
        $newHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE `users` SET 
                    `password`='$newHash'
                WHERE id_user = '$user[id_user]";

        return changeDataBaseRequest($sql, "Ошибка при обновлении пароля в базу данных");
    }

    return "OK";
}

function changePasswordRequest($user_id, $password)
{
    $newHash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE `users` SET 
        `password`='$newHash'
    WHERE id_user = '$user_id'";

    return changeDataBaseRequest($sql, "Ошибка при обновлении пароля в базу данных");
}
