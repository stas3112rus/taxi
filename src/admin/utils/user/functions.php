<?
    function isUserExist($user_name, $base){
        $sql = "SELECT 
                *
                FROM `users`
                WHERE `user_name` = '$user_name'
            ";
        $res = $base -> query($sql);
        return( $res -> num_rows > 0);
    }

    function getUserByName($user_name, $base){
        $sql = "SELECT
            *
        FROM `users`
        WHERE `user_name` = '$user_name'  
        ";

        $res = $base -> query($sql);
        return $res ->fetch_assoc();
    }

    function updatePassword($user, $password, $base) {
        if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
            $newHash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "UPDATE `users` SET 
                    `password`='$newHash'
                WHERE id_user = 'users['id_user']'";
            
            if ($base -> query($sql)){
                return "OK";
               } else{
                return "Ошибка при обновлении пароля в базу данных: ". "<br>" . $base->error;
               }
        }

        return "OK";
    }    

?>