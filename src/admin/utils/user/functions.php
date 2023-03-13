<?
    function isUserExist($user_name){
        $sql = "SELECT 
                *
                FROM `users`
                WHERE `user_name` = '$user_name'
            ";
        return isExist($sql);
    }

    function getUserByName($user_name){
        $sql = "SELECT
            *
        FROM `users`
        WHERE `user_name` = '$user_name'  
        ";
        
        return getOneRowFromDataBase($sql);
    }

    function updatePassword($user, $password) {
        if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
            $newHash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "UPDATE `users` SET 
                    `password`='$newHash'
                WHERE id_user = 'users['id_user']'";        

               return changeDataBaseRequest($sql, "Ошибка при обновлении пароля в базу данных");
        }

        return "OK";
    }    

?>